<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\FaceService;
use App\Service\FraudDetectionService;
use App\Service\GeoLocationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class FaceLoginController extends AbstractController
{
    #[Route('/face-login', name: 'face_login', methods: ['POST'])]
    public function faceLogin(
        Request $request,
        EntityManagerInterface $em,
        FaceService $faceService,
        FraudDetectionService $fraud,
        GeoLocationService $geo,
        TokenStorageInterface $tokenStorage
    ): JsonResponse {
        $data        = json_decode($request->getContent(), true);
        $email       = $data['email'] ?? null;
        $imageBase64 = $data['image'] ?? null;

        if (!$email || !$imageBase64) {
            return new JsonResponse(['status' => 'ERROR', 'message' => 'Données invalides'], 400);
        }

        $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);

        if (!$user) {
            return new JsonResponse(['status' => 'ERROR', 'message' => 'Utilisateur introuvable'], 404);
        }

        if (!$user->getImage()) {
            return new JsonResponse(['status' => 'ERROR', 'message' => 'Aucune image enregistrée'], 400);
        }

        $ip       = $request->getClientIp() ?? '127.0.0.1';

        // FIX :91/:110 — headers->get() returns string|null; default to 'unknown'
        $agent    = $request->headers->get('User-Agent') ?? 'unknown';

        $location = $geo->getLocation($ip);

        // FIX :50/:51 — country/city always exist per return type; drop ?? fallback
        $country   = $location['country'];
        $city      = $location['city'];
        $latitude  = $location['latitude'];
        $longitude = $location['longitude'];

        // FIX :60 — preg_replace() can return array|string; cast to string for base64_decode()
        $imageBase64 = preg_replace('/^data:image\/\w+;base64,/', '', $imageBase64);
        $imageBase64 = str_replace(' ', '+', (string) $imageBase64);

        $tempFile = tempnam(sys_get_temp_dir(), 'face_');
        file_put_contents($tempFile, base64_decode((string) $imageBase64));

$uploadsDir = $this->getParameter('uploads_directory');

if (!is_string($uploadsDir)) {
    throw new \RuntimeException('uploads_directory must be a string');
}

$imageName   = basename($user->getImage());
$storedImage = $uploadsDir . '/' . $imageName;

        if (!file_exists($storedImage)) {
            return new JsonResponse([
                'status'  => 'ERROR',
                'message' => 'Image introuvable. Chemin : ' . $storedImage,
            ], 400);
        }

        $result     = $faceService->compareFaces($storedImage, $tempFile);
        $confidence = $result['confidence'] ?? 0;
        if (file_exists($tempFile)) {
            unlink($tempFile);
        }

        $newTrustScore = $fraud->calculateTrustScore($user);
        $user->setTrustScore($newTrustScore);
        $em->flush();

        if ($confidence >= 80) {
            $fraud->saveAttempt($user, $email, $ip, $agent, $country, $city,
                true, 0, 'FACE', $confidence, null, $latitude, $longitude);

            $token = new UsernamePasswordToken($user, 'main', $user->getRoles());
            $tokenStorage->setToken($token);
            $request->getSession()->set('_security_main', serialize($token));

            $redirectUrl = in_array('ROLE_ADMIN', $user->getRoles())
                ? $this->generateUrl('admin_dashboard')
                : $this->generateUrl('home');

            return new JsonResponse([
                'status'       => 'OK',
                'message'      => 'Connexion réussie',
                'redirect_url' => $redirectUrl,
            ]);
        }

        $fraud->saveAttempt($user, $email, $ip, $agent, $country, $city,
            false, 0, 'FACE', $confidence, 'FACE_FAIL', $latitude, $longitude);

        return new JsonResponse([
            'status'  => 'ERROR',
            'message' => "Visage non reconnu (score: $confidence)",
        ]);
    }
}