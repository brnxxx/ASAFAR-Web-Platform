<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

class EmailService
{
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

        /** @param array<string, mixed> $data */

    public function envoyerFacture(array $data, string $destinataire): void
    {
        $email = (new TemplatedEmail())
            ->from('no-reply@fixdrive.tn')
            ->to($destinataire)
            ->subject('Confirmation de paiement - Réservation #' . $data['reservation']->getIdReservation())
            ->htmlTemplate('emails/facture_mail.html.twig')
            ->context($data);

        try {
            $this->mailer->send($email);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}