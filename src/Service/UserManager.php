<?php

namespace App\Service;

use App\Entity\User;

class UserManager
{
    public function validate(User $user): bool
    {
        // email obligatoire + valide
        if (!$user->getEmail() || !filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('Email invalide');
        }

        // mot de passe mini 8
        if (!$user->getPassword() || strlen($user->getPassword()) < 8) {
            throw new \InvalidArgumentException(
                'Le mot de passe doit contenir au moins 8 caractères'
            );
        }

        // trust score
        /** @phpstan-ignore-next-line function.alreadyNarrowedType */
        if (method_exists($user, 'getTrustScore')) {
            $score = $user->getTrustScore();

            if ($score < 0 || $score > 100) {
                throw new \InvalidArgumentException(
                    'Trust score invalide'
                );
            }
        }

        return true;
    }
}