<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class MapController extends AbstractController
{
    #[Route('/map/nearby', name: 'app_map_nearby')]
    public function nearby(Request $request, HttpClientInterface $httpClient): JsonResponse
    {
        $lat = $request->query->get('lat');
        $lon = $request->query->get('lon');
        $radius = (int) $request->query->get('radius', 1000);

        if (!is_numeric($lat) || !is_numeric($lon)) {
            return $this->json(['success' => false]);
        }

        $lat = (float) $lat;
        $lon = (float) $lon;

        $query = <<<OVERPASS
[out:json][timeout:25];
(
  node["amenity"="cafe"](around:$radius,$lat,$lon);
  way["amenity"="cafe"](around:$radius,$lat,$lon);
  relation["amenity"="cafe"](around:$radius,$lat,$lon);

  node["amenity"="restaurant"](around:$radius,$lat,$lon);
  way["amenity"="restaurant"](around:$radius,$lat,$lon);
  relation["amenity"="restaurant"](around:$radius,$lat,$lon);

  node["amenity"="parking"](around:$radius,$lat,$lon);
  way["amenity"="parking"](around:$radius,$lat,$lon);
  relation["amenity"="parking"](around:$radius,$lat,$lon);
);
out center tags;
OVERPASS;

        try {
            $response = $httpClient->request(
                'POST',
                'https://overpass-api.de/api/interpreter',
                [
                    'headers' => [
                        'Content-Type' => 'text/plain',
                        'User-Agent' => 'SymfonyMapApp',
                    ],
                    'body' => $query,
                ]
            );

            $data = $response->toArray(false);
            $places = [];

            foreach ($data['elements'] ?? [] as $el) {
                $amenity = $el['tags']['amenity'] ?? null;

                if (!in_array($amenity, ['cafe', 'restaurant', 'parking'], true)) {
                    continue;
                }

                $placeLat = $el['lat'] ?? ($el['center']['lat'] ?? null);
                $placeLon = $el['lon'] ?? ($el['center']['lon'] ?? null);

                if ($placeLat === null || $placeLon === null) {
                    continue;
                }

                $distance = $this->calculateDistance(
                    $lat,
                    $lon,
                    (float) $placeLat,
                    (float) $placeLon
                );

                $places[] = [
                    'name' => $el['tags']['name'] ?? ucfirst((string) $amenity),
                    'type' => $amenity,
                    'lat' => (float) $placeLat,
                    'lon' => (float) $placeLon,
                    'distance' => $distance,
                    'address' => $this->formatAddress($el['tags'] ?? []),
                ];
            }

            usort(
                $places,
                fn(array $a, array $b): int => $a['distance'] <=> $b['distance']
            );

            return $this->json([
                'success' => true,
                'places' => $places,
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'error' => $e->getMessage(),
            ]);
        }
    }

    #[Route('/map/geocode', name: 'app_map_geocode')]
    public function geocode(Request $request, HttpClientInterface $httpClient): JsonResponse
    {
        $lieu = $request->query->get('lieu');

        if (!$lieu) {
            return $this->json(['success' => false]);
        }

        try {
            $response = $httpClient->request(
                'GET',
                'https://nominatim.openstreetmap.org/search',
                [
                    'query' => [
                        'q' => $lieu,
                        'format' => 'json',
                        'limit' => 1,
                    ],
                    'headers' => [
                        'User-Agent' => 'SymfonyMapApp',
                    ],
                ]
            );

            $data = $response->toArray();

            if (empty($data)) {
                return $this->json(['success' => false]);
            }

            return $this->json([
                'success' => true,
                'lat' => $data[0]['lat'],
                'lon' => $data[0]['lon'],
                'display_name' => $data[0]['display_name'],
            ]);
        } catch (\Exception) {
            return $this->json(['success' => false]);
        }
    }

    private function calculateDistance(
        float $lat1,
        float $lon1,
        float $lat2,
        float $lon2
    ): int {
        $earthRadius = 6371000;

        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a =
            sin($dLat / 2) * sin($dLat / 2) +
            cos(deg2rad($lat1)) *
            cos(deg2rad($lat2)) *
            sin($dLon / 2) *
            sin($dLon / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return (int) round($earthRadius * $c);
    }

    /**
     * @param array<string,mixed> $tags
     */
    private function formatAddress(array $tags): ?string
    {
        $parts = [];

        if (!empty($tags['addr:street'])) {
            $street = (string) $tags['addr:street'];

            if (!empty($tags['addr:housenumber'])) {
                $street .= ' ' . $tags['addr:housenumber'];
            }

            $parts[] = $street;
        }

        if (!empty($tags['addr:city'])) {
            $parts[] = (string) $tags['addr:city'];
        }

        if (!empty($tags['addr:postcode'])) {
            $parts[] = (string) $tags['addr:postcode'];
        }

        return $parts !== [] ? implode(', ', $parts) : null;
    }
}