<?php

namespace App\Service;

use App\Entity\Excursion;

class AIRecommandationService
{
    /**
     * @param array<int, Excursion> $allExcursions
     * @return array<int, Excursion>
     */
    public function recommend(Excursion $excursion, array $allExcursions): array
    {
        $results = [];

        foreach ($allExcursions as $e) {

            if ($e->getIdExcursion() === $excursion->getIdExcursion()) continue;

            $score = 0;

            // 🔥 catégorie (très important)
            if ($e->getCategorie() === $excursion->getCategorie()) {
                $score += 5;
            }

            // 🔥 lieu
            if ($e->getLieu() === $excursion->getLieu()) {
                $score += 3;
            }

            // 🔥 prix proche
            $diff = abs(($e->getPrixAdulte()) - ($excursion->getPrixAdulte()));
            if ($diff < 50) $score += 2;

            // 🔥 mots-clés (IA simulée)
            $keywords1 = explode(',', $excursion->getDescription());
            $keywords2 = explode(',', $e->getDescription());

            $common = array_intersect($keywords1, $keywords2);
            $score += count($common) * 2;

            $results[] = [
                'excursion' => $e,
                'score'     => $score,
            ];
        }

        usort($results, fn($a, $b) => $b['score'] <=> $a['score']);

        return array_slice(array_column($results, 'excursion'), 0, 5);
    }
}