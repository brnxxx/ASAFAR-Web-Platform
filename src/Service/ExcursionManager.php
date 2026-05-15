<?php

namespace App\Service;

use App\Entity\Excursion;

class ExcursionManager
{
    public function validate(Excursion $excursion): bool
    {
        if (empty($excursion->getTitre())) {
            throw new \InvalidArgumentException('Le titre est obligatoire');
        }

        if ($excursion->getPrixAdulte() <= 0) {
            throw new \InvalidArgumentException('Le prix adulte doit être supérieur à 0');
        }

        if ($excursion->getNombrePlacesDisponibles() < 1) {
            throw new \InvalidArgumentException('Le nombre de places doit être positif');
        }

        if ($excursion->getDate() < new \DateTime()) {
            throw new \InvalidArgumentException('La date doit être future');
        }

        return true;
    }
}