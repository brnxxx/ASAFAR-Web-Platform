<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;

class FraudDetectionService
{
    public function __construct(private EntityManagerInterface $em) {}

    public function calculateRiskScore(User $user, string $ip, string $agent, string $country, string $city, bool $passwordCorrect): int
    {
        $score = 0;

        if (!$passwordCorrect)                                                      $score += 30;
        if ($this->countRecentFailures($user) >= 3)                                 $score += 35;
        elseif ($this->countRecentFailures($user) >= 1)                             $score += 10;
        if ($this->isNewCountry($user, $country))                                   $score += 30;
        if ($this->isNewIp($user, $ip))                                             $score += 15;
        if ($this->isNewDevice($user, $agent))                                      $score += 10;
        if ($this->isNewCity($user, $city))                                         $score += 10;
        if ($this->isWeirdHour())                                                   $score += 10;
        if ($user->getTrustScore() !== null && $user->getTrustScore() < 30)        $score += 20;

        return min($score, 100);
    }

    public function calculateTrustScore(User $user): int
    {
        $conn = $this->em->getConnection();

        // On part toujours de zéro et on accumule des points pondérés
        // Score max théorique si tout est parfait : 0 + 20 + 15 + 10 + 10 + 15 = 70 points bruts
        // Puis mémoire 0.6/0.4 pour lisser → score réel plafonné à ~85

        $score = 0;

        // ── Échecs récents (10 min) ─────────────────────── max pénalité : -40
        $recentFailures = (int) $conn->executeQuery("
            SELECT COUNT(*) FROM login_history
            WHERE user_id = ? AND success = 0
            AND login_time >= DATE_SUB(NOW(), INTERVAL 10 MINUTE)
        ", [$user->getId()])->fetchOne();

        if      ($recentFailures >= 5) $score -= 40;
        elseif  ($recentFailures >= 3) $score -= 30;
        elseif  ($recentFailures >= 1) $score -= 10;

        // ── Succès récents (24h) ───────────────────────── max bonus : +20
        $recentSuccess = (int) $conn->executeQuery("
            SELECT COUNT(*) FROM login_history
            WHERE user_id = ? AND success = 1
            AND login_time >= DATE_SUB(NOW(), INTERVAL 1 DAY)
        ", [$user->getId()])->fetchOne();

        if      ($recentSuccess >= 5) $score += 20;
        elseif  ($recentSuccess >= 3) $score += 14;
        elseif  ($recentSuccess >= 1) $score += 8;
        // 0 succès → pas de bonus, pas de pénalité (première connexion normale)

        // ── IP connue (succès passés) ──────────────────── bonus : +10 / pénalité : -15
        $ipCount = (int) $conn->executeQuery("
            SELECT COUNT(*) FROM login_history
            WHERE user_id = ? AND ip_address = (
                SELECT ip_address FROM login_history
                WHERE user_id = ? ORDER BY login_time DESC LIMIT 1
            ) AND success = 1
        ", [$user->getId(), $user->getId()])->fetchOne();

        if      ($ipCount >= 3) $score += 10;
        elseif  ($ipCount >= 1) $score += 5;
        else                    $score -= 15;   // IP jamais vue = suspect

        // ── Device connu ──────────────────────────────── bonus : +8 / pénalité : -10
        $deviceCount = (int) $conn->executeQuery("
            SELECT COUNT(*) FROM login_history
            WHERE user_id = ? AND device_fingerprint = (
                SELECT device_fingerprint FROM login_history
                WHERE user_id = ? ORDER BY login_time DESC LIMIT 1
            ) AND success = 1
        ", [$user->getId(), $user->getId()])->fetchOne();

        if      ($deviceCount >= 3) $score += 8;
        elseif  ($deviceCount >= 1) $score += 4;
        else                        $score -= 10;  // device jamais vu = suspect

        // ── Face ID réussi (fiabilité biométrique) ─────── max bonus : +15
        $faceSuccess = (int) $conn->executeQuery("
            SELECT COUNT(*) FROM login_history
            WHERE user_id = ? AND auth_method = 'FACE' AND success = 1
        ", [$user->getId()])->fetchOne();

        if      ($faceSuccess >= 10) $score += 15;
        elseif  ($faceSuccess >= 5)  $score += 12;
        elseif  ($faceSuccess >= 2)  $score += 8;
        elseif  ($faceSuccess >= 1)  $score += 4;

        // ── Normalisation : score brut [-75 .. +53] → [0 .. 100] ──────────
        // On ramène la plage réelle à [0,100] de façon linéaire
        // Min théorique : -75  |  Max théorique : +53
        $minRaw = -75;
        $maxRaw =  53;
        $normalized = (int) round(($score - $minRaw) / ($maxRaw - $minRaw) * 100);
        $normalized = max(0, min(100, $normalized));

        // ── Mémoire (inertie 40%) ──────────────────────────────────────────
        // Évite les sauts brutaux tout en permettant une évolution réelle
        $prevScore = $user->getTrustScore();
        if ($prevScore !== null) {
            $normalized = (int) round($normalized * 0.60 + $prevScore * 0.40);
        }

        return max(0, min(100, $normalized));
    }

    private function countRecentFailures(User $user): int
    {
        return (int) $this->em->getConnection()->executeQuery("
            SELECT COUNT(*) FROM login_history
            WHERE user_id = ? AND success = 0
            AND login_time >= DATE_SUB(NOW(), INTERVAL 10 MINUTE)
        ", [$user->getId()])->fetchOne();
    }

    private function isNewIp(User $user, string $ip): bool           { return $this->check($user, 'ip_address', $ip); }
    private function isNewDevice(User $user, string $agent): bool    { return $this->check($user, 'device_fingerprint', $agent); }
    private function isNewCountry(User $user, string $country): bool { return $this->check($user, 'country', $country); }
    private function isNewCity(User $user, string $city): bool       { return $this->check($user, 'city', $city); }

    private function check(User $user, string $field, string $value): bool
    {
        $count = (int) $this->em->getConnection()->executeQuery("
            SELECT COUNT(*) FROM login_history
            WHERE user_id = ? AND $field = ? AND success = 1
        ", [$user->getId(), $value])->fetchOne();
        return $count === 0;
    }

private function isWeirdHour(): bool
{
    $h = (int) date('H');
    return ($h < 6 || $h >= 23);
}

    public function saveAttempt(
        User    $user,
        string  $email,
        string  $ip,
        string  $agent,
        string  $country,
        string  $city,
        bool    $success,
        int     $risk,
        string  $method,
        float   $confidence = 0,
        ?string $reason     = null,
        ?float  $latitude   = null,
        ?float  $longitude  = null
    ): void {
        $this->em->getConnection()->insert('login_history', [
            'user_id'            => $user->getId(),
            'ip_address'         => $ip,
            'device_fingerprint' => $agent,
            'country'            => $country,
            'city'               => $city,
            'latitude'           => $latitude,
            'longitude'          => $longitude,
            'login_time'         => date('Y-m-d H:i:s'),
            'success'            => $success ? 1 : 0,
            'trust_score'        => $user->getTrustScore() ?? 50,
            'face_confidence'    => $confidence,
            'auth_method'        => $method,
            'fail_reason'        => $reason,
        ]);
    }
}