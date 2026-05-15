<?php

namespace App\Repository;

use App\Entity\ReponseReclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/** @extends ServiceEntityRepository<ReponseReclamation> */
class ReponseReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReponseReclamation::class);
    }

    /**
     * 🔥 Récupérer toutes les réponses d'une réclamation (historique)
     * @return array<int, ReponseReclamation>
     */
    public function findByReclamation(int $reclamationId): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.reclamation = :id')
            ->setParameter('id', $reclamationId)
            ->orderBy('r.createdAt', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * 🔥 Récupérer la DERNIÈRE réponse (important pour insatisfaction)
     */
    public function findLastByReclamation(int $reclamationId): ?ReponseReclamation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.reclamation = :id')
            ->setParameter('id', $reclamationId)
            ->orderBy('r.createdAt', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * 🔥 Vérifier si dernière réponse = insatisfait
     */
    public function isLastUnsatisfied(int $reclamationId): bool
    {
        $last = $this->findLastByReclamation($reclamationId);

        if (!$last) {
            return false;
        }

        return $last->getSatisfait() === false;
    }
}