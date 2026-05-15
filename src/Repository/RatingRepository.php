<?php

namespace App\Repository;

use App\Entity\Excursion;
use App\Entity\Rating;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Rating>
 */
class RatingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rating::class);
    }

    public function getAverage(Excursion $excursion): float
    {
        return (float) $this->createQueryBuilder('r')
            ->select('COALESCE(AVG(r.value), 0)')
            ->andWhere('r.excursion = :excursion')
            ->setParameter('excursion', $excursion)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getAverageByExcursion(Excursion $excursion): ?float
    {
        $result = $this->createQueryBuilder('r')
            ->select('AVG(r.value)')
            ->where('r.excursion = :exc')
            ->setParameter('exc', $excursion)
            ->getQuery()
            ->getSingleScalarResult();

        return $result !== null
            ? (float) $result
            : null;
    }
}