<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class WeatherService
{
    private HttpClientInterface $client;
    private string $apiKey;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
        $this->apiKey = '77bc7385f87b1593fb3a7773e08064a5';
    }

    /**
     * @return array<string, mixed>
     */
    public function getWeather(string $city): array
    {
        $response = $this->client->request(
            'GET',
            'https://api.openweathermap.org/data/2.5/weather',
            [
                'query' => [
                    'q' => $city,
                    'appid' => $this->apiKey,
                    'units' => 'metric',
                    'lang' => 'fr',
                ],
            ]
        );

        return $response->toArray();
    }
}