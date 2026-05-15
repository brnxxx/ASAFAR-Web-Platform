<?php

namespace App\Repository;

use App\Entity\Aeroport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Aeroport>
 */
class AeroportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Aeroport::class);
    }

    /**
     * Find airports by country
     * @return array<int, Aeroport>
     */
    public function findByPays(string $pays): array
    {
        return $this->findBy(['pays' => $pays]);
    }

    /**
     * Find airports by city
     * @return array<int, Aeroport>
     */
    public function findByVille(string $ville): array
    {
        return $this->createQueryBuilder('a')
            ->where('LOWER(a.ville) = LOWER(:ville)')
            ->setParameter('ville', trim($ville))
            ->orderBy('a.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find airport by IATA code
     */
    public function findByCodeIata(string $codeIata): ?Aeroport
    {
        return $this->findOneBy(['codeIata' => $codeIata]);
    }

    /**
     * Find airports near coordinates
     * @return array<int, Aeroport>
     */
    public function findNearby(float $latitude, float $longitude, float $radius = 50): array
    {
        return $this->createQueryBuilder('a')
            ->where('SQRT(POW(a.latitude - :lat, 2) + POW(a.longitude - :lon, 2)) < :radius')
            ->setParameter('lat', $latitude)
            ->setParameter('lon', $longitude)
            ->setParameter('radius', $radius)
            ->getQuery()
            ->getResult();
    }

    /**
     * Find airports by city with nearby range (in km)
     * @return array<int, Aeroport>
     */
    public function findByVilleWithRadius(string $ville, float $radiusKm = 100): array
    {
        // First get airports in the exact city
        $cityAirports = $this->createQueryBuilder('a')
            ->where('LOWER(a.ville) = LOWER(:ville)')
            ->setParameter('ville', $ville)
            ->getQuery()
            ->getResult();

        if (!empty($cityAirports)) {
            return $cityAirports;
        }

        // If no exact match, keep fallback bounded to avoid loading the full table.
        return $this->createQueryBuilder('a')
            ->andWhere('a.latitude IS NOT NULL AND a.longitude IS NOT NULL')
            ->orderBy('a.nom', 'ASC')
            ->setMaxResults(50)
            ->getQuery()
            ->getResult();
    }

    /**
     * Find airports for departure and destination cities
     * @return array<string, array<int, Aeroport>>
     */
    public function findAirportsByRoute(string $departureCityName, string $destinationCityName, float $radiusKm = 100): array
    {
        $departureAirports = $this->findByVilleWithRadius($departureCityName, $radiusKm);
        $destinationAirports = $this->findByVilleWithRadius($destinationCityName, $radiusKm);

        return [
            'departure' => $departureAirports,
            'destination' => $destinationAirports
        ];
    }

    /**
     * Get all airports with minimal data for form choices
     * Only selects needed fields to minimize memory usage
     * @return array<int, array<string, mixed>>
     */
    public function findAllForChoices(): array
    {
        return $this->createQueryBuilder('a')
            ->select('a.id', 'a.nom', 'a.codeIata', 'a.ville')
            ->orderBy('a.nom', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    }

    /**
     * Get airports by city for form choices
     * @param array<int, string> $cities
     * @return array<int, array<string, mixed>>
     */
    public function findByCitiesForChoices(array $cities): array
    {
        if (empty($cities)) {
            return [];
        }

        return $this->createQueryBuilder('a')
            ->select('a.id', 'a.nom', 'a.codeIata', 'a.ville')
            ->where('a.ville IN (:cities)')
            ->setParameter('cities', $cities)
            ->orderBy('a.nom', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    }

    /**
     * Get all distinct non-empty city names.
     * @return list<string>
     */
    public function findDistinctVilles(): array
    {
        $rows = $this->createQueryBuilder('a')
            ->select('DISTINCT a.ville AS ville')
            ->where('a.ville IS NOT NULL')
            ->andWhere('a.ville <> :empty')
            ->setParameter('empty', '')
            ->orderBy('a.ville', 'ASC')
            ->getQuery()
            ->getArrayResult();

        return array_column($rows, 'ville');
    }
}

