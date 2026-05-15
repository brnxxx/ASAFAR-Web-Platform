<?php

namespace App\Controller;

use App\Repository\AeroportRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api')]
class ApiTransportController extends AbstractController
{
    #[Route('/airports/choices', name: 'api_airports_choices', methods: ['GET'])]
    public function airportChoices(
        Request $request,
        AeroportRepository $aeroportRepository
    ): JsonResponse {
        $query = trim((string) $request->query->get('q', ''));
        $limit = max(1, min((int) $request->query->get('limit', 3000), 10000));

        if ($query !== '') {
            $all = $aeroportRepository->findAllForChoices();
            $q = mb_strtolower($query);
            $filtered = array_values(array_filter($all, static function (array $airport) use ($q): bool {
                $name = mb_strtolower((string) ($airport['nom'] ?? ''));
                $city = mb_strtolower((string) ($airport['ville'] ?? ''));
                $iata = mb_strtolower((string) ($airport['codeIata'] ?? ''));

                return str_contains($name, $q) || str_contains($city, $q) || str_contains($iata, $q);
            }));

            return new JsonResponse([
                'success' => true,
                'airports' => array_slice($filtered, 0, $limit),
            ], headers: [
                'Cache-Control' => 'public, max-age=300',
            ]);
        }

        $choices = array_slice($aeroportRepository->findAllForChoices(), 0, $limit);

        return new JsonResponse([
            'success' => true,
            'airports' => $choices,
        ], headers: [
            'Cache-Control' => 'public, max-age=300',
        ]);
    }

    #[Route('/validate-airport', name: 'api_validate_airport', methods: ['POST'])]
    public function validateAirport(
        Request $request,
        AeroportRepository $aeroportRepository
    ): JsonResponse {
        try {
            $data = json_decode($request->getContent(), true);
            $airportId = $data['airportId'] ?? null;

            if (!$airportId) {
                return new JsonResponse([
                    'valid' => false,
                    'message' => 'Airport ID is required'
                ], JsonResponse::HTTP_BAD_REQUEST);
            }

            $airport = $aeroportRepository->find((int)$airportId);

            if (!$airport) {
                return new JsonResponse([
                    'valid' => false,
                    'message' => 'Airport not found'
                ], JsonResponse::HTTP_NOT_FOUND);
            }

            return new JsonResponse([
                'valid' => true,
                'airport' => [
                    'id' => $airport->getId(),
                    'nom' => $airport->getNom(),
                    'codeIata' => $airport->getCodeIata(),
                    'ville' => $airport->getVille()
                ]
            ]);

        } catch (\Throwable $e) {
            return new JsonResponse([
                'valid' => false,
                'message' => 'Server error'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/detect-airports', name: 'api_detect_airports', methods: ['POST'])]
    public function detectAirports(
        Request $request,
        AeroportRepository $aeroportRepository
    ): JsonResponse {
        try {
            $data = json_decode($request->getContent(), true);
            $description = trim($data['description'] ?? '');

            // Validate input
            if (empty($description) || strlen($description) < 3) {
                return new JsonResponse([
                    'success' => false,
                    'airports' => [],
                    'message' => 'Description must be at least 3 characters'
                ], JsonResponse::HTTP_BAD_REQUEST);
            }

            // Extract city names from description
            $cities = $this->extractCities($description);

            if (count($cities) < 2) {
                return new JsonResponse([
                    'success' => false,
                    'airports' => [],
                    'message' => 'Could not detect 2 cities. Try format: "Paris to Lyon" or "Paris→Vienna"'
                ], JsonResponse::HTTP_BAD_REQUEST);
            }

            $departureCityName = $cities[0];
            $destinationCityName = $cities[1];

            // Query airports directly from database using repository
            $departureAirports = $aeroportRepository->findByVille($departureCityName);
            $destinationAirports = $aeroportRepository->findByVille($destinationCityName);

            // If no exact match, try fuzzy match
            if (empty($departureAirports)) {
                $departureAirports = $this->fuzzyFindAirports($aeroportRepository, $departureCityName);
            }

            if (empty($destinationAirports)) {
                $destinationAirports = $this->fuzzyFindAirports($aeroportRepository, $destinationCityName);
            }

            if (empty($departureAirports) || empty($destinationAirports)) {
                return new JsonResponse([
                    'success' => false,
                    'airports' => [],
                    'message' => 'One or both cities not found in database'
                ], JsonResponse::HTTP_NOT_FOUND);
            }

            // Format response
            $response = [
                'success' => true,
                'airports' => [],
                'cities' => [
                    'departure' => $departureCityName,
                    'destination' => $destinationCityName
                ],
                'count' => 0
            ];

            // Add departure airports
            $departureData = [];
            foreach ($departureAirports as $airport) {
                $departureData[] = [
                    'id' => $airport->getId(),
                    'nom' => $airport->getNom(),
                    'codeIata' => $airport->getCodeIata() ?? 'N/A',
                    'ville' => $airport->getVille(),
                ];
            }
            $response['airports'][$departureCityName] = $departureData;
            $response['count'] += count($departureData);

            // Add destination airports
            $destinationData = [];
            foreach ($destinationAirports as $airport) {
                $destinationData[] = [
                    'id' => $airport->getId(),
                    'nom' => $airport->getNom(),
                    'codeIata' => $airport->getCodeIata() ?? 'N/A',
                    'ville' => $airport->getVille(),
                ];
            }
            $response['airports'][$destinationCityName] = $destinationData;
            $response['count'] += count($destinationData);

            return new JsonResponse($response);

        } catch (\Throwable $e) {
            error_log('Detect airports error: ' . $e->getMessage() . ' - ' . $e->getFile() . ':' . $e->getLine());

            return new JsonResponse([
                'success' => false,
                'airports' => [],
                'message' => 'Server error. Please try again.'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Extract city names from description
     * Handles formats like: "Paris to Lyon", "Paris → Vienna", "Paris-Vienna", etc.
     *
     * @return string[]
     */
    private function extractCities(string $description): array
    {
        $descLower = strtolower(trim($description));

        // Split by common separators: " to ", " → ", " - ", ", "
        $separators = [' to ', '→', '-', ','];
        $parts = null;

        foreach ($separators as $sep) {
            $exploded = explode($sep, $descLower);
            if (count($exploded) >= 2) {
                $parts = $exploded;
                break;
            }
        }

        if ($parts === null) {
            // Try splitting by spaces and take first two longest words
            $words = array_filter(
                (array) preg_split('#[\s]+#', $descLower, -1, PREG_SPLIT_NO_EMPTY),
                fn($w) => strlen((string) $w) >= 3
            );
            $parts = array_slice($words, 0, 2);
        }

        // Clean and capitalize city names
        $cities = [];
        foreach (array_slice($parts, 0, 2) as $part) {
            $partStr = (string) $part;
            $city = trim((string) preg_replace('#[^a-z\s]#', '', $partStr));
            if (!empty($city) && strlen($city) >= 2) {
                // Capitalize first letter of each word
                $city = ucwords($city);
                $cities[] = $city;
            }
        }

        return $cities;
    }

    /**
     * Fuzzy find airports by partial city name match
     *
     * @return array<int, \App\Entity\Aeroport>
     */
    private function fuzzyFindAirports(AeroportRepository $repo, string $cityName): array
    {
        $cityLower = strtolower($cityName);
        static $citiesCache = null;

        // Fetch distinct cities once per request to avoid repeated DB roundtrips.
        if ($citiesCache === null) {
            $citiesCache = (array) $repo->findDistinctVilles();
        }

        $cities = $citiesCache;

        $matches = [];
        foreach ($cities as $city) {
            if ($city === null) continue;

            $city_lower = strtolower($city);

            // Exact match (case insensitive)
            if ($city_lower === $cityLower) {
                $matches[$city] = 0;
                break;
            }

            // Substring match
            if (strpos($city_lower, $cityLower) !== false || strpos($cityLower, $city_lower) !== false) {
                $matches[$city] = 1;
                continue;
            }

            // Levenshtein distance (fuzzy match)
            $distance = levenshtein($city_lower, $cityLower);
            if ($distance <= 2) {
                $matches[$city] = 2 + $distance;
            }
        }

        if (empty($matches)) {
            return [];
        }

        // Get best match
        asort($matches);
        $bestCity = array_key_first($matches);

        return $repo->findByVille($bestCity);
    }
}
