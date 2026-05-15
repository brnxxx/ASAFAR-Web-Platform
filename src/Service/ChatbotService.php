<?php

namespace App\Service;

use App\Entity\Excursion;
use App\Repository\ExcursionRepository;

class ChatbotService
{
    public function __construct(
        private ExcursionRepository $excursionRepo,
        private string $geminiApiKey
    ) {}

    /**
     * @return array{
     *     reply: string,
     *     excursions: array<int, array<string, mixed>>
     * }
     */
    public function recommander(
        int $nbPersonnes,
        float $budget,
        string $lieu,
        string $message
    ): array {
        $nbPersonnes = max(1, $nbPersonnes);

        /** @var array<int, Excursion> $excursions */
        $excursions = $this->excursionRepo->createQueryBuilder('e')
            ->where('e.nombrePlacesDisponibles > 0')
            ->getQuery()
            ->getResult();

        $excursionsText = '';

        foreach ($excursions as $exc) {
            $totalEstime = $exc->getPrixAdulte() * $nbPersonnes;

            $excursionsText .= sprintf(
                "ID:%d | %s | Lieu:%s | Prix:%.0f | Total:%.0f | Places:%d | Durée:%dh\n",
                $exc->getIdExcursion(),
                $exc->getTitre(),
                $exc->getLieu(),
                $exc->getPrixAdulte(),
                $totalEstime,
                $exc->getNombrePlacesDisponibles(),
                $exc->getDuree()
            );
        }

        $contexteCriteres = '';

        if ($budget > 0 || $lieu !== '') {
            $contexteCriteres = "Utilisateur: $nbPersonnes personne(s), budget $budget TND"
                . ($lieu ? ", lieu préféré: $lieu" : "");
        }

        $prompt = <<<EOT
Assistant voyage ASAFAR.

$contexteCriteres

Catalogue:
$excursionsText

Message: "$message"

Règles:
- Réponds en français
- Si recommandation → RECOMMENDED_IDS:[id1,id2]
- Sinon rien
EOT;

        try {
            $reply = $this->callGemini($prompt);
        } catch (\Exception $e) {
            return $this->fallbackSansIA(
                $excursions,
                $nbPersonnes,
                $budget,
                $lieu
            );
        }

        $recommendedIds = [];

        if (preg_match('/RECOMMENDED_IDS:\[([0-9,\s]+)\]/', $reply, $matches)) {
            $recommendedIds = array_map('intval', explode(',', $matches[1]));
            $reply = preg_replace('/RECOMMENDED_IDS:\[[0-9,\s]+\]/', '', $reply) ?? $reply;
        }

        $excursionsRecommandees = [];

        foreach ($recommendedIds as $id) {
            $exc = $this->excursionRepo->find($id);

            if ($exc instanceof Excursion) {
                $excursionsRecommandees[] = $this->formatExcursion($exc, $nbPersonnes);
            }
        }

        return [
            'reply' => trim($reply),
            'excursions' => $excursionsRecommandees,
        ];
    }

    private function callGemini(string $prompt): string
    {
        $models = [
            'gemini-1.5-flash',
            'gemini-1.5-pro',
        ];

        $payload = json_encode([
            'contents' => [[
                'parts' => [['text' => $prompt]],
            ]],
            'generationConfig' => [
                'temperature' => 0.7,
                'maxOutputTokens' => 800,
            ],
        ]);

        if ($payload === false) {
            throw new \Exception('Impossible de générer le payload JSON');
        }

        $lastError = '';

        foreach ($models as $model) {
            $url = sprintf(
                'https://generativelanguage.googleapis.com/v1/models/%s:generateContent?key=%s',
                $model,
                $this->geminiApiKey
            );

            for ($attempt = 1; $attempt <= 2; $attempt++) {
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

                if ($httpCode === 200 && is_string($response)) {
                    $data = json_decode($response, true);
                    $text = $data['candidates'][0]['content']['parts'][0]['text'] ?? null;

                    if (is_string($text) && $text !== '') {
                        $clean = preg_replace('/```[a-z]*\n?/i', '', $text);
                        return trim($clean ?? $text);
                    }

                    $lastError = 'Réponse vide';
                    break;
                }

                if ($httpCode === 429 && $attempt < 2) {
                    sleep(5);
                    continue;
                }

                $lastError = "HTTP $httpCode";
                break;
            }
        }

        throw new \Exception($lastError ?: 'Erreur Gemini');
    }

    /**
     * @param array<int, Excursion> $excursions
     * @return array{
     *     reply: string,
     *     excursions: array<int, array<string, mixed>>
     * }
     */
    private function fallbackSansIA(
        array $excursions,
        int $nbPersonnes,
        float $budget,
        string $lieu
    ): array {
        $filtrees = array_filter(
            $excursions,
            function (Excursion $e) use ($nbPersonnes, $budget, $lieu): bool {
                $matchBudget = ($e->getPrixAdulte() * $nbPersonnes) <= $budget;

                $matchLieu = empty($lieu)
                    || stripos($e->getLieu(), $lieu) !== false;

                return $matchBudget && $matchLieu;
            }
        );

        if (!empty($lieu) && empty($filtrees)) {
            $alternatives = array_filter(
                $excursions,
                fn (Excursion $e): bool => ($e->getPrixAdulte() * $nbPersonnes) <= $budget
            );

            if (empty($alternatives)) {
                $alternatives = $excursions;
            }

            usort(
                $alternatives,
                fn (Excursion $a, Excursion $b): int => $a->getPrixAdulte() <=> $b->getPrixAdulte()
            );

            $top3 = array_slice($alternatives, 0, 3);

            return [
                'reply' => "❌ Aucune excursion disponible à $lieu pour votre budget.\n\n💡 Voici des alternatives :",
                'excursions' => array_map(
                    fn (Excursion $e): array => $this->formatExcursion($e, $nbPersonnes),
                    $top3
                ),
            ];
        }

        usort(
            $filtrees,
            fn (Excursion $a, Excursion $b): int => $a->getPrixAdulte() <=> $b->getPrixAdulte()
        );

        $top3 = array_slice($filtrees, 0, 3);

        return [
            'reply' => '💡 Voici les meilleures excursions :',
            'excursions' => array_map(
                fn (Excursion $e): array => $this->formatExcursion($e, $nbPersonnes),
                $top3
            ),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function formatExcursion(Excursion $exc, int $nbPersonnes): array
    {
        return [
            'id' => $exc->getIdExcursion(),
            'titre' => $exc->getTitre(),
            'lieu' => $exc->getLieu(),
            'prix' => $exc->getPrixAdulte(),
            'total' => $exc->getPrixAdulte() * $nbPersonnes,
            'places' => $exc->getNombrePlacesDisponibles(),
            'duree' => $exc->getDuree(),
            'image' => $exc->getImageUrl(),
        ];
    }
}