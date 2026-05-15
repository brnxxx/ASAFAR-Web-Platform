<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api')]
class CurrencyController extends AbstractController
{
    #[Route('/convert-currency', name: 'api_convert_currency', methods: ['POST'])]
    public function convertCurrency(Request $request): Response
    {
        $amount = (float)($request->request->get('amount') ?? 0);
        $fromCurrency = strtoupper((string)($request->request->get('from') ?? 'EUR'));
        $toCurrency = strtoupper((string)($request->request->get('to') ?? 'USD'));

        // Exchange rates
        $rates = [
            'EUR' => ['USD' => 1.10, 'GBP' => 0.86, 'JPY' => 165.50, 'CAD' => 1.50, 'AUD' => 1.68, 'CHF' => 0.95, 'INR' => 91.50, 'TND' => 3.40],
            'USD' => ['EUR' => 0.91, 'GBP' => 0.78, 'JPY' => 150.50, 'CAD' => 1.36, 'AUD' => 1.53, 'CHF' => 0.86, 'INR' => 83.20, 'TND' => 3.10],
            'GBP' => ['EUR' => 1.16, 'USD' => 1.28, 'JPY' => 193.00, 'CAD' => 1.74, 'AUD' => 1.96, 'CHF' => 1.10, 'INR' => 106.50, 'TND' => 3.97],
            'JPY' => ['EUR' => 0.0060, 'USD' => 0.0066, 'GBP' => 0.0052, 'CAD' => 0.0090, 'AUD' => 0.010, 'CHF' => 0.0057, 'INR' => 0.55, 'TND' => 0.021],
            'CAD' => ['EUR' => 0.67, 'USD' => 0.74, 'GBP' => 0.57, 'JPY' => 111.00, 'AUD' => 1.12, 'CHF' => 0.63, 'INR' => 61.00, 'TND' => 2.28],
            'AUD' => ['EUR' => 0.60, 'USD' => 0.65, 'GBP' => 0.51, 'JPY' => 99.00, 'CAD' => 0.89, 'CHF' => 0.56, 'INR' => 54.50, 'TND' => 2.03],
            'CHF' => ['EUR' => 1.05, 'USD' => 1.16, 'GBP' => 0.91, 'JPY' => 175.00, 'CAD' => 1.59, 'AUD' => 1.79, 'INR' => 97.00, 'TND' => 3.58],
            'INR' => ['EUR' => 0.011, 'USD' => 0.012, 'GBP' => 0.0094, 'JPY' => 1.82, 'CAD' => 0.016, 'AUD' => 0.018, 'CHF' => 0.010, 'TND' => 0.037],
            'TND' => ['EUR' => 0.29, 'USD' => 0.32, 'GBP' => 0.25, 'JPY' => 47.00, 'CAD' => 0.44, 'AUD' => 0.49, 'CHF' => 0.28, 'INR' => 27.00],
        ];

        $convertedAmount = 0;
        if ($fromCurrency === $toCurrency) {
            $convertedAmount = $amount;
        } elseif (isset($rates[$fromCurrency][$toCurrency])) {
            $convertedAmount = $amount * $rates[$fromCurrency][$toCurrency];
        }

        return $this->json([
            'success' => true,
            'amount' => $amount,
            'from' => $fromCurrency,
            'to' => $toCurrency,
            'converted' => round($convertedAmount, 2),
            'rate' => isset($rates[$fromCurrency][$toCurrency]) ? $rates[$fromCurrency][$toCurrency] : 0,
        ]);
    }
}
