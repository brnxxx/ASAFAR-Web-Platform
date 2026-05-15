<?php

namespace App\Repository;

use App\Entity\ReclamationWhatsAppSession;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReclamationWhatsAppSession>
 */
class ReclamationWhatsAppSessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReclamationWhatsAppSession::class);
    }

    public function save(ReclamationWhatsAppSession $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ReclamationWhatsAppSession $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Trouver une session active par téléphone
     */
    public function findActiveByPhone(string $phone): ?ReclamationWhatsAppSession
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.phone = :phone')
            ->andWhere('s.isActive = :active')
            ->setParameter('phone', $phone)
            ->setParameter('active', true)
            ->orderBy('s.createdAt', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Trouver une session par ID de réclamation
     */
    public function findByReclamationId(int $reclamationId): ?ReclamationWhatsAppSession
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.reclamationId = :reclamationId')
            ->setParameter('reclamationId', $reclamationId)
            ->getQuery()
            ->getOneOrNullResult();
    }
}