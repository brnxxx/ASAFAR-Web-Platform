<?php

namespace App\Service;

use Psr\Cache\CacheItemPoolInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class FlightWeatherIntelService
{
    private const OPEN_METEO_FORECAST_URL = 'https://api.open-meteo.com/v1/forecast';
    private const WEATHER_CACHE_TTL_SECONDS = 600;
    private const WEATHER_PROVIDER_TIMEOUT_SECONDS = 5;

    private const WEATHER_LABELS = [
        0 => 'Clear sky',
        1 => 'Mainly clear',
        2 => 'Partly cloudy',
        3 => 'Overcast',
        45 => 'Fog',
        48 => 'Depositing rime fog',
        51 => 'Light drizzle',
        53 => 'Moderate drizzle',
        55 => 'Dense drizzle',
        56 => 'Light freezing drizzle',
        57 => 'Dense freezing drizzle',
        61 => 'Slight rain',
        63 => 'Moderate rain',
        65 => 'Heavy rain',
        66 => 'Light freezing rain',
        67 => 'Heavy freezing rain',
        71 => 'Slight snow fall',
        73 => 'Moderate snow fall',
        75 => 'Heavy snow fall',
        77 => 'Snow grains',
        80 => 'Slight rain showers',
        81 => 'Moderate rain showers',
        82 => 'Violent rain showers',
        85 => 'Slight snow showers',
        86 => 'Heavy snow showers',
        95 => 'Thunderstorm',
        96 => 'Thunderstorm with slight hail',
        99 => 'Thunderstorm with heavy hail',
    ];

    private const SEVERE_WEATHER_CODES = [65, 67, 75, 77, 82, 86, 95, 96, 99];

    private const CAUTION_WEATHER_CODES = [
        45,
        48,
        55,
        56,
        57,
        61,
        63,
        66,
        71,
        73,
        80,
        81,
        85,
    ];

    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly CacheItemPoolInterface $cachePool
    ) {
    }

    /**
     * @param array<int, array<string, mixed>> $flights
     * @return array<string, mixed>
     */
    public function buildWeatherIntel(array $flights): array
    {
        $airportsByKey = [];

        foreach ($flights as $flight) {
            $departure = is_array($flight['from'] ?? null) ? $flight['from'] : null;
            $destination = is_array($flight['to'] ?? null) ? $flight['to'] : null;

            foreach ([$departure, $destination] as $airport) {
                $airportKey = $this->airportIdentityKey($airport);
                if ($airportKey !== null && !isset($airportsByKey[$airportKey])) {
                    $airportsByKey[$airportKey] = $airport;
                }
            }
        }

        $weatherByAirportKey = $this->fetchWeatherBatch($airportsByKey);
        $routes = [];
        $summary = [
            'total' => 0,
            'good' => 0,
            'caution' => 0,
            'severe' => 0,
            'unknown' => 0,
        ];

        foreach ($flights as $flight) {
            $departure = is_array($flight['from'] ?? null) ? $flight['from'] : null;
            $destination = is_array($flight['to'] ?? null) ? $flight['to'] : null;

            $departureWeather = $this->resolveAirportWeather($departure, $weatherByAirportKey);
            $destinationWeather = $this->resolveAirportWeather($destination, $weatherByAirportKey);
            $routeAlert = $this->computeRouteAlert($departureWeather, $destinationWeather);

            $routes[] = [
                'id' => $flight['id'] ?? null,
                'nom' => (string) ($flight['nom'] ?? 'Flight route'),
                'prix' => (float) ($flight['prix'] ?? 0),
                'detailUrl' => (string) ($flight['detailUrl'] ?? ''),
                'routeLabel' => (string) ($flight['routeLabel'] ?? 'Unknown route'),
                'from' => $departure,
                'to' => $destination,
                'departureWeather' => $departureWeather,
                'destinationWeather' => $destinationWeather,
                'routeAlert' => $routeAlert,
            ];

            $summary['total'] += 1;
            $summary[$routeAlert['level']] += 1;
        }

        usort($routes, function (array $left, array $right): int {
            $severity = [
                'severe' => 3,
                'caution' => 2,
                'good' => 1,
                'unknown' => 0,
            ];

            $leftScore = $severity[$left['routeAlert']['level'] ?? 'unknown'] ?? 0;
            $rightScore = $severity[$right['routeAlert']['level'] ?? 'unknown'] ?? 0;

            if ($leftScore === $rightScore) {
                return strcmp((string) ($left['nom']), (string) ($right['nom']));
            }

            return $rightScore <=> $leftScore;
        });

        return [
            'routes' => $routes,
            'summary' => $summary,
        ];
    }

    /**
     * @param array<string, mixed>|null $airport
     * @return string|null
     */
    private function airportIdentityKey(?array $airport): ?string
    {
        if ($airport === null) {
            return null;
        }

        $airportId = isset($airport['id']) ? (string) $airport['id'] : '';

        if ($airportId !== '') {
            return 'id:' . $airportId;
        }

        $coordinates = $this->extractCoordinates($airport);
        if ($coordinates === null) {
            return null;
        }

        return sprintf('coord:%s:%s',
            number_format($coordinates['lat'], 4, '.', ''),
            number_format($coordinates['lng'], 4, '.', '')
        );
    }

    /**
     * @param array<string, mixed>|null $airport
     * @param array<string, mixed> $weatherByAirportKey
     * @return array<string, mixed>
     */
    private function resolveAirportWeather(?array $airport, array $weatherByAirportKey): array
    {
        if ($airport === null) {
            return $this->unknownWeather('Airport not available');
        }

        $airportKey = $this->airportIdentityKey($airport);
        if ($airportKey === null) {
            return $this->unknownWeather('Coordinates unavailable');
        }

        return $weatherByAirportKey[$airportKey] ?? $this->unknownWeather('Weather provider unavailable');
    }

    /**
     * @param array<string, mixed> $airportsByKey
     * @return array<string, mixed>
     */
    private function fetchWeatherBatch(array $airportsByKey): array
    {
        $weatherByAirportKey = [];
        $pending = [];

        foreach ($airportsByKey as $airportKey => $airport) {
            $coordinates = $this->extractCoordinates(is_array($airport) ? $airport : null);
            if ($coordinates === null) {
                $weatherByAirportKey[$airportKey] = $this->unknownWeather('Coordinates unavailable');
                continue;
            }

            $cacheKey = $this->weatherCacheKey(is_array($airport) ? $airport : [], $coordinates['lat'], $coordinates['lng']);
            $cacheItem = $this->cachePool->getItem($cacheKey);
            $cachedWeather = $cacheItem->isHit() ? $cacheItem->get() : null;

            if (is_array($cachedWeather) && isset($cachedWeather['level'])) {
                $weatherByAirportKey[$airportKey] = $cachedWeather;
                continue;
            }

            $pending[$airportKey] = [
                'cacheItem' => $cacheItem,
                'response' => $this->httpClient->request('GET', self::OPEN_METEO_FORECAST_URL, [
                    'query' => [
                        'latitude' => $coordinates['lat'],
                        'longitude' => $coordinates['lng'],
                        'current' => 'temperature_2m,precipitation,weather_code,wind_speed_10m,wind_gusts_10m,visibility',
                        'forecast_days' => 1,
                        'timezone' => 'auto',
                    ],
                    'timeout' => self::WEATHER_PROVIDER_TIMEOUT_SECONDS,
                ]),
            ];
        }

        foreach ($pending as $airportKey => $requestData) {
            $cacheItem = $requestData['cacheItem'];

            try {
                $response = $requestData['response'];
                $statusCode = $response->getStatusCode();
                if ($statusCode >= 400) {
                    throw new \RuntimeException('Weather provider status ' . $statusCode);
                }

                $payload = $response->toArray(false);
                $weather = $this->buildWeatherFromPayload($payload);
            } catch (\Throwable) {
                $weather = $this->unknownWeather('Weather provider unavailable');
            }

            $cacheItem->set($weather);
            $cacheItem->expiresAfter(self::WEATHER_CACHE_TTL_SECONDS);
            $this->cachePool->saveDeferred($cacheItem);

            $weatherByAirportKey[$airportKey] = $weather;
        }

        if ($pending !== []) {
            $this->cachePool->commit();
        }

        return $weatherByAirportKey;
    }

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    private function buildWeatherFromPayload(array $payload): array
    {
        $current = is_array($payload['current'] ?? null) ? $payload['current'] : [];

        $weatherCode = isset($current['weather_code']) ? (int) $current['weather_code'] : null;
        $windSpeed = isset($current['wind_speed_10m']) && is_numeric($current['wind_speed_10m'])
            ? (float) $current['wind_speed_10m']
            : null;
        $windGusts = isset($current['wind_gusts_10m']) && is_numeric($current['wind_gusts_10m'])
            ? (float) $current['wind_gusts_10m']
            : null;
        $visibility = isset($current['visibility']) && is_numeric($current['visibility'])
            ? (float) $current['visibility']
            : null;
        $precipitation = isset($current['precipitation']) && is_numeric($current['precipitation'])
            ? (float) $current['precipitation']
            : null;
        $temperature = isset($current['temperature_2m']) && is_numeric($current['temperature_2m'])
            ? (float) $current['temperature_2m']
            : null;

        $risk = $this->classifyWeatherRisk(
            $weatherCode,
            $windSpeed,
            $windGusts,
            $visibility,
            $precipitation
        );

        return [
            'status' => 'ok',
            'level' => $risk['level'],
            'conditions' => $weatherCode !== null
                ? (self::WEATHER_LABELS[$weatherCode] ?? ('Weather code ' . $weatherCode))
                : 'Unavailable',
            'weatherCode' => $weatherCode,
            'temperatureC' => $temperature,
            'windSpeedKmh' => $windSpeed,
            'windGustsKmh' => $windGusts,
            'visibilityM' => $visibility,
            'precipitationMm' => $precipitation,
            'reason' => $risk['reason'],
            'checkedAt' => (string) ($current['time'] ?? (new \DateTimeImmutable())->format(DATE_ATOM)),
        ];
    }

    /**
     * @param array<string, mixed>|null $airport
     * @return array<string, float>|null
     */
    private function extractCoordinates(?array $airport): ?array
    {
        if ($airport === null) {
            return null;
        }

        $latRaw = $airport['lat'] ?? null;
        $lngRaw = $airport['lng'] ?? null;

        if (!is_numeric($latRaw) || !is_numeric($lngRaw)) {
            return null;
        }

        $latitude = (float) $latRaw;
        $longitude = (float) $lngRaw;

        if (($latitude === 0.0 && $longitude === 0.0) || $latitude < -90 || $latitude > 90 || $longitude < -180 || $longitude > 180) {
            return null;
        }

        return [
            'lat' => $latitude,
            'lng' => $longitude,
        ];
    }

    /**
     * @param array<string, mixed> $airport
     */
    private function weatherCacheKey(array $airport, float $latitude, float $longitude): string
    {
        $airportId = trim((string) ($airport['id'] ?? ''));
        $base = $airportId !== ''
            ? 'id:' . $airportId
            : sprintf(
                'coord:%s:%s',
                number_format($latitude, 4, '.', ''),
                number_format($longitude, 4, '.', '')
            );

        return 'flight_weather_intel.' . sha1($base);
    }

    /**
     * @return array<string, mixed>
     */
    private function classifyWeatherRisk(
        ?int $weatherCode,
        ?float $windSpeed,
        ?float $windGusts,
        ?float $visibility,
        ?float $precipitation
    ): array {
        $reasons = [];
        $level = 'good';

        if ($weatherCode !== null && in_array($weatherCode, self::SEVERE_WEATHER_CODES, true)) {
            $level = 'severe';
            $reasons[] = 'Severe weather pattern';
        } elseif ($weatherCode !== null && in_array($weatherCode, self::CAUTION_WEATHER_CODES, true)) {
            $level = 'caution';
            $reasons[] = 'Weather requires caution';
        }

        if ($windSpeed !== null && $windSpeed >= 55) {
            $level = 'severe';
            $reasons[] = 'High sustained wind';
        } elseif ($windSpeed !== null && $windSpeed >= 35 && $level !== 'severe') {
            $level = 'caution';
            $reasons[] = 'Moderate-to-strong wind';
        }

        if ($windGusts !== null && $windGusts >= 70) {
            $level = 'severe';
            $reasons[] = 'Very strong wind gusts';
        } elseif ($windGusts !== null && $windGusts >= 50 && $level !== 'severe') {
            $level = 'caution';
            $reasons[] = 'Strong wind gusts';
        }

        if ($visibility !== null && $visibility <= 3000) {
            $level = 'severe';
            $reasons[] = 'Low visibility';
        } elseif ($visibility !== null && $visibility <= 7000 && $level !== 'severe') {
            $level = 'caution';
            $reasons[] = 'Reduced visibility';
        }

        if ($precipitation !== null && $precipitation >= 7) {
            $level = 'severe';
            $reasons[] = 'Heavy precipitation';
        } elseif ($precipitation !== null && $precipitation >= 2 && $level !== 'severe') {
            $level = 'caution';
            $reasons[] = 'Noticeable precipitation';
        }

        if ($reasons === []) {
            $reasons[] = 'Conditions are acceptable for normal flight operations';
        }

        return [
            'level' => $level,
            'reason' => implode(', ', array_values(array_unique($reasons))),
        ];
    }

    /**
     * @param array<string, mixed> $departureWeather
     * @param array<string, mixed> $destinationWeather
     * @return array<string, mixed>
     */
    private function computeRouteAlert(array $departureWeather, array $destinationWeather): array
    {
        $severityOrder = [
            'unknown' => 0,
            'good' => 1,
            'caution' => 2,
            'severe' => 3,
        ];

        $departureLevel = $departureWeather['level'] ?? 'unknown';
        $destinationLevel = $destinationWeather['level'] ?? 'unknown';

        $routeLevel = ($severityOrder[$departureLevel] ?? 0) >= ($severityOrder[$destinationLevel] ?? 0)
            ? $departureLevel
            : $destinationLevel;

        $message = match ($routeLevel) {
            'severe' => 'High risk route: conditions are not good for regular flight operations.',
            'caution' => 'Caution advised: one airport has weather that may affect flight quality.',
            'good' => 'Route conditions are currently suitable for flight operations.',
            default => 'Weather data is incomplete for this route.',
        };

        return [
            'level' => $routeLevel,
            'message' => $message,
            'departureLevel' => $departureLevel,
            'destinationLevel' => $destinationLevel,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function unknownWeather(string $reason): array
    {
        return [
            'status' => 'unknown',
            'level' => 'unknown',
            'conditions' => 'Unavailable',
            'weatherCode' => null,
            'temperatureC' => null,
            'windSpeedKmh' => null,
            'windGustsKmh' => null,
            'visibilityM' => null,
            'precipitationMm' => null,
            'reason' => $reason,
            'checkedAt' => (new \DateTimeImmutable())->format(DATE_ATOM),
        ];
    }
}
