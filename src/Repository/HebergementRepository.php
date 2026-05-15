<?php

namespace App\Repository;

use App\Entity\Hebergement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Hebergement>
 */
class HebergementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hebergement::class);
    }

    /**
     * @return array<int, string>
     */
    public function findAllLocalisations(): array
    {
        $qb = $this->createQueryBuilder('h')
            ->select('DISTINCT h.localisation')
            ->where('h.localisation IS NOT NULL')
            ->andWhere('h.localisation != :empty')
            ->setParameter('empty', '')
            ->orderBy('h.localisation', 'ASC');

        $results = $qb->getQuery()->getScalarResult();

        return array_map(fn($row) => $row['localisation'], $results);
    }

    /**
     * @return array<int, Hebergement>
     */
    public function findByLocalisationAndBudget(string $localisation, float $budget): array
    {
        return $this->createQueryBuilder('h')
            ->where('h.localisation LIKE :localisation')
            ->andWhere('h.prixParNuit <= :budget')
            ->andWhere('h.disponibilite = :disponible')
            ->setParameter('localisation', '%' . $localisation . '%')
            ->setParameter('budget', $budget)
            ->setParameter('disponible', 'DISPONIBLE')
            ->orderBy('h.prixParNuit', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return array<int, Hebergement>
     */
    public function findAllWithCategorie(): array
    {
        return $this->createQueryBuilder('h')
            ->leftJoin('h.categorieHebergement', 'c')
            ->addSelect('c')
            ->orderBy('h.idHebergement', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return array<int, Hebergement>
     */
    public function findByType(string $type): array
    {
        return $this->findBy(['type' => $type], ['idHebergement' => 'DESC']);
    }

    /**
     * @param int|string $categorieId
     * @return array<int, Hebergement>
     */
    public function findByCategorie($categorieId): array
    {
        return $this->createQueryBuilder('h')
            ->where('h.categorieHebergement = :categorieId')
            ->setParameter('categorieId', $categorieId)
            ->orderBy('h.idHebergement', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return array<int, Hebergement>
     */
    public function findByLocalisation(string $localisation): array
    {
        return $this->findBy(['localisation' => $localisation], ['idHebergement' => 'DESC']);
    }

    /**
     * @return array<int, Hebergement>
     */
    public function findByPriceRange(float $minPrice, float $maxPrice): array
    {
        return $this->createQueryBuilder('h')
            ->where('h.prixParNuit BETWEEN :min AND :max')
            ->setParameter('min', $minPrice)
            ->setParameter('max', $maxPrice)
            ->orderBy('h.prixParNuit', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return array<int, Hebergement>
     */
    public function findByUser(int $idUser): array
    {
        return $this->findBy(['idUser' => $idUser], ['idHebergement' => 'DESC']);
    }

    /**
     * @return array<int, Hebergement>
     */
    public function findAvailable(): array
    {
        return $this->createQueryBuilder('h')
            ->where('h.disponibilite = :disponibilite')
            ->setParameter('disponibilite', 'DISPONIBLE')
            ->orderBy('h.idHebergement', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return array<int, Hebergement>
     */
    public function findWithPagination(int $page = 1, int $limit = 20): array
    {
        $offset = ($page - 1) * $limit;

        return $this->createQueryBuilder('h')
            ->leftJoin('h.categorieHebergement', 'c')
            ->addSelect('c')
            ->orderBy('h.idHebergement', 'DESC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function countAll(): int
    {
        return (int) $this->createQueryBuilder('h')
            ->select('COUNT(h.idHebergement)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * @return array<int, Hebergement>
     */
    public function findByLocalisationOptimized(string $localisation): array
    {
        return $this->createQueryBuilder('h')
            ->leftJoin('h.categorieHebergement', 'c')
            ->addSelect('c')
            ->where('h.localisation = :localisation')
            ->setParameter('localisation', $localisation)
            ->orderBy('h.idHebergement', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return array<int, Hebergement>
     */
    public function findAvailableOptimized(): array
    {
        return $this->createQueryBuilder('h')
            ->leftJoin('h.categorieHebergement', 'c')
            ->addSelect('c')
            ->where('h.disponibilite = :disponibilite')
            ->setParameter('disponibilite', 'DISPONIBLE')
            ->orderBy('h.noteMoyenne', 'DESC')
            ->addOrderBy('h.idHebergement', 'DESC')
            ->getQuery()
            ->getResult();
    }
}