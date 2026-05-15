<?php

namespace App\Service;

use App\Entity\Favorite;
use App\Entity\User;
use App\Entity\Excursion;
use App\Repository\FavoriteRepository;
use Doctrine\ORM\EntityManagerInterface;

class FavoriteService
{
    public function __construct(
        private FavoriteRepository $repo,
        private EntityManagerInterface $em
    ) {}

    public function toggle(User $user, Excursion $excursion): bool
    {
        $existing = $this->repo->findOneBy([
            'user' => $user,
            'excursion' => $excursion
        ]);

        if ($existing) {
            $this->em->remove($existing);
            $this->em->flush();
            return false; // supprimé
        }

        $fav = new Favorite();
        $fav->setUser($user);
        $fav->setExcursion($excursion);

        $this->em->persist($fav);
        $this->em->flush();

        return true; // ajouté
    }

    public function isFavorite(?User $user, Excursion $excursion): bool
    {
        if (!$user) return false;

        return (bool) $this->repo->findOneBy([
            'user' => $user,
            'excursion' => $excursion
        ]);
    }

    public function countFor(Excursion $excursion): int
    {
        return $this->repo->count(['excursion' => $excursion]);
    }
}