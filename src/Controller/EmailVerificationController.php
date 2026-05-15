<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class EmailVerificationController extends AbstractController
{
    #[Route('/check-email', name: 'check_email', methods: ['POST'])]
    public function checkEmail(Request $request, UserRepository $userRepository): Response
    {
        $email = $request->request->get('email');

        if (!$email) {
            return new Response("Email requis", 400);
        }

        // Vérifier si l'email existe déjà
        $existingUser = $userRepository->findOneBy(['email' => $email]);

        if ($existingUser) {
            return new Response("Cet email est déjà utilisé", 400);
        }

        return new Response("OK");
    }

    #[Route('/verify-email', name: 'verify_email_page')]
public function verifyEmailPage(): Response
    {
        return $this->render('/sarra/verify_email.html.twig');
    }

    #[Route('/send-code', name: 'send_code', methods: ['POST'])]
    public function sendCode(Request $request, MailerInterface $mailer, UserRepository $userRepository): Response
    {
        $email = $request->request->get('email');

        if (!$email) {
            return new Response("Email requis", 400);
        }

        // Vérifier si l'email existe déjà
        $existingUser = $userRepository->findOneBy(['email' => $email]);
        if ($existingUser) {
            return new Response("Cet email est déjà utilisé", 400);
        }

        // Générer le code
        $code = rand(100000, 999999);

        // Stocker en session
        $session = $request->getSession();
        $session->set('verification_code', $code);
        $session->set('verification_email', $email);
        $session->set('verification_expire', time() + 600); // 10 min

        // Envoyer l'email
        try {
            $mail = (new Email())
                ->from('sarrachaabene15@gmail.com')
->to((string) $email)
                ->subject('Code de confirmation')
                ->html("<h2>Votre code : $code</h2>");

            $mailer->send($mail);
        } catch (\Exception $e) {
            return new Response("Erreur mail: " . $e->getMessage(), 500);
        }

        return new Response("Code envoyé");
    }

    #[Route('/verify-code', name: 'verify_code', methods: ['POST'])]
    public function verifyCode(Request $request): Response
    {
        $email = $request->request->get('email');
        $code = $request->request->get('code');

        if (!$email || !$code) {
            return new Response("Email et code requis", 400);
        }

        $session = $request->getSession();
        $storedCode = $session->get('verification_code');
        $storedEmail = $session->get('verification_email');
        $expire = $session->get('verification_expire');

        if (!$storedCode || !$storedEmail) {
            return new Response("Aucun code trouvé");
        }

        if ($expire < time()) {
            return new Response("Code expiré");
        }

        if ($email !== $storedEmail || $code != $storedCode) {
            return new Response("Code incorrect");
        }

        $session->set('verified_email', $email);
        return new Response("Email vérifié");
    }
}
