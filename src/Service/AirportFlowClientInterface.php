<?php

namespace App\Service;

use DateTime;

interface AirportFlowClientInterface
{
    public function getCustomsWaitTime(string $airportIata, DateTime $arrivalTime): int;

    public function getBaggageClaimTime(string $airportIata): int;
}
