<?php

namespace App\Service;

use Doctrine\DBAL\Connection;

class DatabaseChatbotService
{
    private string $fastApiUrl = 'http://localhost:8001';

    public function __construct(private Connection $connection) {}

    /**
     * @param array<int, array<string, mixed>> $history
     *
     * @return array{
     *     answer: string,
     *     sql: string|null,
     *     results: array<int, array<string, mixed>>|null,
     *     error: string|null
     * }
     */
    public function ask(string $question, array $history = []): array
    {
        try {
            // ── Étape 1 : demander le SQL à FastAPI ──────────────────
            $sql = $this->callFastApi($question);

            if (!$sql) {
                return [
                    'answer' => "Je n'ai pas pu générer une requête SQL pour cette question.",
                    'sql' => null,
                    'results' => null,
                    'error' => null,
                ];
            }

            // ── Étape 2 : exécuter le SQL ─────────────────────────────
            $results = $this->executeSql($sql);

            if (isset($results['error'])) {
                return [
                    'answer' => "Erreur lors de l'exécution : " . $results['error'],
                    'sql' => $sql,
                    'results' => null,
                    'error' => $results['error'],
                ];
            }

            /** @var array<int, array<string, mixed>> $data */
            $data = $results['data'] ?? [];

            // ── Étape 3 : formuler la réponse ────────────────────────
            $count = count($data);

            $answer = $count > 0
                ? "J'ai trouvé $count résultat(s) pour votre question."
                : "Aucun résultat trouvé pour cette question.";

            return [
                'answer' => $answer,
                'sql' => $sql,
                'results' => $data,
                'error' => null,
            ];
        } catch (\Exception $e) {
            return [
                'answer' => 'Erreur : ' . $e->getMessage() . '. Vérifiez que FastAPI tourne avec : uvicorn main:app --port 8001',
                'sql' => null,
                'results' => null,
                'error' => $e->getMessage(),
            ];
        }
    }

    // ── Appel FastAPI ──────────────────────────────────────────────────
    private function callFastApi(string $question): ?string
    {
        $payload = json_encode(['message' => $question]);

        // correction PHPStan
        if ($payload === false) {
            throw new \RuntimeException('Erreur encodage JSON');
        }

        $ch = curl_init("{$this->fastApiUrl}/ask");

        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        ]);

        $response = curl_exec($ch);
        $httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);

        curl_close($ch);

        if ($error || $httpCode !== 200 || !is_string($response)) {
            throw new \RuntimeException("FastAPI non accessible (port 8001) : $error");
        }

        $data = json_decode($response, true);

        if (!is_array($data)) {
            return null;
        }

        return is_string($data['sql'] ?? null)
            ? $data['sql']
            : null;
    }

    // ── Exécution SQL sécurisée ────────────────────────────────────────
    /**
     * @return array{
     *     data?: array<int, array<string, mixed>>,
     *     error?: string
     * }
     */
    private function executeSql(string $sql): array
    {
        // Nettoyer les commentaires SQL et les espaces
        $cleaned = preg_replace('/--[^\n]*\n?/', '', $sql) ?? $sql;
        $cleaned = preg_replace('/\/\*.*?\*\//s', '', $cleaned) ?? $cleaned;

        $collapsed = preg_replace('/\s+/', ' ', $cleaned) ?? $cleaned;
        $normalized = strtoupper(trim($collapsed));

        if (!str_starts_with($normalized, 'SELECT')) {
            return ['error' => 'Seules les requêtes SELECT sont autorisées.'];
        }

        $forbidden = ['INSERT', 'UPDATE', 'DELETE', 'DROP', 'TRUNCATE', 'ALTER', 'CREATE'];

        foreach ($forbidden as $kw) {
            if (preg_match('/\b' . $kw . '\b/', $normalized)) {
                return ['error' => "Mot-clé interdit : $kw"];
            }
        }

        try {
            $stmt = $this->connection->executeQuery($sql);

            return [
                'data' => $stmt->fetchAllAssociative(),
            ];
        } catch (\Exception $e) {
            return [
                'error' => $e->getMessage(),
            ];
        }
    }

    // ── Status ─────────────────────────────────────────────────────────
    public function checkOllamaStatus(): bool
    {
        try {
            $ch = curl_init("{$this->fastApiUrl}/");

            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 3,
            ]);

            curl_exec($ch);
            $httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);

            curl_close($ch);

            return $httpCode === 200;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getSchema(): string
    {
        return 'Schéma chargé automatiquement par FastAPI';
    }
}