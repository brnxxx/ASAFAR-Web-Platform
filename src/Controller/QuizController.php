<?php

namespace App\Controller;
use App\Repository\QuizQuestionRepository;
use App\Repository\QuizSessionRepository;

use App\Entity\User;
use App\Service\QuizService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizController extends AbstractController
{
    #[Route('/quiz', name: 'quiz_page')]
    public function index(QuizService $quizService): Response
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

$session = $quizService->getOrCreateWeeklyQuiz($user);
return $this->redirectToRoute('app_home');
    }

    #[Route('/quiz/submit', name: 'quiz_submit', methods: ['POST'])]
public function submit(
    Request $request,
    QuizService $quizService,
    QuizQuestionRepository $questionRepo,
    QuizSessionRepository $sessionRepo,
    EntityManagerInterface $em
): Response {

    $user = $this->getUser();

    if (!$user instanceof User) {
        return $this->redirectToRoute('app_login');
    }

    // 🔥 récupérer la session existante
    $session = $sessionRepo->findLastByUser($user);

    if (!$session) {
        return $this->redirectToRoute('app_home');
    }

    // 🔥 récupérer les questions stockées
    $questions = $questionRepo->findBy([
        'session' => $session
    ]);

    $score = 0;

    foreach ($questions as $q) {

        $userAnswer = $request->request->get('q' . $q->getId());

        if ($userAnswer === $q->getAnswer()) {
           $score += 10;
        }
    }

    // 🎁 points
    $points = $score * 10;
    $user->setFidelityPoints($user->getFidelityPoints() + $points);

    // 🔒 marquer comme joué
// 🔒 marquer comme joué
$session->setPlayed(true);
$session->setScore($score);

// 🔥 total quiz
$totalQuiz = $sessionRepo->getTotalScoreByUser($user);

// convertir en points
$totalPoints = $totalQuiz * 10;

// 🎯 palier
if ($totalPoints >= 100) {

    $bonus = intdiv($totalPoints, 100) * 10;

    $user->setFidelityPoints(
        $user->getFidelityPoints() + $bonus
    );

    // garder le reste
    $remainingPoints = $totalPoints % 100;
    $remainingScore = intdiv($remainingPoints, 10);

    $sessionRepo->resetAndSetRemainingScore($user, $remainingScore);
}
    $em->flush();

    return $this->json([
        'success' => true,
        'score' => $score,
        'points' => $points
    ]);
}
    
}