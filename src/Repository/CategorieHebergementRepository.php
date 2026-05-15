<?php

namespace App\Repository;

use App\Entity\CategorieHebergement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CategorieHebergement>
 */
class CategorieHebergementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategorieHebergement::class);
    }

    /**
     * Find all categories with hebergements
     * @return array<int, CategorieHebergement>
     */
    public function findAllWithHebergements(): array
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.hebergements', 'h')
            ->addSelect('h')
            ->orderBy('c.idCategorie', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
