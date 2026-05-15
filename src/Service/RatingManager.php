<?php

namespace App\Service;

use App\Entity\User;
use App\Entity\Excursion;
use App\Entity\Rating;
use Doctrine\ORM\EntityManagerInterface;

class RatingManager
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function rate(User $user, Excursion $excursion, int $value): void
    {
        $repo = $this->em->getRepository(Rating::class);

        $rating = $repo->findOneBy([
            'user' => $user,
            'excursion' => $excursion
        ]);

        if (!$rating) {
            $rating = new Rating();
            $rating->setUser($user);
            $rating->setExcursion($excursion);
        }

        $rating->setValue($value);

        $this->em->persist($rating);
        $this->em->flush();
    }
}