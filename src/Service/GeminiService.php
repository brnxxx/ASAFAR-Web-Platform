<?php

namespace App\Service;

class GeminiService
{
    private string $apiKey;

    public function __construct()
    {
        $this->apiKey = $_ENV['ANTHROPIC_API_KEY'] ?? '';
    }

    /**
     * @return array<int, array{
     *     id: int,
     *     question: string,
     *     choices: array<int, string>,
     *     answer: string
     * }>
     */
    public function generateQuiz(string $destination, string $type): array
    {
        $url = 'https://api.anthropic.com/v1/messages';

        $data = [
            'model' => 'claude-sonnet-4-20250514',
            'max_tokens' => 1000,
            'messages' => [[
                'role' => 'user',
                'content' => $this->buildPrompt($destination, $type),
            ]],
        ];

        $body = json_encode($data);

        // correction PHPStan
        if ($body === false) {
            return $this->getFallbackQuestions($destination, $type);
        }

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'x-api-key: ' . $this->apiKey,
            'anthropic-version: 2023-06-01',
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);
        $httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        // correction PHPStan
        if ($httpCode !== 200 || !is_string($response) || $response === '') {
            return $this->getFallbackQuestions($destination, $type);
        }

        $result = json_decode($response, true);

        if (!is_array($result)) {
            return $this->getFallbackQuestions($destination, $type);
        }

        $text = $result['content'][0]['text'] ?? '';

        if (!is_string($text)) {
            return $this->getFallbackQuestions($destination, $type);
        }

        $text = preg_replace('/```json|```/', '', $text) ?? $text;

        $parsed = json_decode(trim($text), true);

        if (!is_array($parsed) || empty($parsed)) {
            return $this->getFallbackQuestions($destination, $type);
        }

        return $parsed;
    }

    /**
     * @return array<int, array{
     *     id: int,
     *     question: string,
     *     choices: array<int, string>,
     *     answer: string
     * }>
     */
    private function getFallbackQuestions(string $destination, string $type): array
    {
        $pool = [
            [
                'id' => 1,
                'question' => "Quelle est la monnaie officielle utilisée à $destination ?",
                'choices' => ['Dinar', 'Euro', 'Dollar', 'Dirham'],
                'answer' => 'Dinar',
            ],
            [
                'id' => 2,
                'question' => "Quel type de cuisine est typique de la région de $destination ?",
                'choices' => ['Méditerranéenne', 'Asiatique', 'Mexicaine', 'Nordique'],
                'answer' => 'Méditerranéenne',
            ],
            [
                'id' => 3,
                'question' => "Quel est le meilleur moyen de transport pour explorer $destination ?",
                'choices' => ['À pied et taxi', 'Bateau', 'Téléphérique', 'Hélicoptère'],
                'answer' => 'À pied et taxi',
            ],
            [
                'id' => 4,
                'question' => "Quelle période est idéale pour visiter $destination ?",
                'choices' => ['Printemps', 'Hiver polaire', 'Mousson', 'Canicule'],
                'answer' => 'Printemps',
            ],
            [
                'id' => 5,
                'question' => "Quel artisanat est célèbre dans la région de $destination ?",
                'choices' => ['Poterie', 'Horlogerie', 'Kimono', 'Tapis volant'],
                'answer' => 'Poterie',
            ],
        ];

        shuffle($pool);

        return array_slice($pool, 0, 4);
    }

    private function buildPrompt(string $destination, string $type): string
    {
        return <<<EOT
Crée 4 questions quiz sur la destination "$destination" de type "$type".

Format JSON strict :
[
  {
    "id": 1,
    "question": "...",
    "choices": ["...", "...", "...", "..."],
    "answer": "..."
  }
]
EOT;
    }
}