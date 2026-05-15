<?php

namespace App\Service;

use App\Entity\Reservation;

class ReservationManager
{
    public function validate(Reservation $reservation): bool
    {
        $adultes = $reservation->getNbAdultes();
        $enfants = $reservation->getNbEnfants();
        $bebes   = $reservation->getNbBebes();

        // au moins 1 adulte
        if ($adultes < 1) {
            throw new \InvalidArgumentException(
                'Au moins 1 adulte est obligatoire'
            );
        }

        // total personnes
        $total = $adultes + $enfants + $bebes;

        if ($total <= 0) {
            throw new \InvalidArgumentException(
                'Nombre de participants invalide'
            );
        }

        // mettre à jour nbPersonnes
        $reservation->setNbPersonnes($total);

        // statut initial
        if (!$reservation->getStatut()) {
            $reservation->setStatut('EN_ATTENTE');
        }

        return true;
    }
}