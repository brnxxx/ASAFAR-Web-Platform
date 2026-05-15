<?php

namespace App\Service;

class FaceService
{
    private string $apiKey = 'Sa2P1ByK3TJZywjpyUvIr_eXDNTiFVb0';
    private string $apiSecret = 'AYfhW8G9Y7qVsENJMHZx45tz4CizawQr';

    /**
     * @return array<string, mixed>
     */
    public function compareFaces(string $image1, string $image2): array
    {
        $url = 'https://api-us.faceplusplus.com/facepp/v3/compare';

        $data = [
            'api_key' => $this->apiKey,
            'api_secret' => $this->apiSecret,
            'image_file1' => new \CURLFile($image1),
            'image_file2' => new \CURLFile($image2),
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error = curl_error($ch);
            curl_close($ch);

            return [
                'confidence' => 0,
                'error' => $error,
            ];
        }

        curl_close($ch);

        // correction PHPStan
        if (!is_string($response) || $response === '') {
            return [
                'confidence' => 0,
                'error' => 'Réponse vide',
            ];
        }

        $result = json_decode($response, true);

        // sécurité si JSON invalide
        if (!is_array($result) || !isset($result['confidence'])) {
            return [
                'confidence' => 0,
                'error' => 'Réponse API invalide',
            ];
        }

        return $result;
    }
}