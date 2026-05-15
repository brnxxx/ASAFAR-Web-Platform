<?php

namespace App\Service;

use App\Service\CarIoTClientInterface;
use DateTime;
use Psr\Log\LoggerInterface;

class CarIoTClient implements CarIoTClientInterface
{
    public function __construct(
        private LoggerInterface $logger
    ) {
    }

    public function prepareCarForPickup(string $carId, DateTime $estimatedPickupTime): bool
    {
        // Simulation d'une requête vers l'API SmartCar ou constructeur (Tesla, Peugeot, etc.)
        $this->logger->info(sprintf(
            "🚗 IoT SUCCESS : Déverrouillage programmé et climatisation activée pour le véhicule %s à %s.",
            $carId, $estimatedPickupTime->format('H:i')
        ));
        return true;
    }
}