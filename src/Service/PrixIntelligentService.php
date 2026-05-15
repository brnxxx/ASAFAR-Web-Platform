<?php

namespace App\Service;

use App\Entity\Excursion;

class PrixIntelligentService
{
    public function __construct(
        private WeatherService $weatherService
    ) {}

    
/**
 * Calcule le prix final avec toutes les règles intelligentes
 *
 * @return array{
 *     prix_adulte: float,
 *     prix_enfant: float,
 *     prix_bebe: float,
 *     sous_total: float,
 *     reduction_groupe: float,
 *     montant_reduction: float,
 *     total: float,
 *     coeff_saison: float,
 *     coeff_dispo: float,
 *     coeff_meteo: float,
 *     saison: string,
 *     dispo_label: string,
 *     meteo_label: string,
 *     groupe_label: string
 * }
 */


    public function calculerPrix(
        Excursion $excursion,
        int $nbAdultes,
        int $nbEnfants,
        int $nbBebes
    ): array {
        $prixAdulteBase = $excursion->getPrixAdulte();
        $prixEnfantBase = $excursion->getPrixEnfant();
        $prixBebeBase = $excursion->getPrixBebe();

        $totalPersonnes = $nbAdultes + $nbEnfants + $nbBebes;

        // ================================
        // 1. SAISON
        // ================================
        $coeffSaison = $this->getCoeffSaison($excursion);

        // ================================
        // 2. DISPONIBILITÉ
        // ================================
        $coeffDispo = $this->getCoeffDisponibilite($excursion);

        // ================================
        // 3. MÉTÉO
        // ================================
        $coeffMeteo = $this->getCoeffMeteo($excursion);

        // ================================
        // 4. GROUPE
        // ================================
        $reductionGroupe = $this->getReductionGroupe($totalPersonnes);

        $coeffTotal = $coeffSaison * $coeffDispo * $coeffMeteo;

        $prixAdulte = round($prixAdulteBase * $coeffTotal, 2);
        $prixEnfant = round($prixEnfantBase * $coeffTotal, 2);
        $prixBebe = round($prixBebeBase * $coeffTotal, 2);

        $sousTotal =
            ($nbAdultes * $prixAdulte) +
            ($nbEnfants * $prixEnfant) +
            ($nbBebes * $prixBebe);

        $montantReduction = round(
            $sousTotal * $reductionGroupe / 100,
            2
        );

        $total = max(1, $sousTotal - $montantReduction);

        return [
            'prix_adulte' => $prixAdulte,
            'prix_enfant' => $prixEnfant,
            'prix_bebe' => $prixBebe,
            'sous_total' => $sousTotal,
            'reduction_groupe' => $reductionGroupe,
            'montant_reduction' => $montantReduction,
            'total' => $total,

            // DEBUG / UI
            'coeff_saison' => $coeffSaison,
            'coeff_dispo' => $coeffDispo,
            'coeff_meteo' => $coeffMeteo,

            'saison' => $this->getSaisonLabel($excursion),
            'dispo_label' => $this->getDispoLabel($excursion),
            'meteo_label' => $this->getMeteoLabel($coeffMeteo),
            'groupe_label' => $this->getGroupeLabel($totalPersonnes),
        ];
    }

    // ================================
    // SAISON
    // ================================
    private function getCoeffSaison(Excursion $excursion): float
    {
        $date = $excursion->getDate();
        $mois = (int) $date->format('n');

        if (in_array($mois, [6, 7, 8, 9], true)) {
            return 1.3;
        }

        if (in_array($mois, [4, 5, 10, 11], true)) {
            return 1.1;
        }

        return 0.85;
    }

    private function getSaisonLabel(Excursion $excursion): string
    {
        $c = $this->getCoeffSaison($excursion);

        if ($c >= 1.3) {
            return '🔴 Haute saison (+30%)';
        }

        if ($c >= 1.1) {
            return '🟡 Moyenne saison (+10%)';
        }

        return '🟢 Basse saison (-15%)';
    }

    // ================================
    // DISPONIBILITÉ
    // ================================
    private function getCoeffDisponibilite(Excursion $excursion): float
    {
        $total = 20;
        $restantes = $excursion->getNombrePlacesDisponibles();

        $p = ($restantes / $total) * 100;

        if ($p <= 10) {
            return 1.4;
        }

        if ($p <= 25) {
            return 1.25;
        }

        if ($p <= 50) {
            return 1.1;
        }

        return 1;
    }

    private function getDispoLabel(Excursion $excursion): string
    {
        $c = $this->getCoeffDisponibilite($excursion);

        if ($c >= 1.4) {
            return '🔥 Dernières places (+40%)';
        }

        if ($c >= 1.25) {
            return '⚡ Limité (+25%)';
        }

        if ($c >= 1.1) {
            return '📈 Demande forte (+10%)';
        }

        return '✅ Disponible';
    }

    // ================================
    // MÉTÉO
    // ================================
    private function getCoeffMeteo(Excursion $excursion): float
    {
        try {
            $weather = $this->weatherService->getWeather(
                $excursion->getLieu()
            );

            $condition = strtolower(
                (string) ($weather['condition'] ?? '')
            );

            $temp = (float) ($weather['temperature'] ?? 0);

            $type = strtolower($excursion->getType() ?? '');

            $coeff = 1.0;

            // soleil
            if (in_array($condition, ['sunny', 'clear'], true)) {
                if (str_contains($type, 'plage')) {
                    $coeff += 0.2;
                } elseif ($this->isOutdoor($type)) {
                    $coeff += 0.1;
                }
            }

            // pluie
            if (in_array($condition, ['rain', 'drizzle'], true)) {
                if ($this->isOutdoor($type)) {
                    $coeff -= 0.2;
                }

                if ($this->isIndoor($type)) {
                    $coeff += 0.1;
                }
            }

            // tempête
            if (in_array($condition, ['storm', 'thunderstorm'], true)) {
                if ($this->isOutdoor($type)) {
                    $coeff -= 0.4;
                }
            }

            // chaleur
            if ($temp >= 35) {
                if (str_contains($type, 'desert')) {
                    $coeff -= 0.25;
                }

                if (str_contains($type, 'plage')) {
                    $coeff += 0.1;
                }
            }

            return max(0.5, min($coeff, 1.5));
        } catch (\Throwable $e) {
            return 1.0;
        }
    }

    private function getMeteoLabel(float $coeff): string
    {
        if ($coeff >= 1.2) {
            return '☀️ Idéal (+20%)';
        }

        if ($coeff >= 1.05) {
            return '🌤️ Bon (+5%)';
        }

        if ($coeff >= 0.9) {
            return '🌥️ Normal';
        }

        if ($coeff >= 0.7) {
            return '🌧️ Mauvais';
        }

        return '⛈️ Risqué';
    }

    private function isOutdoor(string $type): bool
    {
        return str_contains($type, 'plage')
            || str_contains($type, 'desert')
            || str_contains($type, 'aventure');
    }

    private function isIndoor(string $type): bool
    {
        return str_contains($type, 'musee')
            || str_contains($type, 'culture')
            || str_contains($type, 'spa');
    }

    // ================================
    // GROUPE
    // ================================
    private function getReductionGroupe(int $n): float
    {
        if ($n >= 10) {
            return 15;
        }

        if ($n >= 5) {
            return 10;
        }

        if ($n >= 3) {
            return 5;
        }

        return 0;
    }

    private function getGroupeLabel(int $n): string
    {
        if ($n >= 10) {
            return '👥 -15%';
        }

        if ($n >= 5) {
            return '👥 -10%';
        }

        if ($n >= 3) {
            return '👥 -5%';
        }

        return '';
    }
}