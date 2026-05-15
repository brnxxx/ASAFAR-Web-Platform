<?php

namespace App\Repository;

use App\Entity\PromoCode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
/** @extends ServiceEntityRepository<PromoCode> */
class PromoCodeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PromoCode::class);
    }

    /**
     * 🔍 Trouver un code promo valide
     */
    public function findValidCode(string $code): ?PromoCode
    {
        return $this->createQueryBuilder('p')
            ->where('UPPER(p.code) = :code')
            ->andWhere('p.actif = true')
            ->andWhere('p.dateExpiration IS NULL OR p.dateExpiration >= :today')
            ->setParameter('code', strtoupper(trim($code)))
            ->setParameter('today', new \DateTime())
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * 🔍 Vérifier si un code existe (même inactif)
     */
    public function exists(string $code): bool
    {
        return (bool) $this->createQueryBuilder('p')
            ->select('COUNT(p.id)')
            ->where('UPPER(p.code) = :code')
            ->setParameter('code', strtoupper(trim($code)))
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * 🔍 Récupérer tous les codes actifs
     */    /** @return array<int, PromoCode> */
    public function findAllActive(): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.actif = true')
            ->andWhere('p.dateExpiration IS NULL OR p.dateExpiration >= :today')
            ->setParameter('today', new \DateTime())
            ->orderBy('p.pourcentage', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * 🔍 Codes expirés
     */    /** @return array<int, PromoCode> */
    public function findExpired(): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.dateExpiration < :today')
            ->setParameter('today', new \DateTime())
            ->getQuery()
            ->getResult();
    }

    /**
     * 🔍 Codes les plus intéressants (top réductions)
     */    /** @return array<int, PromoCode> */
    public function findTopPromos(int $limit = 5): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.actif = true')
            ->orderBy('p.pourcentage', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}