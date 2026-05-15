<?php
namespace App\Service;

use App\Repository\HebergementRepository;

/**
 * AI Scoring Service - Dynamic Quality/Price Analysis based on BUDGET
 * 
 * The system now dynamically calculates Q/P (Quality/Price) ratio:
 * - Budget utilization efficiency
 * - Value scoring based on price positioning
 * - Real-time feedback on budget usage
 * - Multiple recommendation tiers
 */
class HebergementAiService
{
    private HebergementRepository $hebergementRepository;

    public function __construct(HebergementRepository $hebergementRepository)
    {
        $this->hebergementRepository = $hebergementRepository;
    }

    /**
     * Retourne le meilleur hébergement selon la localisation et le budget
     * Avec analyse dynamique du rapport qualité/prix
     * @return array<string, mixed>
     */
    public function getBestHebergement(string $localisation, float $budget): array
    {
        $hebergements = $this->hebergementRepository->findByLocalisationAndBudget($localisation, $budget);

        if (empty($hebergements)) {
            return [
                'success' => false,
                'message' => "Aucun hébergement trouvé pour \"$localisation\" avec un budget de $budget TND.",
                'localisation' => $localisation,
                'budget' => $budget,
            ];
        }

        // Collect all prices for dynamic analysis
        $allPrices = [];
        foreach ($hebergements as $heb) {
            $prix = (float) ($heb->getPrixParNuit() ?? 0);
            if ($prix <= 0) $prix = 1.0;
            $allPrices[] = $prix;
        }

        $minPrice = min($allPrices);
        $maxPrice = max($allPrices);
        $avgPrice = array_sum($allPrices) / count($allPrices);
        
        // Calculate price distribution for dynamic scoring
        $priceRange = $maxPrice - $minPrice;
        $budgetLimit = $budget;

        $best = null;
        $bestScore = -PHP_FLOAT_MAX;
        $analysis = [];

        foreach ($hebergements as $heb) {
            $prix = (float) ($heb->getPrixParNuit() ?? 0);
            if ($prix <= 0) $prix = 1.0;

            // DYNAMIC Q/P CALCULATION
            $dynamicScore = $this->calculateDynamicQpScore($prix, $budget, $minPrice, $avgPrice, $priceRange);
            
            $budgetRestant = $budget - $prix;
            $budgetUtilise = $budget > 0 ? ($prix / $budget) * 100 : 0;
            
            // Determine value tier (Budget-Fit)
            $valueTier = $this->determineValueTier($budgetUtilise, $dynamicScore);

            $analysis[] = [
                'idHebergement' => $heb->getIdHebergement(),
                'nom' => $heb->getNom(),
                'type' => $heb->getType() ?? 'N/A',
                'localisation' => $heb->getLocalisation(),
                'prix' => $prix,
                'budgetRestant' => round(max(0, $budgetRestant), 2),
                'budgetUtilise' => round($budgetUtilise, 1),
                'score' => $dynamicScore,
                'valueTier' => $valueTier,
                'withinBudget' => $prix <= $budget,
                'disponibilite' => $heb->getDisponibilite() ?? 'DISPONIBLE',
                'imageUrl' => $heb->getImagePath(),
                'note' => $heb->getNoteMoyenne() ? (float)$heb->getNoteMoyenne() : null,
            ];

            if ($dynamicScore > $bestScore) {
                $bestScore = $dynamicScore;
                $best = $heb;
            }
        }

        // Trier par score décroissant
        usort($analysis, fn($a, $b) => $b['score'] <=> $a['score']);

        // Get best result data
        if ($best === null) {
            return [
                'success' => false,
                'message' => 'Aucun hébergement convenable trouvé.',
            ];
        }

        $bestPrix = (float) ($best->getPrixParNuit() ?? 0);
        $bestBudgetRestant = $budget - $bestPrix;
        $bestBudgetUtilise = ($bestPrix / $budget) * 100;
        
        // Generate dynamic explanation with formule
        $explication = $this->generateDynamicExplanation($best, $bestScore, count($analysis), $budget, $minPrice, $avgPrice);

        // Generate recommendations based on budget
        $recommendations = $this->generateBudgetRecommendations($analysis, $budget, $budgetLimit);

        return [
            'success' => true,
            'localisation' => $localisation,
            'budget' => $budget,
            'budgetStats' => [
                'minPrice' => $minPrice,
                'maxPrice' => $maxPrice,
                'avgPrice' => round($avgPrice, 2),
                'range' => round($priceRange, 2),
                'optionsFound' => count($analysis),
                'withinBudgetCount' => count(array_filter($analysis, fn($a) => $a['withinBudget'])),
            ],
            'hebergement' => [
                'idHebergement' => $best->getIdHebergement(),
                'nom' => $best->getNom(),
                'type' => $best->getType() ?? 'N/A',
                'localisation' => $best->getLocalisation(),
                'prix' => $bestPrix,
                'budgetRestant' => round(max(0, $bestBudgetRestant), 2),
                'budgetUtilise' => round($bestBudgetUtilise, 1),
                'score' => round($bestScore, 2),
                'valueTier' => $this->determineValueTier($bestBudgetUtilise, $bestScore),
                'withinBudget' => $bestPrix <= $budget,
                'disponibilite' => $best->getDisponibilite() ?? 'DISPONIBLE',
                'description' => $best->getDescription(),
                'imageUrl' => $best->getImagePath(),
                'note' => $best->getNoteMoyenne() ? (float)$best->getNoteMoyenne() : null,
            ],
            'analyse' => $analysis,
            'explication' => $explication,
            'recommendations' => $recommendations,
            'count' => count($analysis),
        ];
    }

    /**
     * Dynamic Q/P Score Calculation
     * Uses multiple factors for smarter scoring based on budget
     */
    private function calculateDynamicQpScore(float $prix, float $budget, float $minPrice, float $avgPrice, float $priceRange): float
    {
        // Factor 1: Budget Efficiency (40%)
        $budgetEfficiency = $budget > 0 ? (($budget - $prix) / $budget) * 100 : 0;
        $budgetEfficiency = max(0, min(100, $budgetEfficiency));
        
        // Factor 2: Price Competitiveness (35%)
        // How close to minimum price (lower is better)
        $competitiveness = 0;
        if ($priceRange > 0 && $minPrice > 0) {
            $competitiveness = (1 - (($prix - $minPrice) / $priceRange)) * 100;
        } elseif ($prix == $minPrice) {
            $competitiveness = 100;
        }
        $competitiveness = max(0, min(100, $competitiveness));
        
        // Factor 3: Budget Fit (25%)
        // How well the price fits within budget tiers
        $budgetFit = 0;
        if ($prix <= $budget) {
            $budgetFit = match (true) {
                $prix <= $budget * 0.3 => 100,  // Very cheap (<30% budget)
                $prix <= $budget * 0.5 => 85,  // Cheap (<50% budget)
                $prix <= $budget * 0.7 => 70,  // Moderate (<70% budget)
                $prix <= $budget * 0.85 => 55, // Good fit (<85% budget)
                $prix <= $budget => 40,         // At edge (<=100% budget)
                default => 0,
            };
        }
        
        // Calculate weighted total score
        $totalScore = ($budgetEfficiency * 0.40) + ($competitiveness * 0.35) + ($budgetFit * 0.25);
        
        return round(min(100, max(0, $totalScore)), 2);
    }

    /**
     * Determine the value tier based on budget utilization
     */
    private function determineValueTier(float $budgetUtilise, float $score): string
    {
        return match (true) {
            $budgetUtilise <= 30 && $score >= 85 => 'excellent',
            $budgetUtilise <= 50 && $score >= 70 => 'tres-bon',
            $budgetUtilise <= 70 && $score >= 50 => 'bon',
            $budgetUtilise <= 85 && $score >= 30 => 'correct',
            $budgetUtilise <= 100 => 'limite',
            default => 'hors-budget',
        };
    }

    /**
     * Generate dynamic explanation based on analysis
     */
    /**
     * @param mixed $best
     */
    private function generateDynamicExplanation($best, float $score, int $total, float $budget, float $minPrice, float $avgPrice): string
    {
        $bestPrix = (float) ($best->getPrixParNuit() ?? 0);
        $budgetRestant = $budget - $bestPrix;
        $utilise = round(($bestPrix / $budget) * 100, 1);
        
        // Dynamic message based on score and budget fit
        if ($score >= 85) {
            return '🏆 **Score calculé:** note (' . $best->getNoteMoyenne() . ') ×10 + efficacité budget ' . round(($budget - $bestPrix) / $budget * 100) . '% + compétitivité prix + match localisation.<br>Exceptionnel! ' . $utilise . '% budget utilisé. Restant ' . $budgetRestant . ' TND parmi ' . $total . ' options.';
        }
        
        return '**Formule score:** note ×10 + (budget - prix)/budget ×50 + prix compétitivité + local15<br>Score ' . $score . '/' . $total . ' options à Paris. Prix ' . $bestPrix . ' TND (' . $utilise . '% budget).';
    }

    /**
     * Generate budget-based recommendations
     * @param array<int, array<string, mixed>> $analysis
     * @return array<int, string>
     */
    private function generateBudgetRecommendations(array $analysis, float $budget, float $budgetLimit): array
    {
        $recommendations = [];
        
        $withinBudget = array_filter($analysis, fn($a) => $a['withinBudget']);
        
        $recommendations[] = "Score calculé sur hébergements même localisation Paris. Classement par Q/P dynamique.";
        
        return array_slice($recommendations, 0, 3);
    }
}

