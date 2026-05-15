<?php

namespace App\Service;

use App\Entity\Hebergement;

class HebergementQpAi
{
    /**
     * Analyse les hébergements selon le budget, la localisation, et le rapport qualité/prix.
     * @param Hebergement[] $hebergements
     * @param float $budget
     * @param string $localisation
     * @return array{best: array<string, mixed>|null, classement: list<array<string, mixed>>}
     */
    public function choisirHebergement(array $hebergements, float $budget, string $localisation): array
    {
        $resultats = [];
        foreach ($hebergements as $heb) {
            $prix = (float) $heb->getPrixParNuit();
            $hebergementLocalisation = $heb->getLocalisation();
            $localMatch = stripos($hebergementLocalisation, $localisation) !== false ? 1 : 0;
            $note = (float) $heb->getNoteMoyenne();
            $dispo = $heb->getDisponibilite() === 'DISPONIBLE' ? 1 : 0;

            // Score Q/P simple: note pondérée par le prix et la localisation
            $score = 0;
            if ($prix > 0 && $prix <= $budget && $dispo) {
                $score = ($note * 20) + ($localMatch * 10) + (100 - ($prix / $budget) * 100);
            }
            $resultats[] = [
                'hebergement' => $heb,
                'score' => $score,
                'prix' => $prix,
                'note' => $note,
                'localisation' => $hebergementLocalisation,
                'disponibilite' => $heb->getDisponibilite(),
            ];
        }
        // Classement décroissant par score
        usort($resultats, fn($a, $b) => $b['score'] <=> $a['score']);
        return [
            'best' => $resultats[0] ?? null,
            'classement' => $resultats,
        ];
    }
}
