<?php

namespace App\Twig;

use App\Repository\HebergementRepository;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    private HebergementRepository $hebergementRepository;

    public function __construct(HebergementRepository $hebergementRepository)
    {
        $this->hebergementRepository = $hebergementRepository;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_hebergements_by_localisation_and_budget', [$this, 'getHebergementsByLocalisationAndBudget']),
        ];
    }

    /**
     * @return array<int, mixed>
     */
    public function getHebergementsByLocalisationAndBudget(string $localisation, float $budget): array
    {
        return $this->hebergementRepository->findByLocalisationAndBudget($localisation, $budget);
    }
}
