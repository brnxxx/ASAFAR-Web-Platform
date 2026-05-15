<?php

namespace App\Service;

class CityExtractor
{
    private const SEPARATORS = [' vers ', ' to ', ' → ', '-', ' and ', ' et ', ','];
    private const CACHE_FILE = '/tmp/city_coords.json';

    /**
     * Extract cities from transport name and get their coordinates
     * Supports French and English patterns: "Paris vers Lyon", "London to Paris", etc.
     * @return array<int, array{city: string, latitude: float, longitude: float}>
     */
    public function extractCities(string $transportName): array
    {
        if (empty(trim($transportName))) {
            return [];
        }

        $cities = $this->parseTransportName($transportName);
        $result = [];

        foreach ($cities as $city) {
            $coords = $this->getCityCoordinates($city);
            if ($coords) {
                $result[] = [
                    'city' => $city,
                    'latitude' => $coords['lat'],
                    'longitude' => $coords['lon']
                ];
            }
        }

        return $result;
    }

    /**
     * Parse transport name to extract city names
     * @return array<int, string>
     */
    private function parseTransportName(string $name): array
    {
        $name = trim($name);

        // Try each separator
        foreach (self::SEPARATORS as $separator) {
            if (strpos($name, $separator) !== false) {
                $parts = explode($separator, $name);
                return array_map(function(string $part): string {
                    return $this->cleanCityName($part);
                }, $parts);
            }
        }

        // If no separator found, treat entire string as two cities (for patterns like "ParisLyon")
        return [];
    }

    /**
     * Clean city name (remove extra whitespace, numbers, special chars)
     */
    private function cleanCityName(string $name): string
    {
        $name = trim($name);
        // Remove parentheses and contents
        $name = (string) preg_replace('/\s*\([^)]*\)/', '', $name);
        // Remove common prefixes like "Vol", "Flight", "depart", etc
        $name = (string) preg_replace('/^(vol|flight|depart|destination|from|vers|to|airport|aeroport)\s+/i', '', $name);
        // Remove trailing numbers and codes
        $name = (string) preg_replace('/\s*\(.*?\)/', '', $name);
        // Remove extra spaces
        $name = (string) preg_replace('/\s+/', ' ', trim($name));

        return ucfirst(strtolower($name));
    }

    /**
     * Get latitude and longitude for a city using Nominatim (free API)
     * @return array{lat: float, lon: float}|null
     */
    private function getCityCoordinates(string $city): ?array
    {
        if (empty($city) || strlen($city) < 2) {
            return null;
        }

        // Check cache first
        $cache = $this->loadCache();
        $cacheKey = strtolower($city);

        if (isset($cache[$cacheKey])) {
            return $cache[$cacheKey];
        }

        // Query Nominatim with timeout
        try {
            $url = sprintf(
                'https://nominatim.openstreetmap.org/search?q=%s&format=json&limit=1&timeout=5',
                urlencode($city)
            );

            $context = stream_context_create([
                'http' => [
                    'timeout' => 5,
                    'user_agent' => 'ASAFAR-Transport-App/1.0'
                ]
            ]);

            $response = @file_get_contents($url, false, $context);

            if (!$response) {
                return null;
            }

            $data = json_decode($response, true);

            if (!is_array($data) || empty($data)) {
                return null;
            }

            $coords = [
                'lat' => (float) ($data[0]['lat'] ?? 0),
                'lon' => (float) ($data[0]['lon'] ?? 0)
            ];

            // Save to cache
            $cache[$cacheKey] = $coords;
            $this->saveCache($cache);

            return $coords;
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Load coordinates cache
     * @return array<string, array{lat: float, lon: float}>
     */
    private function loadCache(): array
    {
        if (!file_exists(self::CACHE_FILE)) {
            return [];
        }

        $json = file_get_contents(self::CACHE_FILE);
        if ($json === false) {
            return [];
        }
        return json_decode($json, true) ?? [];
    }

    /**
     * Save coordinates cache
     * @param array<string, array{lat: float, lon: float}> $cache
     */
    private function saveCache(array $cache): void
    {
        file_put_contents(self::CACHE_FILE, json_encode($cache));
    }
}
