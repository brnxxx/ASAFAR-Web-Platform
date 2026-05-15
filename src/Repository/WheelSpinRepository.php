<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\WheelSpin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/** @extends ServiceEntityRepository<WheelSpin> */
class WheelSpinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WheelSpin::class);
    }

    public function hasUserPlayedToday(User $user): bool
    {
        $start = new \DateTime('today');
        $end = new \DateTime('tomorrow');

        $count = $this->createQueryBuilder('w')
            ->select('COUNT(w.id)')
            ->where('w.user = :user')
            ->andWhere('w.createdAt >= :start')
            ->andWhere('w.createdAt < :end')
            ->setParameter('user', $user)
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery()
            ->getSingleScalarResult();

        return (int) $count > 0;
    }
}