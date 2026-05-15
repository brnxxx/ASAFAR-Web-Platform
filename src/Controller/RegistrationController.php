<?php

namespace App\Controller;
use Symfony\Component\Form\FormInterface;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class RegistrationController extends AbstractController
{
private function renderLogin(FormInterface $form, ?string $error = null, string $lastUsername = ''): Response
{
    return $this->render('sarra/login.html.twig', [
        'form'          => $form->createView(),
        'error'         => $error,
        'last_username' => $lastUsername,
    ]);
}

    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserRepository $userRepository,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Vérifier si l'email existe déjà
            $existingUser = $userRepository->findOneBy(['email' => $user->getEmail()]);
            if ($existingUser) {
                $this->addFlash('error', 'Cet email est déjà utilisé');
                return $this->renderLogin($form);
            }

            // Vérification email via session (OBLIGATOIRE)
            $session = $request->getSession();
            $verifiedEmail = $session->get('verified_email');

            if (!$verifiedEmail || $verifiedEmail !== $user->getEmail()) {
                $this->addFlash('error', 'Veuillez vérifier votre email avant de vous inscrire');
                return $this->renderLogin($form);
            }

            // Récupérer le mot de passe depuis plainPassword
            $plainPassword = $form->get('plainPassword')->getData();

            if (!$plainPassword) {
                $this->addFlash('error', 'Mot de passe invalide');
                return $this->renderLogin($form);
            }

            // Hasher le mot de passe
            $hashedPassword = $passwordHasher->hashPassword($user, $plainPassword);
            $user->setPassword($hashedPassword);

            $user->setRole('client');
            $user->setStatut('actif');
            $user->setDateInscription(new \DateTime());
            $user->setDateCreation( new \DateTime());
            $user->setTrustScore(50);
            $user->setTrustLevel('Nouveau');

            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                try {
                    $imageFile->move(
                        $this->getParameter('uploads_directory'),
                        $newFilename
                    );
                    $user->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image');
                }
            }

            $userRepository->save($user, true);

            $session->remove('verified_email');
            $session->remove('verification_code');

            $this->addFlash('success', 'Compte créé avec succès ! Vous pouvez maintenant vous connecter.');

            return $this->redirectToRoute('app_login');
        }

        return $this->renderLogin($form);
    }

    #[Route('/validate-register', name: 'app_validate_register', methods: ['POST'])]
    public function validateRegister(Request $request): JsonResponse
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return new JsonResponse(['valid' => true]);
        }

        $html = $this->renderView('sarra/login.html.twig', [
            'form'          => $form->createView(),
            'error'         => null,
            'last_username' => '',
        ]);

        return new JsonResponse(['valid' => false, 'html' => $html]);
    }
}