<?php

namespace App\Controller;

use App\Service\DatabaseChatbotService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/chatbot')]
class AdminChatbotController extends AbstractController
{
    public function __construct(
        private DatabaseChatbotService $chatbot
    ) {}

    #[Route('', name: 'admin_chatbot', methods: ['GET'])]
    public function index(): Response
    {
        $ollamaOnline = $this->chatbot->checkOllamaStatus();

        return $this->render('admin/chatbot/index.html.twig', [
            'ollama_online' => $ollamaOnline,
            'schema'        => $this->chatbot->getSchema(),
        ]);
    }

    #[Route('/ask', name: 'admin_chatbot_ask', methods: ['POST'])]
    public function ask(Request $request): JsonResponse
    {
        $data     = json_decode($request->getContent(), true);
        $question = trim($data['question'] ?? '');
        $history  = $data['history'] ?? [];

        if (!$question) {
            return $this->json(['error' => 'Question vide'], 400);
        }

        if (strlen($question) > 500) {
            return $this->json(['error' => 'Question trop longue (max 500 caractères)'], 400);
        }

        $result = $this->chatbot->ask($question, $history);

        return $this->json([
            'answer'  => $result['answer'],
            'sql'     => $result['sql'],
            'results' => $result['results'],
            'count'   => $result['results'] ? count($result['results']) : null,
            'error'   => $result['error'],
        ]);
    }

    #[Route('/status', name: 'admin_chatbot_status', methods: ['GET'])]
    public function status(): JsonResponse
    {
        return $this->json([
            'online' => $this->chatbot->checkOllamaStatus(),
        ]);
    }

    #[Route('/export', name: 'admin_chatbot_export', methods: ['POST'])]
    public function export(Request $request): Response
    {
        $data    = json_decode($request->getContent(), true);
        $history = $data['history'] ?? [];

        $content = json_encode($history, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        if ($content === false) {
            throw new \RuntimeException('Erreur lors de l\'encodage JSON');
        }

        return new Response($content, 200, [
            'Content-Type'        => 'application/json',
            'Content-Disposition' => 'attachment; filename="chatbot-export-' . date('Y-m-d') . '.json"',
        ]);
    }
}