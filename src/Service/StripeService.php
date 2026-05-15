<?php

namespace App\Service;

use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeService
{
    private string $secretKey;

    public function __construct(string $stripeSecretKey)
    {
        $this->secretKey = $stripeSecretKey;
    }

    public function createCheckoutSession(
        float $amount,
        int $reservationId,
        string $successUrl,
        string $cancelUrl
    ): Session {
        if ($amount <= 0) {
            throw new \Exception('Montant invalide');
        }

        Stripe::setApiKey($this->secretKey);

        $session = Session::create([
            'mode' => 'payment',

            'payment_method_types' => ['card'],

            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Réservation excursion #' . $reservationId,
                    ],
                    'unit_amount' => (int) round($amount * 100),
                ],
                'quantity' => 1,
            ]],

            'metadata' => [
                'reservation_id' => (string) $reservationId,
            ],

            'success_url' => $successUrl,
            'cancel_url'  => $cancelUrl,
        ]);

        return $session;
    }
}