<?php

namespace App\Controller;

use App\Entity\Excursion;
use App\Entity\Reservation;
use App\Entity\User;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PdfService;

class FactureController extends AbstractController
{
    public function __construct(private Pdf $pdf) {}

    #[Route('/facture/{id}/pdf', name: 'facture_pdf')]
    public function telecharger(int $id, EntityManagerInterface $em): Response
    {
        $reservation = $em->getRepository(Reservation::class)->find($id);

        if (!$reservation) {
            throw $this->createNotFoundException('Réservation introuvable');
        }

        $currentUser = $this->getUser();

        if (!$currentUser instanceof User) {
            throw $this->createAccessDeniedException('Utilisateur non connecté');
        }

        if ($reservation->getIdUser() !== $currentUser->getId()) {
            throw $this->createAccessDeniedException('Accès refusé');
        }

        $excursion = $em->getRepository(Excursion::class)
            ->find($reservation->getIdExcursion());

        if (!$excursion) {
            throw $this->createNotFoundException('Excursion introuvable');
        }

        // FIX :49 — is_string() guard on getParameter()
        $projectDir = $this->getParameter('kernel.project_dir');
        if (!is_string($projectDir)) {
            throw new \RuntimeException('kernel.project_dir must be a string');
        }

        // FIX :50 — file_get_contents() can return false; guard before base64_encode()
        $logoPath    = $projectDir . '/public/images/logo.png';
        $logoContent = file_get_contents($logoPath);
        if ($logoContent === false) {
            throw new \RuntimeException('Logo introuvable : ' . $logoPath);
        }
        $logoBase64 = base64_encode($logoContent);

        $html = $this->renderView('pdf/facture.html.twig', [
            'reservation' => $reservation,
            'excursion'   => $excursion,
            'user'        => $this->getUser(),
            'logo'        => $logoBase64,
        ]);

        $options = [
            'enable-local-file-access' => true,
            'encoding'                 => 'utf-8',
            'no-stop-slow-scripts'     => true,
            'javascript-delay'         => 500,
        ];

        $pdfContent = $this->pdf->getOutputFromHtml($html, $options);

        return new Response(
            $pdfContent,
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' =>
                    'attachment; filename="facture-' . $reservation->getIdReservation() . '.pdf"',
            ]
        );
    }
}