<?php

namespace App\Service;

use DateTime;

interface CarIoTClientInterface
{
    public function prepareCarForPickup(string $carId, DateTime $estimatedPickupTime): bool;
}
