<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    /**
     * Find reservations by user
     *
     * @return array<int, Reservation>
     */
    public function findByUser(int $idUser): array
    {
        return $this->findBy(
            ['idUser' => $idUser],
            ['dateReservation' => 'DESC']
        );
    }

    /**
     * Find reservations by type and status
     *
     * @return array<int, Reservation>
     */
    public function findByTypeAndStatus(string $type, string $status): array
    {
        return $this->findBy(
            [
                'typeReservation' => $type,
                'statut' => $status,
            ],
            ['dateReservation' => 'DESC']
        );
    }

    /**
     * Find hebergement reservations with eager loading
     *
     * @return array<int, Reservation>
     */
    public function findByHebergementOptimized(int $hebergementId): array
    {
        return $this->createQueryBuilder('r')
            ->leftJoin('r.hebergement', 'h')
            ->addSelect('h')
            ->where('r.hebergement = :hebergementId')
            ->setParameter('hebergementId', $hebergementId)
            ->orderBy('r.dateReservation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find confirmed hebergement reservations
     *
     * @return array<int, Reservation>
     */
    public function findConfirmedHebergement(int $hebergementId): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.hebergement = :hebergementId')
            ->andWhere('r.statut = :statut')
            ->andWhere('r.typeReservation = :type')
            ->setParameter('hebergementId', $hebergementId)
            ->setParameter('statut', 'CONFIRMEE')
            ->setParameter('type', 'HEBERGEMENT')
            ->orderBy('r.dateReservation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function countConfirmedByUser(User $user): int
    {
        return (int) $this->createQueryBuilder('r')
            ->select('COUNT(r.idReservation)')
            ->where('r.idUser = :userId')
            ->andWhere('r.statut = :statut')
            ->setParameter('userId', $user->getId())
            ->setParameter('statut', 'CONFIRMEE')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getTotalConfirmedAmount(User $user): float
    {
        $result = $this->createQueryBuilder('r')
            ->select('SUM(r.montantTotal)')
            ->where('r.idUser = :userId')
            ->andWhere('r.statut = :statut')
            ->setParameter('userId', $user->getId())
            ->setParameter('statut', 'CONFIRMEE')
            ->getQuery()
            ->getSingleScalarResult();

        return (float) ($result ?? 0);
    }

    public function findMostVisitedCity(User $user): ?string
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "
            SELECT h.localisation as destination, COUNT(r.idReservation) as total
            FROM reservation r
            JOIN hebergement h ON r.idHebergement = h.idHebergement
            WHERE r.idUser = :userId AND r.typeReservation = 'HEBERGEMENT'
            GROUP BY h.localisation

            UNION ALL

            SELECT e.lieu as destination, COUNT(r.idReservation) as total
            FROM reservation r
            JOIN excursion e ON r.idHebergement = e.idExcursion
            WHERE r.idUser = :userId AND r.typeReservation = 'EXCURSION'
            GROUP BY e.lieu

            ORDER BY total DESC
            LIMIT 1
        ";

        $result = $conn->fetchAssociative(
            $sql,
            ['userId' => $user->getId()]
        );

        return is_array($result)
            ? ($result['destination'] ?? null)
            : null;
    }
}