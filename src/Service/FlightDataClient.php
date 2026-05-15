<?php

namespace App\Service;

use App\Service\FlightDataClientInterface;
use DateTime;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class FlightDataClient implements FlightDataClientInterface
{
    public function __construct(
        /** @phpstan-ignore-next-line property.onlyWritten */
        private HttpClientInterface $httpClient
    ) {
    }

    public function getActualArrivalTime(string $flightNumber): ?DateTime
    {
        // TODO: Remplacer par un véritable appel API HTTP
        // $response = $this->httpClient->request('GET', "https://api.aviationstack.com/v1/flights?flight_iata={$flightNumber}");
        // $data = $response->toArray();
        
        // Simulation : le vol arrive dans 2 heures
        $arrivalTime = new DateTime('+2 hours');
        
        return $arrivalTime;
    }

    public function getTaxiTime(string $airportIata): int
    {
        // Simulation : le temps de roulage dépend de la taille de l'aéroport
        return match (strtoupper($airportIata)) {
            'CDG', 'JFK', 'LHR' => 15, // Grands aéroports
            'ORY', 'NTE', 'MRS' => 8,  // Aéroports moyens
            default => 10,
        };
    }
}