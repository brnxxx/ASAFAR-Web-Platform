<?php

namespace App\Controller;

use App\Repository\HebergementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class HebergementAiController extends AbstractController
{
    #[Route('/ai/hebergement/recommend', name: 'ai_hebergement_recommend', methods: ['POST'])]
    public function recommend(Request $request, HebergementRepository $repo): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $localisation = $data['localisation'] ?? '';
        $budget = (float)($data['budget'] ?? 0);
        
        $hebergements = $repo->findByLocalisationAndBudget($localisation, $budget);
        
        if (empty($hebergements)) {
            return $this->json([
                'success' => false,
                'message' => "Aucun hebergement trouve"
            ]);
        }
        
        $results = [];
        foreach ($hebergements as $heb) {
            $qualite = (int) $heb->getQualite();
            $prix = (float) $heb->getPrixParNuit();
            if ($prix <= 0) $prix = 1;
            $score = $qualite / $prix;

            $results[] = [
                'nom' => $heb->getNom(),
                'prix' => $prix,
                'qualite' => $qualite,
                'score' => round($score, 4)
            ];
        }

        usort($results, fn($a, $b) => $b['score'] <=> $a['score']);

        $best = $results[0];

        $html = '<div style="font-family:Arial;">';
        $html .= '<h3 style="color:#FFC107;">Meilleur hebergement</h3>';
        $html .= '<div style="font-size:20px; font-weight:bold;">' . htmlspecialchars((string) $best['nom']) . '</div>';
        $html .= '<div>Prix: ' . number_format((float) $best['prix'], 0, ',', ' ') . ' TND/nuit</div>';
        $html .= '<div>Qualite: ' . (int) $best['qualite'] . '/100</div>';
        $html .= '<div>Score Q/P: ' . (float) $best['score'] . '</div>';
        $html .= '</div>';
        
        return $this->json([
            'success' => true,
            'html' => $html
        ]);
    }
}
