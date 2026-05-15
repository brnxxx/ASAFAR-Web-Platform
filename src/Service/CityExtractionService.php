<?php

namespace App\Service;

class CityExtractionService
{
    private string $apiKey;

    public function __construct(string $geminiApiKey)
    {
        $this->apiKey = $geminiApiKey;
    }

    /**
     * @return array<string, string>|null
     */
    public function extractCities(string $transportName): ?array
    {
        $prompt = <<<EOT
You are an expert at extracting city names from transport descriptions in French or English.

From the following transport name/description, extract:
1. The departure city
2. The destination city

Return ONLY valid JSON:

{
  "departure": "city_name",
  "destination": "city_name"
}

If impossible, return:

{}
        
Transport name: "$transportName"
EOT;

        $payload = json_encode([
            'contents' => [[
                'parts' => [[
                    'text' => $prompt,
                ]],
            ]],
            'generationConfig' => [
                'temperature' => 0.1,
                'maxOutputTokens' => 200,
            ],
        ]);

        if ($payload === false) {
            return null;
        }

        $url = sprintf(
            'https://generativelanguage.googleapis.com/v1/models/gemini-1.5-flash:generateContent?key=%s',
            $this->apiKey
        );

        $ch = curl_init($url);

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_TIMEOUT => 15,
        ]);

        $response = curl_exec($ch);
        $httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($httpCode !== 200 || !is_string($response)) {
            return null;
        }

        $decoded = json_decode($response, true);

        if (!is_array($decoded)) {
            return null;
        }

        $text = $decoded['candidates'][0]['content']['parts'][0]['text'] ?? null;

        if (!is_string($text) || trim($text) === '') {
            return null;
        }

        $text = preg_replace('/```json|```/i', '', $text) ?? $text;
        $data = json_decode(trim($text), true);

        if (
            json_last_error() === JSON_ERROR_NONE &&
            is_array($data) &&
            isset($data['departure'], $data['destination']) &&
            is_string($data['departure']) &&
            is_string($data['destination']) &&
            trim($data['departure']) !== '' &&
            trim($data['destination']) !== ''
        ) {
            return [
                'departure' => trim($data['departure']),
                'destination' => trim($data['destination']),
            ];
        }

        return null;
    }
}