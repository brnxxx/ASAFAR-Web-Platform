<?php

namespace App\Repository;

use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Post>
 */
class PostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }

    /**
     * @return array<int, Post>
     */
    public function findAllWithCommentsAndUsers(): array
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.createdAt', 'DESC')
            ->addOrderBy('p.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return array<int, Post>
     */
    public function findWithFilters(string $search = '', string $type = '', string $author = '', string $sort = 'desc'): array
    {
        $qb = $this->createQueryBuilder('p')
            ->leftJoin('p.user', 'u')
            ->addSelect('u');

        if ($search !== '') {
            $qb->andWhere('p.titre LIKE :search OR p.contenu LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        if ($type !== '') {
            $qb->andWhere('p.type = :type')
                ->setParameter('type', $type);
        }

        if ($author !== '') {
            $qb->andWhere("CONCAT(u.nom, ' ', u.prenom) LIKE :author")
                ->setParameter('author', '%' . $author . '%');
        }

        $qb->orderBy('p.createdAt', strtoupper($sort) === 'ASC' ? 'ASC' : 'DESC');

        return $qb->getQuery()->getResult();
    }
}