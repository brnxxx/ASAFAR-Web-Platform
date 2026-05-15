<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<User>
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Count total users
     * @return int
     */
    public function countTotal(): int
    {
        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Count users by status
     * @return int
     */
    public function countByStatus(string $status): int
    {
        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.statut = :status')
            ->setParameter('status', $status)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Count active users
     * @return int
     */
    public function countActive(): int
    {
        return $this->countByStatus('actif');
    }

    /**
     * Count inactive users
     * @return int
     */
    public function countInactive(): int
    {
        return $this->countByStatus('inactif');
    }

    /**
     * Count blocked users
     * @return int
     */
    public function countBlocked(): int
    {
        return $this->countByStatus('bloqué');
    }

    /**
     * Count users by role
     * @return int
     */
    public function countByRole(string $role): int
    {
        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.role = :role')
            ->setParameter('role', $role)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Count admin users
     * @return int
     */
    public function countAdmins(): int
    {
        return $this->countByRole('admin');
    }

    /**
     * Count users registered this month
     * @return int
     */
    public function countNewThisMonth(): int
    {
        $startOfMonth = new \DateTime('first day of this month 00:00:00');
        $endOfMonth = new \DateTime('last day of this month 23:59:59');

        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.dateInscription >= :start')
            ->andWhere('u.dateInscription <= :end')
            ->setParameter('start', $startOfMonth)
            ->setParameter('end', $endOfMonth)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Count users registered last month
     * @return int
     */
    public function countNewLastMonth(): int
    {
        $startOfLastMonth = new \DateTime('first day of last month 00:00:00');
        $endOfLastMonth = new \DateTime('last day of last month 23:59:59');

        return (int) $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.dateInscription >= :start')
            ->andWhere('u.dateInscription <= :end')
            ->setParameter('start', $startOfLastMonth)
            ->setParameter('end', $endOfLastMonth)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Calculate growth percentage for new users
     * @return float
     */
    public function calculateNewUsersGrowth(): float
    {
        $thisMonth = $this->countNewThisMonth();
        $lastMonth = $this->countNewLastMonth();

        if ($lastMonth == 0) {
            return $thisMonth > 0 ? 100.0 : 0.0;
        }

        return round((($thisMonth - $lastMonth) / $lastMonth) * 100, 1);
    }

    /**
     * Calculate total users growth
     * @return float
     */
    public function calculateTotalGrowth(): float
    {
        $total = $this->countTotal();
        $lastMonthTotal = $total - $this->countNewThisMonth();

        if ($lastMonthTotal == 0) {
            return $total > 0 ? 100.0 : 0.0;
        }

        return round((($total - $lastMonthTotal) / $lastMonthTotal) * 100, 1);
    }

    /**
     * Get all statistics
     * @return array{total: int, active: int, inactive: int, blocked: int, admins: int, newThisMonth: int, growth: float, newGrowth: float}
     */
    public function getUserStats(): array
    {
        return [
            'total' => $this->countTotal(),
            'active' => $this->countActive(),
            'inactive' => $this->countInactive(),
            'blocked' => $this->countBlocked(),
            'admins' => $this->countAdmins(),
            'newThisMonth' => $this->countNewThisMonth(),
            'growth' => $this->calculateTotalGrowth(),
            'newGrowth' => $this->calculateNewUsersGrowth(),
        ];
    }

/**
     * Get recent users (last N users)
     * @return array<int, User>
     */
    public function findRecentUsers(int $limit = 5): array
    {
        return $this->createQueryBuilder('u')
            ->orderBy('u.dateInscription', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Save user entity
     */
    public function save(User $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Remove user entity
     */
    public function remove(User $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
/** @return array<int, User> */
    public function findSortedByName(string $search = '', string $filter = 'all', string $order = 'ASC'): array
{
    $qb = $this->createQueryBuilder('u');

    if ($search) {
        $qb->andWhere('u.nom LIKE :search OR u.prenom LIKE :search')
           ->setParameter('search', '%' . $search . '%');
    }

    if ($filter !== 'all') {
        $qb->andWhere('u.statut = :filter')
           ->setParameter('filter', $filter);
    }

    return $qb
        ->orderBy('u.nom', $order) // 🔥 TRI ICI
        ->getQuery()
        ->getResult();
}
}
