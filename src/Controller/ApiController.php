<?php

namespace App\Controller;

use App\Repository\AeroportRepository;
use App\Service\CityExtractor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api')]
class ApiController extends AbstractController
{
    #[Route('/airports/nearby', name: 'api_airports_nearby', methods: ['POST'])]
    public function getNearbyAirports(
        Request $request,
        CityExtractor $cityExtractor,
        AeroportRepository $aeroportRepository
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);

        $transportName = $data['transportName'] ?? '';
        $type = $data['type'] ?? '';

        // Only filter for flight transports
        if ($type !== 'AVION') {
            return new JsonResponse([
                'success' => true,
                'airports' => [],
                'message' => 'Filtering only applies to AVION type'
            ]);
        }

        // Extract cities from transport name
        $cities = $cityExtractor->extractCities($transportName);

        if (empty($cities)) {
            return new JsonResponse([
                'success' => false,
                'airports' => [],
                'message' => 'Could not extract cities from transport name'
            ]);
        }

        // Filter airports for each city
        $airports = [];

        foreach ($cities as $cityData) {
            $city = $cityData['city'];
            $lat = $cityData['latitude'];
            $lon = $cityData['longitude'];

            // Try exact city match first
            $nearbyAirports = $aeroportRepository->findByVille($city);

            // If no exact match, use geographic search (50km radius)
            if (empty($nearbyAirports)) {
                $nearbyAirports = $aeroportRepository->findNearby($lat, $lon, 50);
            }

            if (!empty($nearbyAirports)) {
                $airports[$city] = array_map(function($aeroport) {
                    return [
                        'id' => $aeroport->getId(),
                        'nom' => $aeroport->getNom(),
                        'codeIata' => $aeroport->getCodeIata(),
                        'codeIcao' => $aeroport->getCodeIcao(),
                        'ville' => $aeroport->getVille(),
                        'latitude' => $aeroport->getLatitude(),
                        'longitude' => $aeroport->getLongitude()
                    ];
                }, $nearbyAirports);
            }
        }

        return new JsonResponse([
            'success' => true,
            'airports' => $airports,
            'citiesExtracted' => $cities,
            'count' => array_sum(array_map('count', $airports))
        ]);
    }
}
