<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PasswordGeneratorController extends AbstractController
{
    public function __construct(
        #[Autowire('%env(GEMINI_API_KEY)%')]
        private string $geminiApiKey = ''
    ) {}

    #[Route('/api/generate-password', name: 'api_generate_password', methods: ['POST'])]
    public function generate(Request $request): JsonResponse
    {
        $data   = json_decode($request->getContent(), true);
        $type   = $data['type'] ?? 'random'; // 'random' ou 'memorable'
        $length = (int) ($data['length'] ?? 16);

        if ($type === 'memorable') {
            $prompt = "
Génère UNE passphrase mémorable en français pour un mot de passe sécurisé.
- 4 mots aléatoires séparés par des tirets
- Ajoute un chiffre au début et un symbole à la fin
- Exemple : 7-cheval-nuage-forêt-rouge!
- Réponds UNIQUEMENT avec la passphrase, rien d'autre.
";
        } else {
            $prompt = "
Génère UN mot de passe aléatoire sécurisé de {$length} caractères.
- Contient majuscules, minuscules, chiffres et symboles (!@#\$%^&*)
- Ne contient pas de mots du dictionnaire
- Réponds UNIQUEMENT avec le mot de passe, rien d'autre, sans guillemets.
";
        }

        $password = $this->callGemini($prompt);

        if (!$password) {
            // Fallback si Gemini échoue
            $password = $this->fallbackGenerate($type, $length);
        }

        // Calcul du score de force
        $score = $this->calculateStrength($password);

        return $this->json([
            'password' => trim($password),
            'strength' => $score['level'],
            'score'    => $score['score'],
        ]);
    }

private function callGemini(string $prompt): ?string
{
    if (!$this->geminiApiKey) return null;

    // FIX :70 — json_encode returns string|false; use ?: fallback
    $body = json_encode([
        'contents' => [['parts' => [['text' => $prompt]]]]
    ]) ?: '{}';

    $url = "https://generativelanguage.googleapis.com/v1/models/gemini-2.5-flash:generateContent?key={$this->geminiApiKey}";

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $body,
        CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
        CURLOPT_TIMEOUT        => 15,
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    // FIX :83 — curl_exec returns string|bool; guard before json_decode
    if (!is_string($response) || $response === '') return null;

    $result = json_decode($response, true);
    return $result['candidates'][0]['content']['parts'][0]['text'] ?? null;
}

    private function fallbackGenerate(string $type, int $length): string
    {
        if ($type === 'memorable') {
            $words = ['soleil','cheval','nuage','forêt','étoile','rivière','montagne','jardin'];
            shuffle($words);
            return rand(1,9).'-'.implode('-', array_slice($words, 0, 4)).'!';
        }

        $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz23456789!@#$%&*';
        return substr(str_shuffle(str_repeat($chars, 3)), 0, $length);
    }

    // FIX :99 — add value types to return array
/**
 * @return array{score: int, level: string}
 */
private function calculateStrength(string $password): array
{
    $score = 0;
    if (strlen($password) >= 12) $score++;
    if (strlen($password) >= 16) $score++;
    if (preg_match('/[A-Z]/', $password)) $score++;
    if (preg_match('/[a-z]/', $password)) $score++;
    if (preg_match('/[0-9]/', $password)) $score++;
    if (preg_match('/[^A-Za-z0-9]/', $password)) $score++;

    $level = match(true) {
        $score <= 2 => 'Faible',
        $score <= 4 => 'Moyen',
        $score <= 5 => 'Fort',
        default     => 'Très fort',
    };

    return ['score' => $score, 'level' => $level];
}
}