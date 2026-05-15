<?php

namespace App\Repository;

use App\Entity\Paiement;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Paiement>
 */
class PaiementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Paiement::class);
    }

    /**
     * @return array<int, Paiement>
     */
    public function findByReservation(int $reservationId): array
    {
        return $this->createQueryBuilder('p')
            ->join('p.reservation', 'r')
            ->where('r.idReservation = :id')
            ->setParameter('id', $reservationId)
            ->orderBy('p.datePaiement', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByStripeId(string $stripeId): ?Paiement
    {
        $result = $this->createQueryBuilder('p')
            ->where('p.stripePaymentId = :sid')
            ->setParameter('sid', $stripeId)
            ->getQuery()
            ->getOneOrNullResult();

        return $result instanceof Paiement ? $result : null;
    }

    /**
     * @return array<int, Paiement>
     */
    public function findByUser(User $user): array
    {
        return $this->createQueryBuilder('p')
            ->join('p.reservation', 'r')
            ->where('r.user = :user')
            ->setParameter('user', $user)
            ->orderBy('p.datePaiement', 'DESC')
            ->getQuery()
            ->getResult();
    }
}