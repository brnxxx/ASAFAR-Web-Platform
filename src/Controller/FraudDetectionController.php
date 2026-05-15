<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\FraudDetectionService;
use App\Service\GeoLocationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class FraudDetectionController extends AbstractController
{
    #[Route('/smart-login', name: 'smart_login', methods: ['POST'])]
    public function smartLogin(
        Request $request,
        EntityManagerInterface $em,
        FraudDetectionService $fraud,
        GeoLocationService $geo,
        TokenStorageInterface $tokenStorage
    ): JsonResponse {
        $email    = $request->request->get('_username');
        $password = $request->request->get('_password');

        if (!$email || !$password) {
            return $this->json(['status' => 'ERROR', 'message' => 'Email et mot de passe requis']);
        }

        $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);

        if (!$user) {
            return $this->json(['status' => 'ERROR', 'message' => 'Utilisateur introuvable']);
        }

        $ip    = $request->getClientIp() ?? '127.0.0.1';
        // FIX :67/:86/:115/:125 — get() returns ?string; default to 'unknown' ensures string
        $agent = $request->headers->get('User-Agent') ?? 'unknown';

        $location  = $geo->getLocation($ip);

        // FIX :50/:51 — getLocation() return type guarantees 'country' and 'city' always exist
        // (never null), so ?? is redundant. Access directly:
        $country   = $location['country'];
        $city      = $location['city'];
        $latitude  = $location['latitude'];
        $longitude = $location['longitude'];
        $mapUrl    = $location['map_url'];

        // FIX :57 — request->get() returns mixed; cast both to string before password_verify
        $passwordCorrect = password_verify((string) $password, (string) $user->getPassword());

        if (!$passwordCorrect) {
            $currentScore = $user->getTrustScore() ?? 50;
            $newScore     = max(0, $currentScore - 15);

            $user->setTrustScore($newScore);
            $em->flush();

            // FIX :67 — cast $email to string (request->get() returns mixed)
            $fraud->saveAttempt(
                $user, (string) $email, $ip, $agent,
                $country, $city, false, 0, 'PASSWORD', 0, 'WRONG_PASSWORD',
                $latitude, $longitude
            );

            if ($newScore <= 40) {
                return $this->json(['status' => 'FACE_REQUIRED', 'message' => 'Trop de tentatives → Face ID requis']);
            }

            return $this->json(['status' => 'ERROR', 'message' => 'Mot de passe incorrect', 'trustScore' => $newScore]);
        }

        // FIX :86 — $agent is now string (guarded above)
        $risk            = $fraud->calculateRiskScore($user, $ip, $agent, $country, $city, $passwordCorrect);
        $currentScore    = $user->getTrustScore() ?? 50;
        $calculatedScore = $fraud->calculateTrustScore($user);
        $newTrustScore   = min($currentScore, $calculatedScore);

        $user->setTrustScore($newTrustScore);
        $em->flush();

        $geoData = [
            'country'    => $country,
            'city'       => $city,
            'latitude'   => $latitude,
            'longitude'  => $longitude,
            'map_url'    => $mapUrl,
            'trustScore' => $newTrustScore,
            'riskScore'  => $risk,
            'role'       => $user->getRoles()[0],
        ];

        if ($newTrustScore < 50) {
            // FIX :115 — cast $email to string
            $fraud->saveAttempt(
                $user, (string) $email, $ip, $agent,
                $country, $city, false, $risk, 'PASSWORD', 0, 'FACE_REQUIRED',
                $latitude, $longitude
            );

            return $this->json(array_merge($geoData, [
                'status'  => 'FACE_REQUIRED',
                'message' => 'Vérification Face ID requise',
            ]));
        }

        // FIX :125 — cast $email to string
        $fraud->saveAttempt(
            $user, (string) $email, $ip, $agent,
            $country, $city, true, $risk, 'PASSWORD', 0, null,
            $latitude, $longitude
        );

        $token = new UsernamePasswordToken($user, 'main', $user->getRoles());
        $tokenStorage->setToken($token);
        $request->getSession()->set('_security_main', serialize($token));

        return $this->json(array_merge($geoData, [
            'status'       => 'OK',
            'message'      => 'Connexion réussie',
            'redirect_url' => $this->getRedirectUrl($user),
        ]));
    }

    private function getRedirectUrl(User $user): string
    {
        return in_array('ROLE_ADMIN', $user->getRoles())
            ? $this->generateUrl('admin_dashboard')
            : $this->generateUrl('home');
    }
}