<?php

namespace App\Repository;

use App\Entity\QuizSession;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/** @extends ServiceEntityRepository<QuizSession> */
class QuizSessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QuizSession::class);
    }

    public function findLastByUser(User $user): ?QuizSession
    {
        return $this->createQueryBuilder('q')
            ->where('q.user = :user')
            ->setParameter('user', $user)
            ->orderBy('q.createdAt', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function hasPlayedThisWeek(User $user): bool
    {
        $start = new \DateTime();
        $start->modify('monday this week')->setTime(0, 0);

        $end = new \DateTime();
        $end->modify('sunday this week')->setTime(23, 59);

        $count = $this->createQueryBuilder('q')
            ->select('COUNT(q.id)')
            ->where('q.user = :user')
            ->andWhere('q.createdAt BETWEEN :start AND :end')
            ->andWhere('q.played = true')
            ->setParameter('user', $user)
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery()
            ->getSingleScalarResult();

        return (int) $count > 0;
    }

    public function getTotalScoreByUser(User $user): int
    {
        return (int) $this->createQueryBuilder('q')
            ->select('SUM(q.score)')
            ->where('q.user = :user')
            ->andWhere('q.played = 1')
            ->setParameter('user', $user)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function resetAndSetRemainingScore(User $user, int $remaining): void
    {
        /** @var QuizSession[] $sessions */
        $sessions = $this->findBy(['user' => $user]);

        foreach ($sessions as $s) {
            $s->setScore(0);
        }

        if (!empty($sessions)) {
            $sessions[0]->setScore($remaining);
        }
    }
}