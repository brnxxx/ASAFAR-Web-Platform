<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reservation;
use App\Repository\ReclamationWhatsAppSessionRepository;
use App\Service\WhatsAppService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WhatsAppController extends AbstractController
{
    public function __construct(
        private WhatsAppService $whatsAppService,
        #[Autowire('%env(GEMINI_API_KEY)%')]
        private string $geminiApiKey = '',
    ) {}

    #[Route('/webhook/whatsapp', name: 'whatsapp_webhook', methods: ['POST'])]
    public function receive(
        Request $request,
        ReclamationWhatsAppSessionRepository $sessionRepository,
        EntityManagerInterface $em
    ): Response {
        $message = trim((string) $request->request->get('Body'));
        $from    = trim((string) $request->request->get('From'));
        $phone        = $this->normalizePhone($from);
        $whatsappPhone = 'whatsapp:' . $phone;

        $session = $sessionRepository->findActiveByPhone($phone);

        if (!$session || !$session->getIsActive()) {
            return new Response("OK");
        }

        $reclamation = $em->getRepository(Reclamation::class)
            ->find($session->getReclamationId());

        if (!$reclamation) {
            $this->whatsAppService->send($whatsappPhone, "❌ Réclamation introuvable.");
            return new Response("OK");
        }

        // ── Récupérer l'historique EN PREMIER ────────────────────────────
        $data = json_decode($session->getCollectedData() ?? '{}', true);
        if (!is_array($data)) {
            $data = [];
        }
        if (!isset($data['history']) || !is_array($data['history'])) {
            $data['history'] = [];
        }
        $data['turn'] = ($data['turn'] ?? 0) + 1;
        $data['history'][] = ['role' => 'user', 'content' => $message];

        // ── Récupérer les données de réclamation/réservation ──────────────
        $reservationData = $this->getReservationData($reclamation, $em);
        $reclamationData = $this->getReclamationData($reclamation);

        // ── Détection annulation ──────────────────────────────────────────
        $lower = strtolower($message);
        if (
            str_contains($lower, 'annul') ||
            str_contains($lower, 'cancel') ||
            str_contains($lower, 'stop') ||
            str_contains($lower, 'pas de probleme') ||
            str_contains($lower, 'plus de probleme')
        ) {
            $summary = $this->generateSummary($data['history'], $reclamationData);

            $session->setIsActive(false);
            $session->setStep('annule');
            $session->setCoherent(false);
            $session->setReason('Annulation demandée par utilisateur');
            $session->setAnalysisSummary($summary);
            $session->setUpdatedAt(new \DateTime());

            $reclamation->setStatut('REFUSEE');
            $em->flush();

            $this->whatsAppService->send(
                $whatsappPhone,
                "✅ Votre réclamation a été annulée. Merci et bonne journée 👋"
            );
            return new Response("OK");
        }

        // ── Limite 4 questions atteinte ───────────────────────────────────
        if ($data['turn'] >= 4) {
            $summary = $this->generateSummary($data['history'], $reclamationData);

            $session->setIsActive(false);
            $session->setStep('termine');
            $session->setCoherent(true);
            $session->setReason('Analyse terminée automatiquement');
            $session->setAnalysisSummary($summary);
            $session->setUpdatedAt(new \DateTime());

            $reclamation->setStatut('TRAITEE');
            $em->flush();

            $this->whatsAppService->send(
                $whatsappPhone,
                "✅ Merci, votre réclamation a été analysée."
            );
            return new Response("OK");
        }

        // ── Appel IA ──────────────────────────────────────────────────────
        $result = $this->analyzeWithGemini($data['history'], $reservationData, $reclamationData);

        $data['history'][] = ['role' => 'assistant', 'content' => $result['reply']];

        $this->whatsAppService->send($whatsappPhone, $result['reply']);

        // ── Verdict final atteint ─────────────────────────────────────────
        if ($result['complete']) {
            $isValid = $result['verdict'] === 'valid';
            $summary = $this->generateSummary($data['history'], $reclamationData);

            $session->setIsActive(false);
            $session->setStep('termine');
            $session->setCoherent($isValid);
            $session->setReason($result['reason'] ?? '');
            $session->setAnalysisSummary($summary);
            $session->setUpdatedAt(new \DateTime());

            $reclamation->setStatut($isValid ? 'TRAITEE' : 'REFUSEE');
            $em->flush();

            return new Response("OK");
        }

        // ── Continuer la conversation ─────────────────────────────────────
        $session->setCollectedData(json_encode($data) ?: '{}');
        $session->setUpdatedAt(new \DateTime());
        $em->flush();

        return new Response("OK");
    }

    // ── Analyse IA principale ────────────────────────────────────────────────
    /**
     * @param array<int, array{role: string, content: string}> $history
     * @param array<string, mixed> $reservation
     * @param array<string, mixed> $reclamation
     * @return array{reply: string, complete: bool, verdict: string|null, reason: string|null}
     */
    private function analyzeWithGemini(
        array $history,
        array $reservation,
        array $reclamation
    ): array {
        if (empty($this->geminiApiKey)) {
            return [
                'reply'    => "Pouvez-vous me donner plus de détails sur votre problème ?",
                'complete' => false,
                'verdict'  => null,
                'reason'   => null,
            ];
        }

        $historyText = '';
        foreach ($history as $msg) {
            $role = $msg['role'] === 'user' ? 'Utilisateur' : 'Assistant';
            $historyText .= "$role : {$msg['content']}\n";
        }

        $prompt = "
Tu es un agent de support client intelligent pour une plateforme de voyage.
Tu analyses une réclamation liée à une réservation.

=== RÉSERVATION CONCERNÉE ===
- ID Réservation : {$reservation['id']}
- Type           : {$reservation['type']}
- Date           : {$reservation['date']}
- Statut         : {$reservation['statut']}
- Montant        : {$reservation['montant']} TND

=== RÉCLAMATION SOUMISE ===
- Sujet       : {$reclamation['sujet']}
- Type        : {$reclamation['type']}
- Description : {$reclamation['description']}
- Priorité    : {$reclamation['priorite']}

=== HISTORIQUE ===
$historyText

=== OBJECTIF ===
Tu dois analyser la réclamation et poser des questions intelligentes basées uniquement sur les informations manquantes.

=== COMPORTEMENT ===
1. Analyse la description.
2. Identifie les éléments manquants (date, lieu, fréquence, gravité, impact).
3. Pose UNE seule question ciblée.
4. Chaque question doit être différente.
5. Interdiction de poser des questions vagues comme :
   - 'Pouvez-vous préciser ?'
   - 'Donnez plus de détails'
6. Maximum 4 questions.

=== ARRÊT OBLIGATOIRE ===
Après 4 questions OU si l'utilisateur dit :
- 'c'est tout'
- 'non'
- 'rien'
- 'merci'

→ tu DOIS donner un verdict.

=== FORMAT JSON STRICT ===
Si question :
{\"reply\": \"question intelligente\", \"complete\": false, \"verdict\": null, \"reason\": null}

Si verdict :
{\"reply\": \"message final\", \"complete\": true, \"verdict\": \"valid\" ou \"invalid\", \"reason\": \"explication\"}
";

        $text = $this->callGemini($prompt);

        if (!$text) {
            return [
                'reply'    => "Pouvez-vous me donner plus de détails ?",
                'complete' => false,
                'verdict'  => null,
                'reason'   => null,
            ];
        }

        $text = (string) preg_replace('/```json\s*/i', '', $text);
        $text = (string) preg_replace('/```\s*/i', '', $text);
        $text = trim($text);

        $json = json_decode($text, true);

        if (!$json || !isset($json['reply'])) {
            return [
                'reply'    => $text,
                'complete' => false,
                'verdict'  => null,
                'reason'   => null,
            ];
        }

        return [
            'reply'    => $json['reply']    ?? "Pouvez-vous préciser ?",
            'complete' => $json['complete'] ?? false,
            'verdict'  => $json['verdict']  ?? null,
            'reason'   => $json['reason']   ?? null,
        ];
    }

    // ── Génération du résumé ─────────────────────────────────────────────────
    /**
     * @param array<int, array{role: string, content: string}> $history
     * @param array<string, mixed> $reclamation
     */
    private function generateSummary(array $history, array $reclamation): string
    {
        if (empty($this->geminiApiKey) || empty($history)) {
            return 'Aucun résumé disponible.';
        }

        $historyText = '';
        foreach ($history as $msg) {
            $role = $msg['role'] === 'user' ? 'Utilisateur' : 'Assistant';
            $historyText .= "$role : {$msg['content']}\n";
        }

        $prompt = "
Tu es un assistant d'analyse de réclamations.

=== RÉCLAMATION ===
- Sujet       : {$reclamation['sujet']}
- Type        : {$reclamation['type']}
- Description : {$reclamation['description']}

=== CONVERSATION ===
$historyText

=== TÂCHE ===
Génère un résumé factuel et concis (3-5 phrases maximum) de cette réclamation en tenant compte de la conversation.
Inclure : le problème principal, les détails fournis par l'utilisateur, et la conclusion.
Réponds uniquement avec le texte du résumé, sans JSON, sans markdown.
";

        return $this->callGemini($prompt) ?? 'Résumé non disponible.';
    }

    // ── Données de la réservation liée ──────────────────────────────────────
    /** @return array<string, mixed> */
    private function getReservationData(Reclamation $reclamation, EntityManagerInterface $em): array
    {
        $idReservation = $reclamation->getIdReservation();

        if (!$idReservation) {
            return [
                'id'      => 'N/A',
                'type'    => $reclamation->getTypeReclamation(),
                'date'    => 'N/A',
                'statut'  => 'N/A',
                'montant' => 'N/A',
            ];
        }

        $reservation = $em->getRepository(Reservation::class)->find($idReservation);

        if (!$reservation) {
            return [
                'id'      => $idReservation,
                'type'    => $reclamation->getTypeReclamation(),
                'date'    => 'N/A',
                'statut'  => 'N/A',
                'montant' => 'N/A',
            ];
        }

        $dateReservation = $reservation->getDateReservation();

        return [
            'id'      => $reservation->getIdReservation(),
            'type'    => $reservation->getTypeReservation(),
            'date'    => $dateReservation->format('d/m/Y'),
            'statut'  => $reservation->getStatut(),
            'montant' => $reservation->getMontantTotal(),
        ];
    }

    // ── Données de la réclamation ────────────────────────────────────────────
    /** @return array<string, mixed> */
    private function getReclamationData(Reclamation $reclamation): array
    {
        return [
            'sujet'       => $reclamation->getSujet(),
            'type'        => $reclamation->getTypeReclamation(),
            'description' => $reclamation->getDescription(),
            'priorite'    => $reclamation->getPriorite(),
        ];
    }

    // ── Appel Gemini ─────────────────────────────────────────────────────────
    private function callGemini(string $prompt): ?string
    {
        $body = json_encode([
            'contents' => [
                ['parts' => [['text' => $prompt]]]
            ]
        ]);

        if ($body === false) {
            return null;
        }

        $url = "https://generativelanguage.googleapis.com/v1/models/gemini-2.5-flash:generateContent?key={$this->geminiApiKey}";

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $body,
            CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
            CURLOPT_TIMEOUT        => 30,
        ]);

        $response = curl_exec($ch);
        curl_close($ch);

        if (!is_string($response) || $response === '') {
            return null;
        }

        $result = json_decode($response, true);
        $text   = $result['candidates'][0]['content']['parts'][0]['text'] ?? null;

        return is_string($text) ? trim($text) : null;
    }

    // ── Normalisation du numéro ───────────────────────────────────────────────
    private function normalizePhone(string $phone): string
    {
        $phone = str_replace('whatsapp:', '', $phone);
        $phone = trim($phone);

        if (!str_starts_with($phone, '+')) {
            $phone = '+216' . ltrim($phone, '0');
        }

        return $phone;
    }
}