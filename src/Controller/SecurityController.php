<?php

namespace App\Controller;
use App\Repository\WheelSpinRepository;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        // Créer un formulaire pour l'inscription (affiché sur la même page)
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        return $this->render('sarra/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'form' => $form->createView(),
        ]);
    }

#[Route('/home', name: 'home')]
public function home(WheelSpinRepository $wheelRepo): Response
{
    $user = $this->getUser();

    $alreadyPlayed = false;

if ($user instanceof User) {
        $alreadyPlayed = $wheelRepo->hasUserPlayedToday($user);
    }

    return $this->render('index.html.twig', [
        'alreadyPlayed' => $alreadyPlayed
    ]);
}
    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
