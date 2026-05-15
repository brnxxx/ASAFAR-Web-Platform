<?php

namespace App\Repository;

use App\Entity\Excursion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/** @extends ServiceEntityRepository<Excursion> */
class ExcursionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Excursion::class);
    }

    /** @return array<int, Excursion> */
    public function findForAdmin(string $search = '', ?int $categoryId = null, string $sort = 'date', ?int $maxResults = null): array
    {
        $qb = $this->createQueryBuilder('e')
            ->leftJoin('e.categorie', 'c')
            ->addSelect('c');

        if ($search !== '') {
            $terms = preg_split('/\s+/', mb_strtolower($search), -1, PREG_SPLIT_NO_EMPTY) ?: [];

            foreach ($terms as $index => $term) {
                $param = 'term_' . $index;
                $qb->andWhere(sprintf(
                    '(LOWER(e.titre) LIKE :%1$s OR LOWER(e.lieu) LIKE :%1$s OR LOWER(e.description) LIKE :%1$s)',
                    $param
                ))
                    ->setParameter($param, '%' . $term . '%');
            }
        }

        if ($categoryId !== null) {
            $qb->andWhere('c.id = :categoryId')
                ->setParameter('categoryId', $categoryId);
        }

        $sortMap = [
            'date'  => ['e.date', 'DESC'],
            'prix'  => ['e.prixAdulte', 'ASC'],
            'titre' => ['e.titre', 'ASC'],
        ];

        [$sortField, $sortDirection] = $sortMap[$sort] ?? $sortMap['date'];
        $qb->orderBy($sortField, $sortDirection);

        if ($maxResults !== null) {
            $qb->setMaxResults($maxResults);
        }

        return $qb->getQuery()->getResult();
    }

    /** @return array<int, Excursion> */
    public function findByCategorie(mixed $categorie): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.categorie = :cat')
            ->setParameter('cat', $categorie)
            ->orderBy('e.date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /** @return array<int, Excursion> */
    public function searchAjax(string $q): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.titre LIKE :q')
            ->orWhere('e.lieu LIKE :q')
            ->setParameter('q', '%' . $q . '%')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }

    /** @return array<int, Excursion> */
    public function findWithFilters(string $search, mixed $categorie): array
    {
        $qb = $this->createQueryBuilder('e')
            ->leftJoin('e.categorie', 'c');

        if ($search) {
            $qb->andWhere('e.titre LIKE :search OR e.lieu LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($categorie) {
            $qb->andWhere('c.id = :cat')
               ->setParameter('cat', $categorie);
        }

        return $qb->getQuery()->getResult();
    }

    /** @return array<int, Excursion> */
    public function findAllWithCategories(): array
    {
        return $this->createQueryBuilder('e')
            ->leftJoin('e.categorie', 'c')
            ->addSelect('c')
            ->orderBy('e.date', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /** @return array<int, Excursion> */
    public function findByCategory(int $categoryId): array
    {
        return $this->createQueryBuilder('e')
            ->leftJoin('e.categorie', 'c')
            ->addSelect('c')
            ->where('c.id = :categoryId')
            ->setParameter('categoryId', $categoryId)
            ->orderBy('e.date', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /** @return array<int, Excursion> */
    public function findUpcoming(\DateTimeInterface $fromDate = null): array
    {
        $from = $fromDate ?? new \DateTime('today');

        return $this->createQueryBuilder('e')
            ->leftJoin('e.categorie', 'c')
            ->addSelect('c')
            ->where('e.date >= :from')
            ->setParameter('from', $from)
            ->orderBy('e.date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /** @return array<int, Excursion> */
    public function findPast(\DateTimeInterface $toDate = null): array
    {
        $to = $toDate ?? new \DateTime('today');

        return $this->createQueryBuilder('e')
            ->leftJoin('e.categorie', 'c')
            ->addSelect('c')
            ->where('e.date < :to')
            ->setParameter('to', $to)
            ->orderBy('e.date', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /** @return array<int, Excursion> */
    public function findWithAvailablePlaces(int $minPlaces = 1): array
    {
        return $this->createQueryBuilder('e')
            ->leftJoin('e.categorie', 'c')
            ->addSelect('c')
            ->where('e.placesDisponibles >= :minPlaces')
            ->setParameter('minPlaces', $minPlaces)
            ->orderBy('e.placesDisponibles', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /** @return array<int, Excursion> */
    public function findFull(): array
    {
        return $this->createQueryBuilder('e')
            ->leftJoin('e.categorie', 'c')
            ->addSelect('c')
            ->where('e.placesDisponibles IS NULL OR e.placesDisponibles = 0')
            ->orderBy('e.date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /** @return array<int, Excursion> */
    public function findByPriceRange(float $minPrice, float $maxPrice): array
    {
        return $this->createQueryBuilder('e')
            ->leftJoin('e.categorie', 'c')
            ->addSelect('c')
            ->where('e.prixAdulte >= :minPrice')
            ->andWhere('e.prixAdulte <= :maxPrice')
            ->setParameter('minPrice', $minPrice)
            ->setParameter('maxPrice', $maxPrice)
            ->orderBy('e.prixAdulte', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /** @return array<int, Excursion> */
    public function findByDateRange(\DateTimeInterface $start, \DateTimeInterface $end): array
    {
        return $this->createQueryBuilder('e')
            ->leftJoin('e.categorie', 'c')
            ->addSelect('c')
            ->where('e.date >= :start')
            ->andWhere('e.date <= :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->orderBy('e.date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @param array<string, mixed> $criteria
     * @return array<int, Excursion>
     */
    public function search(array $criteria): array
    {
        $qb = $this->createQueryBuilder('e')
            ->leftJoin('e.categorie', 'c')
            ->addSelect('c');

        if (!empty($criteria['search'])) {
            $qb->andWhere('e.titre LIKE :search OR e.lieu LIKE :search OR e.description LIKE :search')
               ->setParameter('search', '%' . $criteria['search'] . '%');
        }

        if (!empty($criteria['categorie'])) {
            $qb->andWhere('c.id = :categorie')
               ->setParameter('categorie', $criteria['categorie']);
        }

        if (!empty($criteria['dateFrom'])) {
            $qb->andWhere('e.date >= :dateFrom')
               ->setParameter('dateFrom', $criteria['dateFrom']);
        }

        if (!empty($criteria['dateTo'])) {
            $qb->andWhere('e.date <= :dateTo')
               ->setParameter('dateTo', $criteria['dateTo']);
        }

        if (!empty($criteria['minPlaces'])) {
            $qb->andWhere('e.placesDisponibles >= :minPlaces')
               ->setParameter('minPlaces', $criteria['minPlaces']);
        }

        if (!empty($criteria['minPrice'])) {
            $qb->andWhere('e.prixAdulte >= :minPrice')
               ->setParameter('minPrice', $criteria['minPrice']);
        }

        if (!empty($criteria['maxPrice'])) {
            $qb->andWhere('e.prixAdulte <= :maxPrice')
               ->setParameter('maxPrice', $criteria['maxPrice']);
        }

        $sortField     = $criteria['sortField']     ?? 'date';
        $sortDirection = $criteria['sortDirection'] ?? 'DESC';

        if (in_array($sortField, ['date', 'prixAdulte', 'placesDisponibles', 'titre'])) {
            $qb->orderBy('e.' . $sortField, $sortDirection);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * @return array<int, array{id: mixed, nom: mixed, excursion_count: int}>
     */
    public function countByCategory(): array
    {
        return $this->createQueryBuilder('e')
            ->select('c.id, c.nom, COUNT(e.id) as excursion_count')
            ->leftJoin('e.categorie', 'c')
            ->groupBy('c.id')
            ->getQuery()
            ->getResult();
    }

    public function getAveragePrice(): float
    {
        $result = $this->createQueryBuilder('e')
            ->select('AVG(e.prixAdulte) as avg_price')
            ->where('e.prixAdulte IS NOT NULL')
            ->getQuery()
            ->getSingleScalarResult();

        return $result ? (float) $result : 0.0;
    }

    public function getAverageChildPrice(): float
    {
        $result = $this->createQueryBuilder('e')
            ->select('AVG(e.prixEnfant) as avg_child_price')
            ->where('e.prixEnfant IS NOT NULL')
            ->getQuery()
            ->getSingleScalarResult();

        return $result ? (float) $result : 0.0;
    }

    public function getTotalAvailablePlaces(): int
    {
        $result = $this->createQueryBuilder('e')
            ->select('SUM(e.placesDisponibles) as total_places')
            ->where('e.placesDisponibles IS NOT NULL')
            ->getQuery()
            ->getSingleScalarResult();

        return $result ? (int) $result : 0;
    }

    /** @return array<int, Excursion> */
    public function findRecent(int $limit = 10): array
    {
        return $this->createQueryBuilder('e')
            ->leftJoin('e.categorie', 'c')
            ->addSelect('c')
            ->orderBy('e.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return array<int, array{month: string, month_name: string, count: int}>
     */
    public function getMonthlyStats(int $months = 6): array
    {
        $stats = [];
        $now = new \DateTime();

        for ($i = $months - 1; $i >= 0; $i--) {
            $month = clone $now;
            $month->modify("-{$i} months");

            $start = new \DateTime($month->format('Y-m-01'));
            $end = clone $start;
            $end->modify('last day of this month');

            $count = $this->createQueryBuilder('e')
                ->select('COUNT(e.id)')
                ->where('e.date >= :start')
                ->andWhere('e.date <= :end')
                ->setParameter('start', $start)
                ->setParameter('end', $end)
                ->getQuery()
                ->getSingleScalarResult();

            $stats[] = [
                'month'      => $month->format('Y-m'),
                'month_name' => $month->format('M'),
                'count'      => (int) $count,
            ];
        }

        return $stats;
    }

    /**
     * @return array<int, array{week_start: string, week_end: string, count: int}>
     */
    public function getWeeklyStats(int $weeks = 4): array
    {
        $stats = [];
        $now = new \DateTime();

        for ($i = $weeks - 1; $i >= 0; $i--) {
            $weekStart = clone $now;
            $weekStart->modify("-{$i} weeks");
            $weekStart->modify('monday this week');
            $weekStart->setTime(0, 0, 0);

            $weekEnd = clone $weekStart;
            $weekEnd->modify('+6 days');
            $weekEnd->setTime(23, 59, 59);

            $count = $this->createQueryBuilder('e')
                ->select('COUNT(e.id)')
                ->where('e.date >= :start')
                ->andWhere('e.date <= :end')
                ->setParameter('start', $weekStart)
                ->setParameter('end', $weekEnd)
                ->getQuery()
                ->getSingleScalarResult();

            $stats[] = [
                'week_start' => $weekStart->format('d/m'),
                'week_end'   => $weekEnd->format('d/m'),
                'count'      => (int) $count,
            ];
        }

        return $stats;
    }

    public function save(Excursion $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Excursion $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}