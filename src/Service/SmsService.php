<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class SmsService
{
    private string $baseUrl;
    private string $apiKey;
    private string $sender;
    private HttpClientInterface $client;

    public function __construct(
        HttpClientInterface $client,
        string $baseUrl,
        string $apiKey,
        string $sender
    ) {
        $this->client = $client;
        $this->baseUrl = rtrim(trim($baseUrl), '/');
        $this->apiKey = trim($apiKey);
        $this->sender = trim($sender);

        if ($this->baseUrl === '') {
            throw new \RuntimeException('INFOBIP_BASE_URL est manquante.');
        }

        if ($this->apiKey === '') {
            throw new \RuntimeException('INFOBIP_API_KEY est manquante.');
        }

        if ($this->sender === '') {
            throw new \RuntimeException('INFOBIP_SENDER est manquante.');
        }
    }

    /**
     * @return array<string, mixed>
     */
    public function send(string $to, string $message): array
    {
        $to = trim($to);
        $message = trim($message);

        if ($to === '') {
            throw new \RuntimeException('Le numéro du destinataire est vide.');
        }

        if ($message === '') {
            throw new \RuntimeException('Le contenu du SMS est vide.');
        }

        $payload = [
            'messages' => [
                [
                    'from' => $this->sender,
                    'destinations' => [
                        ['to' => $to],
                    ],
                    'content' => [
                        'text' => $message,
                    ],
                ],
            ],
        ];

        try {
            $response = $this->client->request('POST', $this->baseUrl . '/sms/3/messages', [
                'headers' => [
                    'Authorization' => 'App ' . $this->apiKey,
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ],
                'json' => $payload,
                'timeout' => 20,
            ]);
        } catch (TransportExceptionInterface $e) {
            throw new \RuntimeException('Erreur réseau/SSL lors de l’envoi SMS : ' . $e->getMessage(), 0, $e);
        } catch (\Throwable $e) {
            throw new \RuntimeException('Erreur lors de la préparation de la requête SMS : ' . $e->getMessage(), 0, $e);
        }

        $statusCode = $response->getStatusCode();
        $content = $response->getContent(false);

        $decoded = json_decode($content, true);

        if ($statusCode < 200 || $statusCode >= 300) {
            $details = $content;

            if (is_array($decoded)) {
                if (isset($decoded['requestError']['serviceException']['text'])) {
                    $details = $decoded['requestError']['serviceException']['text'];
                } elseif (isset($decoded['requestError']['policyException']['text'])) {
                    $details = $decoded['requestError']['policyException']['text'];
                } elseif (isset($decoded['error']['message'])) {
                    $details = $decoded['error']['message'];
                } else {
                    $details = json_encode($decoded, JSON_UNESCAPED_UNICODE);
                }
            }

            throw new \RuntimeException(sprintf(
                'Infobip SMS error (%d): %s',
                $statusCode,
                $details
            ));
        }

        return is_array($decoded) ? $decoded : ['raw' => $content];
    }
}