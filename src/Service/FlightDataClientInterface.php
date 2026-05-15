<?php

namespace App\Service;

use DateTime;

interface FlightDataClientInterface
{
    public function getActualArrivalTime(string $flightNumber): ?DateTime;

    public function getTaxiTime(string $airportIata): int;
}
