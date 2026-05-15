<?php

namespace App\Service;

use App\Entity\Reclamation;

class ReclamationManager
{
    public function validate(Reclamation $reclamation): bool
    {
        // sujet obligatoire
        if (trim($reclamation->getSujet()) === '') {
            throw new \InvalidArgumentException(
                'Le sujet est obligatoire'
            );
        }

        // description minimum
        if (strlen(trim($reclamation->getDescription())) < 10) {
            throw new \InvalidArgumentException(
                'Description trop courte'
            );
        }

        // date auto si absente
        /** @phpstan-ignore identical.alwaysFalse */
        if ($reclamation->getDateReclamation() === null) {
            $reclamation->setDateReclamation(new \DateTime());
        }

        // statut par défaut
        /** @phpstan-ignore identical.alwaysFalse */
        if ($reclamation->getStatut() === null || $reclamation->getStatut() === '') {
            $reclamation->setStatut('EN_ATTENTE');
        }

        // priorité automatique
        $texte = strtolower(
            $reclamation->getSujet() . ' ' . $reclamation->getDescription()
        );

        if (str_contains($texte, 'urgent')) {
            $reclamation->setPriorite('URGENT');
        } else {
            $reclamation->setPriorite('NORMAL');
        }

        return true;
    }
}