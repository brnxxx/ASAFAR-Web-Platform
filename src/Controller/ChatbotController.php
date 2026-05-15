<?php

namespace App\Controller;

use App\Service\ChatbotService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ChatbotController extends AbstractController
{
    public function __construct(
        private ChatbotService $chatbotService
    ) {}

    #[Route('/chatbot/recommander', name: 'app_chatbot_recommander', methods: ['POST'])]
    public function recommander(Request $request): JsonResponse
    {
        $data        = json_decode($request->getContent(), true);
        $budget      = (float) ($data['budget']      ?? 0);
        $nbPersonnes = (int)   ($data['nb_personnes'] ?? 1);
        $lieu        = strtolower(trim($data['lieu']    ?? ''));
        $message     = trim($data['message'] ?? '');

        $result = $this->chatbotService->recommander($nbPersonnes, $budget, $lieu, $message);

        return $this->json($result);
    }

    // Ajoutez cette route temporaire pour tester
#[Route('/test-gemini', name: 'test_gemini')]
public function testGemini(): JsonResponse
{
    $key = $_ENV['GEMINI_API_KEY'];
    
    // Lister les modèles disponibles
    $url = "https://generativelanguage.googleapis.com/v1beta/models?key=$key";
    
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 10,
    ]);
    $response = curl_exec($ch);
    curl_close($ch);
    
return new JsonResponse(json_decode((string) $response, true));
}
}