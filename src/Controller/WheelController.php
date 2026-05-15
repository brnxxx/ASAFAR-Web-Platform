<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\WheelSpin;
use App\Repository\WheelSpinRepository;
use App\Repository\QuizSessionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class WheelController extends AbstractController
{
    #[Route('/api/wheel/spin', name: 'api_wheel_spin', methods: ['POST'])]
    public function spin(
        WheelSpinRepository $wheelRepo,
        QuizSessionRepository $sessionRepo,
        EntityManagerInterface $em
    ): JsonResponse {

        $user = $this->getUser();

        if (!$user instanceof User) {
            return $this->json(['error' => 'not_logged'], 401);
        }

        // 🔒 une fois par jour
        if ($wheelRepo->hasUserPlayedToday($user)) {
            return $this->json(['error' => 'already_played'], 403);
        }

        // 🎯 gains = score quiz
        $pool = [
            ...array_fill(0, 40, 0),
            ...array_fill(0, 45, 1),
            ...array_fill(0, 10, 2),
            ...array_fill(0, 4, 3),
            ...array_fill(0, 1, 4),
        ];

        $gain = $pool[array_rand($pool)];

        // 🔥 récupérer session quiz
        $session = $sessionRepo->findLastByUser($user);

        if ($session && $gain > 0) {
            $session->setScore($session->getScore() + $gain);
        }

        // 🎁 fidélité (optionnel)
        if ($gain > 0) {
$user->setFidelityPoints(
                $user->getFidelityPoints() + ($gain * 10)
            );
        }

        // 📊 enregistrer spin
        $spin = new WheelSpin();
        $spin->setUser($user);
        $spin->setReward($gain);

        $em->persist($spin);
        $em->flush();

        return $this->json([
            'gain' => $gain,
            'quizScore' => $session?->getScore(),
            'totalPoints' => $user->getFidelityPoints()
        ]);
    }
}