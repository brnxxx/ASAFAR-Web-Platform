<?php

namespace App\Controller;

use App\Entity\Hebergement;
use App\Repository\HebergementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HebergementDetailController extends AbstractController
{
    #[Route('/hebergements/{id}', name: 'app_hebergement_detail')]
    public function detail(Hebergement $hebergement): Response
    {
        return $this->render('hebergements/detail.html.twig', [
            'hebergement' => $hebergement,
        ]);
    }
}
