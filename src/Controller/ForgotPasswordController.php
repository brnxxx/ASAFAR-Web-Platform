<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class ForgotPasswordController extends AbstractController
{
    // ── Étape 1 : envoyer le code par email ───────────────────────────
    #[Route('/forgot-password/send-code', name: 'forgot_password_send_code', methods: ['POST'])]
    public function sendCode(
        Request $request,
        EntityManagerInterface $em,
        MailerInterface $mailer
    ): JsonResponse {
        // FIX :24 — request->get() returns mixed; cast to string before trim
        $email = trim((string) $request->request->get('email', ''));

        if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->json(['status' => 'ERROR', 'message' => 'Email invalide'], 400);
        }

        $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);

        if (!$user) {
            return $this->json(['status' => 'OK']);
        }

        // FIX :38 — random_int returns int; cast to string before str_pad
        $code = str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        $request->getSession()->set('forgot_password_code',     $code);
        $request->getSession()->set('forgot_password_email',    $email);
        $request->getSession()->set('forgot_password_time',     time());
        $request->getSession()->set('forgot_password_verified', false);

        $emailMessage = (new Email())
            ->from('no-reply@esprit.tn')
            ->to($email)
            ->subject('Réinitialisation de votre mot de passe')
            ->html("
                <div style='font-family:Arial,sans-serif; max-width:500px; margin:0 auto;'>
                    <h2 style='color:#667eea;'>Réinitialisation du mot de passe</h2>
                    <p>Votre code de vérification est :</p>
                    <div style='font-size:36px; font-weight:bold; letter-spacing:10px;
                                color:#667eea; text-align:center; padding:20px;
                                background:#f0f0ff; border-radius:8px; margin:20px 0;'>
                        $code
                    </div>
                    <p style='color:#999; font-size:12px;'>
                        Ce code expire dans 10 minutes.<br>
                        Si vous n'avez pas fait cette demande, ignorez cet email.
                    </p>
                </div>
            ");

        try {
            $mailer->send($emailMessage);
        } catch (\Exception $e) {
            return $this->json(['status' => 'ERROR', 'message' => "Erreur lors de l'envoi de l'email"], 500);
        }

        return $this->json(['status' => 'OK']);
    }

    // ── Étape 2 : vérifier le code ────────────────────────────────────
    #[Route('/forgot-password/verify-code', name: 'forgot_password_verify_code', methods: ['POST'])]
    public function verifyCode(Request $request): JsonResponse
    {
        // FIX :80/:81 — cast to string before trim
        $email = trim((string) $request->request->get('email', ''));
        $code  = trim((string) $request->request->get('code',  ''));

        $sessionCode  = $request->getSession()->get('forgot_password_code');
        $sessionEmail = $request->getSession()->get('forgot_password_email');
        $sessionTime  = $request->getSession()->get('forgot_password_time');

        if (!$sessionTime || (time() - (int) $sessionTime) > 600) {
            return $this->json(['status' => 'ERROR', 'message' => 'Code expiré. Veuillez recommencer.'], 400);
        }

        if ($sessionEmail !== $email || $sessionCode !== $code) {
            return $this->json(['status' => 'ERROR', 'message' => 'Code incorrect'], 400);
        }

        $token = bin2hex(random_bytes(32));
        $request->getSession()->set('forgot_password_verified', true);
        $request->getSession()->set('forgot_password_token',    $token);

        return $this->json(['status' => 'OK', 'token' => $token]);
    }

    // ── Étape 3 : réinitialiser le mot de passe ───────────────────────
    #[Route('/forgot-password/reset', name: 'forgot_password_reset', methods: ['POST'])]
    public function reset(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $hasher
    ): JsonResponse {
        // FIX :111/:112/:130/:140 — cast to string before trim/strlen/hashPassword
        $email    = trim((string) $request->request->get('email',    ''));
        $token    = trim((string) $request->request->get('token',    ''));
        $password = (string) $request->request->get('password', '');

        $sessionEmail    = $request->getSession()->get('forgot_password_email');
        $sessionToken    = $request->getSession()->get('forgot_password_token');
        $sessionVerified = $request->getSession()->get('forgot_password_verified');
        $sessionTime     = $request->getSession()->get('forgot_password_time');

        if (!$sessionVerified) {
            return $this->json(['status' => 'ERROR', 'message' => 'Session invalide'], 400);
        }
        if ($sessionEmail !== $email || $sessionToken !== $token) {
            return $this->json(['status' => 'ERROR', 'message' => 'Token invalide'], 400);
        }
        if (!$sessionTime || (time() - (int) $sessionTime) > 600) {
            return $this->json(['status' => 'ERROR', 'message' => 'Session expirée'], 400);
        }
        if (strlen($password) < 6) {
            return $this->json(['status' => 'ERROR', 'message' => 'Mot de passe trop court (min 6 caractères)'], 400);
        }

        $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);
        if (!$user) {
            return $this->json(['status' => 'ERROR', 'message' => 'Utilisateur introuvable'], 404);
        }

        $hashed = $hasher->hashPassword($user, $password);
        $user->setPassword($hashed);
        $em->flush();

        $request->getSession()->remove('forgot_password_code');
        $request->getSession()->remove('forgot_password_email');
        $request->getSession()->remove('forgot_password_time');
        $request->getSession()->remove('forgot_password_token');
        $request->getSession()->remove('forgot_password_verified');

        return $this->json(['status' => 'OK']);
    }
}