<?php
// src/Service/GeoLocationService.php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class GeoLocationService
{
    public function __construct(private HttpClientInterface $http) {}
    /** @return array{country: string, city: string, latitude: float|null, longitude: float|null, map_url: string|null} */

    public function getLocation(string $ip): array
    {
        // Si IP locale → récupérer l'IP publique réelle via ipify
        if ($ip === '127.0.0.1' || $ip === '::1' || str_starts_with($ip, '192.168.')) {
            try {
                $response = $this->http->request('GET', 'https://api.ipify.org?format=json');
                $data = $response->toArray();
                $ip = $data['ip'] ?? null;
            } catch (\Exception $e) {
                // fallback si ipify échoue
            }

            // Toujours pas d'IP publique valide
            if (!$ip || $ip === '127.0.0.1' || $ip === '::1') {
                return [
                    'country'   => 'LOCAL',
                    'city'      => 'LOCAL',
                    'latitude'  => null,
                    'longitude' => null,
                    'map_url'   => null,
                ];
            }
        }

        try {
            // ip-api.com : gratuit, sans clé API
            $response = $this->http->request(
                'GET',
                "http://ip-api.com/json/{$ip}?fields=status,country,city,lat,lon"
            );
            $data = $response->toArray();

            if (($data['status'] ?? '') === 'success') {
                $lat = $data['lat'] ?? null;
                $lon = $data['lon'] ?? null;

                return [
                    'country'   => $data['country'] ?? 'UNKNOWN',
                    'city'      => $data['city']    ?? 'UNKNOWN',
                    'latitude'  => $lat,
                    'longitude' => $lon,
                    // Lien Google Maps direct
                    'map_url'   => ($lat && $lon)
                        ? "https://www.google.com/maps?q={$lat},{$lon}"
                        : null,
                ];
            }
        } catch (\Exception $e) {
            // silence
        }

        return [
            'country'   => 'UNKNOWN',
            'city'      => 'UNKNOWN',
            'latitude'  => null,
            'longitude' => null,
            'map_url'   => null,
        ];
    }
}