<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\WheelSpinRepository;
use App\Repository\QuizQuestionRepository;
use App\Service\QuizService;
use App\Repository\QuizSessionRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{


#[Route('/', name: 'app_root')]
#[Route('/home', name: 'app_home')]
public function index(
    WheelSpinRepository $wheelRepo,
    QuizService $quizService,
    QuizQuestionRepository $questionRepo,
    QuizSessionRepository $sessionRepo
): Response {
    $user = $this->getUser();

    $canPlayWheel = false;
    $questions = [];
    $showQuiz = false;

    if ($user instanceof User) {

        $canPlayWheel = !$wheelRepo->hasUserPlayedToday($user);

        // 🔥 CHECK SEMAINE
        $alreadyPlayed = $sessionRepo->hasPlayedThisWeek($user);

        if (!$alreadyPlayed) {
            $session = $quizService->getOrCreateWeeklyQuiz($user);
            $questions = $questionRepo->findBy(['session' => $session]);
        }
    }

    return $this->render('index.html.twig', [
        'canPlayWheel' => $canPlayWheel,
        'questions' => $questions,
        'showQuiz' => $showQuiz
    ]);
}
}