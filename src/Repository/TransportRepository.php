<?php

namespace App\Repository;

use App\Entity\Transport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Transport>
 */
class TransportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Transport::class);
    }

    /**
     * Find transports by type (AVION, voiture, etc.)
     * @return array<int, Transport>
     */
    public function findByType(string $type): array
    {
        return $this->findBy(['type' => $type]);
    }

    /**
     * Find transports by price range
     * @return array<int, Transport>
     */
    public function findByPriceRange(float $minPrice, float $maxPrice): array
    {
        return $this->createQueryBuilder('t')
            ->where('t.prix >= :minPrice AND t.prix <= :maxPrice')
            ->setParameter('minPrice', $minPrice)
            ->setParameter('maxPrice', $maxPrice)
            ->orderBy('t.prix', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find transports from a departure airport
     * @param int|string $aeroportId
     * @return array<int, Transport>
     */
    public function findByAeroportDepart($aeroportId): array
    {
        return $this->createQueryBuilder('t')
            ->where('t.aeroportDepart = :aeroportId')
            ->setParameter('aeroportId', $aeroportId)
            ->orderBy('t.dateCreation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find transports to a destination airport
     * @param int|string $aeroportId
     * @return array<int, Transport>
     */
    public function findByAeroportDestination($aeroportId): array
    {
        return $this->createQueryBuilder('t')
            ->where('t.aeroportDestination = :aeroportId')
            ->setParameter('aeroportId', $aeroportId)
            ->orderBy('t.dateCreation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find transports by user
     * @return array<int, Transport>
     */
    public function findByUser(string $idUser): array
    {
        return $this->findBy(['idUser' => $idUser], ['dateCreation' => 'DESC']);
    }

    /**
     * Find all transports with eager-loaded airport relationships (optimized for display)
     * @return array<int, Transport>
     */
    public function findAllWithAirports(): array
    {
        return $this->createQueryBuilder('t')
            ->leftJoin('t.aeroportDepart', 'ad')
            ->addSelect('ad')
            ->leftJoin('t.aeroportDestination', 'adest')
            ->addSelect('adest')
            ->leftJoin('t.aeroportPriseEnCharge', 'apec')
            ->addSelect('apec')
            ->orderBy('t.dateCreation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find transports with pagination and eager-loaded relationships
     * @return array<int, Transport>
     */
    public function findWithPagination(int $page = 1, int $limit = 20): array
    {
        $offset = ($page - 1) * $limit;

        return $this->createQueryBuilder('t')
            ->leftJoin('t.aeroportDepart', 'ad')
            ->addSelect('ad')
            ->leftJoin('t.aeroportDestination', 'adest')
            ->addSelect('adest')
            ->leftJoin('t.aeroportPriseEnCharge', 'apec')
            ->addSelect('apec')
            ->orderBy('t.dateCreation', 'DESC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Get total count for pagination
     * @return int<0, max>
     */
    public function count(array $criteria = []): int
    {
        $result = (int) $this->createQueryBuilder('t')
            ->select('COUNT(t.idTransport)')
            ->getQuery()
            ->getSingleScalarResult();

        return max(0, $result);
    }

    /**
     * Find transports by aeroportDepart with eager loading
     * @param int|string $aeroportId
     * @return array<int, Transport>
     */
    public function findByAeroportDepartOptimized($aeroportId): array
    {
        return $this->createQueryBuilder('t')
            ->leftJoin('t.aeroportDepart', 'ad')
            ->addSelect('ad')
            ->leftJoin('t.aeroportDestination', 'adest')
            ->addSelect('adest')
            ->leftJoin('t.aeroportPriseEnCharge', 'apec')
            ->addSelect('apec')
            ->where('t.aeroportDepart = :aeroportId')
            ->setParameter('aeroportId', $aeroportId)
            ->orderBy('t.dateCreation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find transports by aeroportDestination with eager loading
     * @param int|string $aeroportId
     * @return array<int, Transport>
     */
    public function findByAeroportDestinationOptimized($aeroportId): array
    {
        return $this->createQueryBuilder('t')
            ->leftJoin('t.aeroportDepart', 'ad')
            ->addSelect('ad')
            ->leftJoin('t.aeroportDestination', 'adest')
            ->addSelect('adest')
            ->leftJoin('t.aeroportPriseEnCharge', 'apec')
            ->addSelect('apec')
            ->where('t.aeroportDestination = :aeroportId')
            ->setParameter('aeroportId', $aeroportId)
            ->orderBy('t.dateCreation', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
