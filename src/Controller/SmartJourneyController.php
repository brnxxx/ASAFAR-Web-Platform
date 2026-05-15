<?php

namespace App\Controller;

use App\Service\SmartJourneySynchronizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SmartJourneyController extends AbstractController
{
    #[Route('/api/sjs/synchronize', name: 'api_sjs_synchronize', methods: ['GET', 'POST'])]
    public function synchronize(Request $request, SmartJourneySynchronizer $sjs): JsonResponse
    {
        // Dans un cas réel, ces données proviendraient des entités Transport / Réservation du client
        $flightNumber = $request->query->get('flight', 'AF123'); // Vol Air France
        $airportIata = $request->query->get('airport', 'CDG');   // Charles de Gaulle
        $carId = $request->query->get('car_id', 'CAR-TESLA-99'); // Plaque ou ID du véhicule

        // 1. Calcul dynamique du Time-to-Steering-Wheel
        $ttsw = $sjs->calculateTTSW($flightNumber, $airportIata);

        // 2. Lancement du processus autonome
        $isSynchronized = $sjs->synchronize([
            'transport_id' => $flightNumber,
            'type' => 'AVION',
            'flight_number' => $flightNumber,
            'airport_iata' => $airportIata,
            'car_id' => $carId
        ]);

        return $this->json([
            'success' => $isSynchronized,
            'data' => [
                'vol' => $flightNumber,
                'aeroport' => $airportIata,
                'vehicule_id' => $carId,
                'time_to_steering_wheel' => $ttsw ? $ttsw->format('Y-m-d H:i:s') : null,
            ],
            'message' => 'Le Smart Journey Synchronizer a parfaitement lié le vol et le véhicule.'
        ]);
    }
}