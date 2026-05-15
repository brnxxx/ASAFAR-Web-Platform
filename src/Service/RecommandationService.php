<?php

namespace App\Service;

use App\Entity\Excursion;
use App\Entity\User;
use App\Repository\ReservationRepository;
use App\Repository\ExcursionRepository;

class RecommandationService
{
    public function __construct(
        private ReservationRepository $reservationRepo,
        private ExcursionRepository $excursionRepo,
        private string $geminiApiKey
    ) {}

    /**
     * @return array<int, array{
     *     excursion: Excursion,
     *     raison: string
     * }>
     */
    public function getRecommandations(User $user, int $limit = 4): array
    {
        $reservations = $this->reservationRepo->findBy(
            ['idUser' => $user->getId()],
            ['dateReservation' => 'DESC'],
            20
        );

        /** @var array<int, Excursion> $excursionsDisponibles */
        $excursionsDisponibles = $this->excursionRepo->createQueryBuilder('e')
            ->where('e.nombrePlacesDisponibles > 0')
            ->getQuery()
            ->getResult();

        if (empty($excursionsDisponibles)) {
            return [];
        }

        $idDejaReserves = [];
        foreach ($reservations as $res) {
            $idDejaReserves[] = $res->getIdExcursion();
        }

        $historiqueText = '';

        if (!empty($reservations)) {
            foreach ($reservations as $res) {
                if (!$res->getIdExcursion()) {
                    continue;
                }

                $exc = $this->excursionRepo->find($res->getIdExcursion());

                if ($exc instanceof Excursion) {
                    $historiqueText .= sprintf(
                        "- %s (lieu: %s, budget: %d TND)\n",
                        $exc->getTitre(),
                        $exc->getLieu(),
                        $res->getMontantTotal()
                    );
                }
            }
        } else {
            $historiqueText = 'Aucune réservation précédente.';
        }

        $excursionsText = '';

        foreach ($excursionsDisponibles as $exc) {
            if (!in_array($exc->getIdExcursion(), $idDejaReserves, true)) {
                $excursionsText .= sprintf(
                    "ID:%d | %s | lieu: %s | prix adulte: %d TND | places: %d\n",
                    $exc->getIdExcursion(),
                    $exc->getTitre(),
                    $exc->getLieu(),
                    $exc->getPrixAdulte(),
                    $exc->getNombrePlacesDisponibles()
                );
            }
        }

        $prompt = <<<EOT
Tu es un système de recommandation de voyages.

Historique des réservations de l'utilisateur :
$historiqueText

Excursions disponibles :
$excursionsText

Analyse le budget moyen et les lieux préférés de l'utilisateur.
Recommande exactement $limit excursions parmi la liste disponible.

Réponds UNIQUEMENT en JSON valide, sans texte avant ou après, sans balises markdown, sous ce format :
[
  {"id": 1, "raison": "Correspond à votre budget habituel et lieu préféré"},
  {"id": 2, "raison": "Destination similaire à vos voyages passés"}
]
EOT;

        try {
            $response = $this->callGemini($prompt);
            $json = json_decode($response, true);

            if (!is_array($json)) {
                return $this->getFallback($excursionsDisponibles, $idDejaReserves, $limit);
            }

            $result = [];

            foreach ($json as $item) {
                $excursion = $this->excursionRepo->find($item['id'] ?? null);

                if (
                    $excursion instanceof Excursion &&
                    !in_array($excursion->getIdExcursion(), $idDejaReserves, true)
                ) {
                    $result[] = [
                        'excursion' => $excursion,
                        'raison' => is_string($item['raison'] ?? null)
                            ? $item['raison']
                            : '✨ Recommandé pour vous',
                    ];
                }
            }

            return array_slice($result, 0, $limit);
        } catch (\Exception $e) {
            return $this->getFallback($excursionsDisponibles, $idDejaReserves, $limit);
        }
    }

    private function callGemini(string $prompt): string
    {
        $url = sprintf(
            'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-8b:generateContent?key=%s',
            $this->geminiApiKey
        );

        $payload = json_encode([
            'contents' => [['parts' => [['text' => $prompt]]]],
            'generationConfig' => [
                'temperature' => 0.3,
                'maxOutputTokens' => 500,
            ],
        ]);

        if ($payload === false) {
            throw new \Exception('Erreur génération JSON');
        }

        $ch = curl_init($url);

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
            CURLOPT_POSTFIELDS => $payload,
        ]);

        $response = curl_exec($ch);
        curl_close($ch);

        if (!is_string($response)) {
            return '[]';
        }

        $data = json_decode($response, true);

        if (!is_array($data)) {
            return '[]';
        }

        $text = $data['candidates'][0]['content']['parts'][0]['text'] ?? null;

        return is_string($text) ? $text : '[]';
    }

    /**
     * @param array<int, Excursion> $excursions
     * @param array<int, int|null> $exclure
     *
     * @return array<int, array{
     *     excursion: Excursion,
     *     raison: string
     * }>
     */
    private function getFallback(array $excursions, array $exclure, int $limit): array
    {
        $result = [];

        foreach ($excursions as $exc) {
            if (!in_array($exc->getIdExcursion(), $exclure, true)) {
                $result[] = [
                    'excursion' => $exc,
                    'raison' => '⭐ Populaire en ce moment',
                ];
            }

            if (count($result) >= $limit) {
                break;
            }
        }

        return $result;
    }
}