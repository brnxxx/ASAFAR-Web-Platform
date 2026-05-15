<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Twilio\Rest\Client;

class WhatsAppService
{
    private Client $client;
    private string $from;
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;

        $sid         = $_ENV['TWILIO_SID']            ?? null;
        $token       = $_ENV['TWILIO_TOKEN']          ?? null;
        $this->from  = $_ENV['TWILIO_WHATSAPP_FROM']  ?? null;

        if (!$sid || !$token || !$this->from) {
            throw new \RuntimeException('Twilio configuration manquante dans .env');
        }

        $this->client = new Client($sid, $token);
    }

    public function send(string $to, string $message): bool
    {
        // Normalise le numéro : supprime le préfixe si déjà présent
        $to = str_replace('whatsapp:', '', $to);

        try {
            $this->logger->info("[WhatsApp] Envoi vers : $to");

$msg = $this->client->messages->create(
    "whatsapp:$to",
    [
        'from' => str_starts_with($this->from, 'whatsapp:') 
                    ? $this->from 
                    : "whatsapp:{$this->from}",
        'body' => $message,
    ]
);

            $this->logger->info("[WhatsApp] Envoyé — SID : {$msg->sid}");

            return true;

        } catch (\Exception $e) {
            $this->logger->error("[WhatsApp] Erreur envoi vers $to : " . $e->getMessage());
            return false;
        }
    }
}