<?php

namespace App\Controller;

use App\Repository\HebergementRepository;
use App\Service\HebergementAiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/ai')]
class HebergementQpAiController extends AbstractController
{
    #[Route('/rapport', name: 'ai_rapport_qp', methods: ['GET'])]
    public function rapport(HebergementRepository $repo): Response
    {
        $localisations = $repo->findAllLocalisations();
        return $this->render('ai_rapport.html.twig', [
            'localisations' => $localisations
        ]);
    }

    #[Route('/rapport-qp-analyze', name: 'ai_rapport_qp_analyze', methods: ['POST'])]
    public function analyze(Request $request, HebergementAiService $aiService): JsonResponse
    {
        $data = json_decode($request->getContent(), true) ?: $request->request->all();
        
        $localisation = trim($data['localisation'] ?? '');
        $budget = (float) ($data['budget'] ?? 0);
        
        if (empty($localisation) || $budget <= 0) {
            return $this->json(['success' => false, 'message' => 'Localisation et budget requis'], 400);
        }
        
        $result = $aiService->getBestHebergement($localisation, $budget);
        
        return $this->json($result);
    }
}

