<?php

namespace App\Service;

use App\Entity\User;
use App\Entity\QuizSession;
use App\Entity\QuizQuestion;
use App\Repository\QuizSessionRepository;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;

class QuizService
{
    public function __construct(
        private QuizSessionRepository $quizRepo,
        private ReservationRepository $reservationRepo,
        private GeminiService $gemini,
        private EntityManagerInterface $em
    ) {}

    public function getOrCreateWeeklyQuiz(User $user): QuizSession
    {
        $last = $this->quizRepo->findLastByUser($user);

        if ($last && $last->getCreatedAt() > new \DateTime('-7 days')) {
            return $last;
        }

// APRÈS
$destination = $this->reservationRepo->findMostVisitedCity($user) ?? 'France';
$type = 'VOYAGE';

        // 🤖 Gemini
        $questionsData = $this->gemini->generateQuiz($destination, $type);

        // 🧠 session
        $session = new QuizSession();
        $session->setUser($user);
        $session->setCreatedAt(new \DateTime());

        $this->em->persist($session);

        foreach ($questionsData as $q) {
            $question = new QuizQuestion();
            $question->setSession($session);
            $question->setQuestion($q['question']);
            $question->setChoices($q['choices']);
            $question->setAnswer($q['answer']);

            $this->em->persist($question);
        }

        $this->em->flush();

        return $session;
    }
}