<?php

namespace App\Service;

use App\Service\AirportFlowClientInterface;
use DateTime;

class AirportFlowClient implements AirportFlowClientInterface
{
    public function getCustomsWaitTime(string $airportIata, DateTime $arrivalTime): int
    {
        // Simulation d'un modèle IA prédictif basé sur l'heure d'affluence
        $hour = (int) $arrivalTime->format('H');
        
        // Heure de pointe (ex: 8h-11h et 17h-19h)
        if (($hour >= 8 && $hour <= 11) || ($hour >= 17 && $hour <= 19)) {
            return 45; // 45 minutes d'attente à la douane
        }

        // Heure creuse
        if ($hour >= 23 || $hour <= 5) {
            return 10;
        }

        return 25; // Moyenne
    }

    public function getBaggageClaimTime(string $airportIata): int
    {
        return 20; // Moyenne de 20 minutes pour récupérer les bagages
    }
}