<?php

namespace App\Controller;

use App\Entity\Favorite;
use App\Entity\User;
use App\Repository\ExcursionRepository;
use App\Repository\FavoriteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/favoris')]
class FavoriteController extends AbstractController
{
    #[Route('/{id}', name: 'toggle_favoris', methods: ['POST'])]
    public function toggle(
        int $id,
        ExcursionRepository $excursionRepository,
        FavoriteRepository $favoriteRepository,
        EntityManagerInterface $em
    ): JsonResponse {

        // FIX :46 — instanceof guard narrows UserInterface to User for setUser()
        $user = $this->getUser();

        if (!$user instanceof User) {
            return new JsonResponse(['error' => 'unauthorized'], 401);
        }

        $excursion = $excursionRepository->find($id);

        if (!$excursion) {
            return new JsonResponse(['error' => 'not_found'], 404);
        }

        $favorite = $favoriteRepository->findOneBy([
            'user'      => $user,
            'excursion' => $excursion,
        ]);

        if ($favorite) {
            $em->remove($favorite);
            $isFavori = false;
        } else {
            $favorite = new Favorite();
            $favorite->setUser($user);
            $favorite->setExcursion($excursion);

            $em->persist($favorite);
            $isFavori = true;
        }

        $em->flush();

        $count = $favoriteRepository->count([
            'excursion' => $excursion,
        ]);

        return new JsonResponse([
            'success'  => true,
            'isFavori' => $isFavori,
            'count'    => $count,
        ]);
    }
}