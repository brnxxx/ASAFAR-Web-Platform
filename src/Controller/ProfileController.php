<?php

namespace App\Controller;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use App\Entity\User;
use App\Service\FidelityService;
use App\Repository\QuizSessionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\FraudDetectionService;
use App\Repository\ReservationRepository;
use App\Repository\WheelSpinRepository;

class ProfileController extends AbstractController
{
    private UserRepository $userRepository;
    private EntityManagerInterface $entityManager;
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(
        UserRepository $userRepository,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ) {
        $this->userRepository = $userRepository;
        $this->entityManager  = $entityManager;
        $this->passwordHasher = $passwordHasher;
    }

    #[Route('/profil', name: 'profile_index')]
    public function index(
        FidelityService $fidelityService,
        ReservationRepository $reservationRepo,
        QuizSessionRepository $quizRepo,
        FraudDetectionService $fraud,
        WheelSpinRepository $wheelRepo
    ): Response {
        $user = $this->getUser();

        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Vous devez être connecté.');
        }

        $profile = $this->userRepository->find($user->getId());

        if (!$profile) {
            throw $this->createNotFoundException('Profil non trouvé.');
        }

        $trustScore     = $fraud->calculateTrustScore($profile);
        $nbReservations = $reservationRepo->countConfirmedByUser($profile);
        $totalSpent     = $reservationRepo->getTotalConfirmedAmount($profile);
        $score          = $fidelityService->calculateGlobalScore($profile);
        $level          = $fidelityService->getLevel($score);
        $promo          = $fidelityService->getPromoByScore($score);
        $totalQuizScore = $quizRepo->getTotalScoreByUser($profile);
        $alreadyPlayed  = $wheelRepo->hasUserPlayedToday($user);

        return $this->render('sarra/profile.html.twig', [
            'profile'        => $profile,
            'trustScore'     => $trustScore,
            'score'          => $score,
            'level'          => $level,
            'promo'          => $promo,
            'nbReservations' => $nbReservations,
            'totalSpent'     => $totalSpent,
            'alreadyPlayed'  => $alreadyPlayed,
            'totalQuizScore' => $totalQuizScore,
        ]);
    }

    #[Route('/profil/modifier', name: 'profile_update', methods: ['POST'])]
    public function update(Request $request): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->json(['success' => false, 'message' => 'Vous devez être connecté.'], Response::HTTP_UNAUTHORIZED);
        }

        $profile = $this->userRepository->find($user->getId());
        if (!$profile) {
            return $this->json(['success' => false, 'message' => 'Profil non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        try {
            $prenom    = $request->request->get('prenom');
            $nom       = $request->request->get('nom');
            $email     = $request->request->get('email');
            $numero    = $request->request->get('telephone');
            $imageFile = $request->files->get('image');

            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                $imageFile->move($this->getParameter('uploads_directory'), $newFilename);
                $profile->setImage($newFilename);
            }

            if ($prenom !== null) {
                $profile->setPrenom((string) $prenom);
            }
            if ($nom !== null) {
                $profile->setNom((string) $nom);
            }
            if ($email !== null) {
                $profile->setEmail((string) $email);
            }
            if ($numero !== null) {
                $profile->setTelephone((string) $numero);
            }

            $trustScore = $this->calculateTrustScore($profile);
            $profile->setTrustScore($trustScore);
            $this->entityManager->flush();

            return $this->json(['success' => true, 'message' => 'Profil mis à jour avec succès.', 'trustScore' => $trustScore]);

        } catch (\Exception $e) {
            return $this->json(['success' => false, 'message' => 'Erreur lors de la mise à jour.']);
        }
    }

    #[Route('/profil/changer-mot-de-passe', name: 'profile_change_password', methods: ['POST'])]
    public function changePassword(Request $request): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->json(['success' => false, 'message' => 'Vous devez être connecté.']);
        }

        $profile = $this->userRepository->find($user->getId());
        if (!$profile) {
            return $this->json(['success' => false, 'message' => 'Profil non trouvé.']);
        }

        // FIX :192 — is_string() guard instead of (string) cast; UnitEnum/array cannot be cast
        $currentPassword = $request->request->get('current_password');
        $newPassword     = $request->request->get('new_password');
        $confirmPassword = $request->request->get('confirm_password');

        if (!is_string($currentPassword) || !is_string($newPassword) || !is_string($confirmPassword)) {
            return $this->json(['success' => false, 'message' => 'Paramètres invalides.']);
        }

        if (!$this->passwordHasher->isPasswordValid($profile, $currentPassword)) {
            return $this->json(['success' => false, 'field' => 'current_password', 'message' => 'Mot de passe actuel incorrect']);
        }

        if ($newPassword !== $confirmPassword) {
            return $this->json(['success' => false, 'field' => 'confirm_password', 'message' => 'Les mots de passe ne correspondent pas']);
        }

        if (strlen($newPassword) < 8) {
            return $this->json(['success' => false, 'field' => 'new_password', 'message' => 'Au moins 8 caractères']);
        }

        $hashedPassword = $this->passwordHasher->hashPassword($profile, $newPassword);
        $profile->setPassword($hashedPassword);
        $this->entityManager->flush();

        return $this->json(['success' => true, 'message' => 'Mot de passe modifié']);
    }

    #[Route('/profil/supprimer', name: 'profile_delete', methods: ['POST'])]
    public function delete(Request $request, TokenStorageInterface $tokenStorage): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->json(['success' => false, 'message' => 'Vous devez être connecté.'], Response::HTTP_UNAUTHORIZED);
        }

        $profile = $this->userRepository->find($user->getId());
        if (!$profile) {
            return $this->json(['success' => false, 'message' => 'Profil non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        try {
            // FIX :251 — is_string() guard instead of (string) cast
            $password = $request->request->get('password');
            if (!is_string($password)) {
                return $this->json(['success' => false, 'message' => 'Paramètre invalide.'], Response::HTTP_BAD_REQUEST);
            }

            if (!$this->passwordHasher->isPasswordValid($profile, $password)) {
                return $this->json(['success' => false, 'message' => 'Mot de passe incorrect. Suppression annulée.'], Response::HTTP_BAD_REQUEST);
            }

            if ($profile->getImage()) {
                $uploadsDir = $this->getParameter('uploads_directory');
                if (!is_string($uploadsDir)) {
                    throw new \RuntimeException('uploads_directory must be a string');
                }
                $imagePath = $uploadsDir . '/' . $profile->getImage();
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $this->entityManager->remove($profile);
            $this->entityManager->flush();

            $request->getSession()->invalidate();
            $tokenStorage->setToken(null);

            $this->addFlash('success', 'Votre compte a été supprimé avec succès.');

            return $this->json([
                'success'  => true,
                'message'  => 'Compte supprimé avec succès.',
                'redirect' => $this->generateUrl('home'),
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            return $this->json(['success' => false, 'message' => 'Une erreur est survenue lors de la suppression du compte.'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/profil/upload-photo', name: 'profile_upload_photo', methods: ['POST'])]
    public function uploadPhoto(Request $request): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->json(['success' => false, 'message' => 'Vous devez être connecté.'], Response::HTTP_UNAUTHORIZED);
        }

        $profile = $this->userRepository->find($user->getId());
        if (!$profile) {
            return $this->json(['success' => false, 'message' => 'Profil non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        try {
$photoFile = $request->files->get('image');
            if (!$photoFile) {
                return $this->json(['success' => false, 'message' => 'Aucun fichier n\'a été téléchargé.'], Response::HTTP_BAD_REQUEST);
            }

            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
            $extension         = $photoFile->guessExtension();

            if (!in_array($extension, $allowedExtensions)) {
                return $this->json(['success' => false, 'message' => 'Format non autorisé. Formats acceptés: ' . implode(', ', $allowedExtensions)], Response::HTTP_BAD_REQUEST);
            }

            if ($photoFile->getSize() > 5 * 1024 * 1024) {
                return $this->json(['success' => false, 'message' => 'La taille du fichier ne doit pas dépasser 5 Mo.'], Response::HTTP_BAD_REQUEST);
            }

            if ($profile->getImage()) {
                $uploadsDir = $this->getParameter('uploads_directory');
                if (!is_string($uploadsDir)) {
                    throw new \RuntimeException('uploads_directory must be a string');
                }
                $oldImagePath = $uploadsDir . '/' . $profile->getImage();
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $uploadsDir = $this->getParameter('uploads_directory');
            if (!is_string($uploadsDir)) {
                throw new \RuntimeException('uploads_directory must be a string');
            }

            $newFileName = uniqid('profile_') . '.' . $extension;
            $photoFile->move($uploadsDir, $newFileName);

            $profile->setImage($newFileName);

            $trustScore = $this->calculateTrustScore($profile);
            $profile->setTrustScore($trustScore);

            $this->entityManager->persist($profile);
            $this->entityManager->flush();

            return $this->json([
                'success'    => true,
                'message'    => 'Photo de profil mise à jour avec succès.',
                'newImage'   => $newFileName,
                'trustScore' => $trustScore,
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            return $this->json(['success' => false, 'message' => 'Une erreur est survenue lors du téléchargement de la photo.'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    private function calculateTrustScore(User $user): int
    {
        $score = 50;
        $conn  = $this->entityManager->getConnection();

        $recentFailures = (int) $conn->executeQuery("
            SELECT COUNT(*) FROM login_history
            WHERE user_id = ?
            AND success = 0
            AND login_time >= DATE_SUB(NOW(), INTERVAL 10 MINUTE)
        ", [$user->getId()])->fetchOne();

        if ($recentFailures >= 3) {
            $score -= 30;
        } elseif ($recentFailures >= 1) {
            $score -= 10;
        }

        $success = (int) $conn->executeQuery("
            SELECT COUNT(*) FROM login_history
            WHERE user_id = ?
            AND success = 1
            AND login_time >= DATE_SUB(NOW(), INTERVAL 1 DAY)
        ", [$user->getId()])->fetchOne();

        if ($success >= 5) {
            $score += 20;
        } elseif ($success >= 2) {
            $score += 10;
        }

        $ipCount = (int) $conn->executeQuery("
            SELECT COUNT(*) FROM login_history
            WHERE user_id = ?
            AND ip_address = (
                SELECT ip_address FROM login_history
                WHERE user_id = ?
                ORDER BY login_time DESC
                LIMIT 1
            )
            AND success = 1
        ", [$user->getId(), $user->getId()])->fetchOne();

        if ($ipCount == 0) {
            $score -= 15;
        }

        $deviceCount = (int) $conn->executeQuery("
            SELECT COUNT(*) FROM login_history
            WHERE user_id = ?
            AND device_fingerprint = (
                SELECT device_fingerprint FROM login_history
                WHERE user_id = ?
                ORDER BY login_time DESC
                LIMIT 1
            )
            AND success = 1
        ", [$user->getId(), $user->getId()])->fetchOne();

        if ($deviceCount == 0) {
            $score -= 10;
        }

        $faceUsage = (int) $conn->executeQuery("
            SELECT COUNT(*) FROM login_history
            WHERE user_id = ?
            AND auth_method = 'FACE'
            AND success = 1
        ", [$user->getId()])->fetchOne();

        if ($faceUsage >= 1) {
            $score += 15;
        }

        if ($user->getTrustScore() !== null) {
            $score = (int) (($score * 0.7) + ($user->getTrustScore() * 0.3));
        }

        return max(0, min($score, 100));
    }

    #[Route('/profil/image', name: 'profile_image', methods: ['POST'])]
    public function changeImage(Request $request): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        $imageFile = $request->files->get('image');

        if ($imageFile) {
            $newFilename = uniqid() . '.' . $imageFile->guessExtension();
            $imageFile->move($this->getParameter('uploads_directory'), $newFilename);
            $user->setImage($newFilename);
            $this->entityManager->flush();
        }

        return $this->redirectToRoute('profile');
    }
}