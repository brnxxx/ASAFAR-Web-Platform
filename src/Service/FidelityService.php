<?php

namespace App\Service;

use App\Entity\User;
use App\Entity\PromoCode;
use App\Repository\PromoCodeRepository;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;

class FidelityService
{
    public function __construct(
        private EntityManagerInterface $em,
        private PromoCodeRepository $promoCodeRepository,
        private ReservationRepository $reservationRepository
    ) {}

    public function calculateEarnedPoints(User $user, float $montant, int $nbReservations): int
    {
        if ($montant <= 0) {
            return 0;
        }

        $points = (int) floor($montant / 10);

        if ($user->getDateInscription()) {
            $years = $user->getDateInscription()->diff(new \DateTime())->y;

            if ($years >= 1) {
                $points += min(10, $years * 2);
            }
        }

        if ($nbReservations >= 5) {
            $points += min(20, $nbReservations);
        }

        return $points;
    }

    // ─────────────────────────────
    // ⭐ SCORE GLOBAL
    // ─────────────────────────────
    public function calculateGlobalScore(User $user): int
    {
        $nbReservations = $this->reservationRepository->count([
            'idUser' => $user->getId(),
        ]);

        $totalSpentResult = $this->reservationRepository->createQueryBuilder('r')
            ->select('SUM(r.montantTotal)')
            ->where('r.idUser = :user')
            ->setParameter('user', $user->getId())
            ->getQuery()
            ->getSingleScalarResult();

        $totalSpent = is_numeric($totalSpentResult)
            ? (float) $totalSpentResult
            : 0.0;

        $score = 0;

        // activité (max 40)
        $score += min(40, $nbReservations * 2);

        // dépenses (max 30)
        $score += min(30, (int) floor($totalSpent / 100));

        // ancienneté (max 30)
        if ($user->getDateInscription()) {
            $years = $user->getDateInscription()->diff(new \DateTime())->y;
            $score += min(30, $years * 5);
        }

        return min(100, $score);
    }

    public function getPromoPercentage(int $score): int
    {
        if ($score >= 60) {
            return 20;
        }

        if ($score >= 40) {
            return 15;
        }

        if ($score >= 30) {
            return 10;
        }

        return 0;
    }

    public function generatePromoIfEligible(User $user): ?PromoCode
    {
        $score = $this->calculateGlobalScore($user);
        $pourcentage = $this->getPromoPercentage($score);

        // ❌ pas éligible
        if ($pourcentage === 0) {
            return null;
        }

        $existing = $this->promoCodeRepository->findOneBy([
            'user' => $user,
            'actif' => true,
        ]);

        if ($existing instanceof PromoCode) {
            return $existing;
        }

        // ✅ création
        $promo = new PromoCode();
        $promo->setCode($this->generateUniquePromoCode());
        $promo->setPourcentage($pourcentage);
        $promo->setActif(true);
        $promo->setDateExpiration((new \DateTime())->modify('+7 days'));
        $promo->setUser($user);

        $this->em->persist($promo);
        $this->em->flush();

        return $promo;
    }

    private function generateUniquePromoCode(): string
    {
        do {
            $code = 'FID' . strtoupper(substr(uniqid(), -6));
        } while ($this->promoCodeRepository->exists($code));

        return $code;
    }

    public function getLevel(int $score): string
    {
        if ($score < 30) {
            return 'Bronze';
        }

        if ($score < 70) {
            return 'Silver';
        }

        return 'Gold';
    }

    /**
     * @return array{
     *     code: string,
     *     percent: int,
     *     label: string
     * }|null
     */
    public function getPromoByScore(int $score): ?array
    {
        if ($score >= 60) {
            return [
                'code' => 'GOLD20',
                'percent' => 20,
                'label' => 'Gold',
            ];
        }

        if ($score >= 40) {
            return [
                'code' => 'SILVER15',
                'percent' => 15,
                'label' => 'Silver',
            ];
        }

        if ($score >= 30) {
            return [
                'code' => 'BRONZE10',
                'percent' => 10,
                'label' => 'Bronze',
            ];
        }

        return null;
    }
}