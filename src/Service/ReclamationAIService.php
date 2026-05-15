<?php

namespace App\Service;

class ReclamationAIService
{
    private const API_KEY = 'AIzaSyBgZEDpzF0pa8n4NsxmeGY918NQYgg4aIY';

    public function analyzePriority(string $text): string
    {
        try {
            $prompt = 'Analyse cette réclamation client.
Réponds uniquement par UN MOT :
URGENT, NORMAL ou FAIBLE.

Réclamation:
' . $text;

            $body = json_encode([
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $prompt],
                        ],
                    ],
                ],
            ], JSON_UNESCAPED_UNICODE);

            // correction PHPStan
            if ($body === false) {
                error_log('[ReclamationAI] Erreur encodage JSON');
                return 'NORMAL';
            }

            $url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=' . self::API_KEY;

            $ch = curl_init($url);

            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $body,
                CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
                CURLOPT_TIMEOUT => 10,
            ]);

            $response = curl_exec($ch);
            $httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $error = curl_error($ch);

            curl_close($ch);

            // correction PHPStan
            if ($error || !is_string($response) || $response === '') {
                error_log('[ReclamationAI] Erreur: ' . ($error ?: 'Réponse vide'));
                return 'NORMAL';
            }

            $data = json_decode($response, true);

            if (!is_array($data)) {
                return 'NORMAL';
            }

            $textResponse = $data['candidates'][0]['content']['parts'][0]['text'] ?? '';

            $result = strtoupper((string) $textResponse);

            if (strpos($result, 'URGENT') !== false) {
                return 'URGENT';
            }

            if (strpos($result, 'FAIBLE') !== false) {
                return 'FAIBLE';
            }

            return 'NORMAL';
        } catch (\Exception $e) {
            error_log('[ReclamationAI] Exception: ' . $e->getMessage());
            return 'NORMAL';
        }
    }
}