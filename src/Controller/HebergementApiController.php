<?php
namespace App\Controller;

use App\Repository\HebergementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HebergementApiController extends AbstractController
{
    #[Route('/api/hebergements/localisations', name: 'api_hebergements_localisations', methods: ['GET'])]
    public function localisations(HebergementRepository $repo): JsonResponse
    {
        $localisations = $repo->findAllLocalisations();
        return $this->json(['localisations' => $localisations]);
    }
}
