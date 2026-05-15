<?php

namespace App\Service;

use App\Entity\Transport;

class PredictiveFareService
{
    /**
     * Analyse multi-variables pour générer une tarification dynamique
     * @return array<string, mixed>
     */
    public function analyze(Transport $transport): array
    {
        // 1. On récupère le prix proprement (en gérant les éventuelles virgules)
        $prixDeBase = (float) str_replace(',', '.', (string) $transport->getPrix());
        $maintenant = new \DateTime();

        // 2. L'ASTUCE : On simule une date de départ fictive mais CONSTANTE pour chaque transport
        // En utilisant le modulo de l'ID du transport, le résultat sera toujours le même
        // Ex: Le transport #12 aura toujours une date de départ simulée à "J+2".
        $idTransport = $transport->getIdTransport() ?? 1; // Sécurité si l'ID est null
        $joursSimules = ($idTransport % 14) + 1; // Assigne une date entre J+1 et J+14
        
        // On crée la date de départ virtuelle
        $dateDepart = clone $maintenant;
        $dateDepart->modify('+' . $joursSimules . ' days');

        // --- 3. Facteur de Pression Temporelle (Non-linéaire) ---
        $diff = $maintenant->diff($dateDepart);
        $heuresRestantes = ($diff->days * 24) + $diff->h;
        
        // Utilisation d'une courbe exponentielle inversée pour la pression du temps
        $pressionTemps = 0;
        if ($heuresRestantes > 0) {
            $pressionTemps = max(0, 100 - ($heuresRestantes / 3)); 
        }

        // --- 4. Facteur de Saisonnalité et Week-end ---
        $jourSemaine = (int) $dateDepart->format('N'); // 1 = Lundi, 7 = Dimanche
        $mois = (int) $dateDepart->format('n');
        
        $saisonnalite = 1.0;
        // Période estivale (Juin à Septembre)
        if (in_array($mois, [6, 7, 8, 9])) {
            $saisonnalite += 0.15; 
        }
        // Week-end (Vendredi soir, Samedi, Dimanche)
        if (in_array($jourSemaine, [5, 6, 7])) {
            $saisonnalite += 0.10;
        }

        // --- 5. Simulation Déterministe du Taux de Remplissage ---
        $seed = crc32($idTransport . $dateDepart->format('Y-m-d'));
        $remplissageBase = 40 + ($seed % 45); // Entre 40% et 85% de base
        
        // Le remplissage augmente virtuellement quand on s'approche de la date
        $remplissageSimule = min(100, $remplissageBase + (100 - min(100, $heuresRestantes)));

        // --- CALCUL DU PRIX FINAL (SCORING) ---
        $modificateur = 1.0;
        $status = 'normal';
        $message = '';

        // Si le transport est presque vide à la dernière minute -> LIQUIDATION (Offre Flash)
        if ($heuresRestantes <= 48 && $remplissageSimule < 60) {
            $modificateur = 0.75; // -25%
            $status = 'flash';
            $message = 'Promotion Flash : Réservez vite, les places s’envolent !';
        } 
        // Si le transport est très rempli et qu'on est proche du départ -> SURCHARGE YIELD
        elseif ($heuresRestantes <= 120 && $remplissageSimule > 85) {
            $modificateur = 1.25 * $saisonnalite; // +25% + Saisonnalité
            $status = 'high_demand';
            $message = ' Forte demande : Plus que quelques places disponibles !';
        }
        // Cas standard : ajustement léger selon la saison et le remplissage
        else {
            $modificateur = $saisonnalite * (1 + (($remplissageSimule - 50) / 200)); 
            if ($saisonnalite > 1.0) $message = '📈 Ajustement haute saison appliqué.';
        }

        $prixFinal = $prixDeBase * $modificateur;

        return $this->buildResult($prixDeBase, $prixFinal, $status, $message, [
            'temps_pression' => round($pressionTemps, 1) . '%',
            'remplissage' => round($remplissageSimule, 1) . '%',
            'saisonnalite_idx' => round($saisonnalite, 2)
        ]);
    }

    /**
     * @param array<string, string|float> $metrics
     * @return array<string, mixed>
     */
    private function buildResult(float $base, float $nouveau, string $status, string $message, array $metrics): array
    {
        return [
            'prix_base' => round($base, 2),
            'prix_actuel' => round($nouveau, 2),
            'statut' => $status,
            'message' => $message,
            'metrics' => $metrics,
            'variation_pourcentage' => $base > 0 ? round((($nouveau - $base) / $base) * 100, 1) : 0
        ];
    }
}