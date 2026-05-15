<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Reservation;
use App\Entity\Excursion;
use App\Service\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaiementController extends AbstractController
{
    #[Route('/paiement/checkout/{id}', name: 'app_paiement_checkout')]
    public function checkout(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $reservation = $em->getRepository(Reservation::class)->find($id);

        if (!$reservation) {
            throw $this->createNotFoundException('Réservation introuvable');
        }

        if ($reservation->getStatut() === 'CONFIRMEE') {
            if ($reservation->getIdExcursion()) {
                return $this->redirectToRoute('excursion_detail', ['id' => $reservation->getIdExcursion()]);
            }
            if ($reservation->getIdTransport()) {
                return $this->redirectToRoute('transport_detail', ['id' => $reservation->getIdTransport()]);
            }
        }

        if ($reservation->getStatut() !== 'EN_ATTENTE') {
            throw new \Exception('Paiement invalide');
        }

        $total  = $reservation->getMontantTotal();
        // FIX :52 — getMontantTotal() returns ?int; if null, amount would be 0 which is always > 0 check fails
        $amount = (int) round((int) $total * 100);

        if ($amount <= 0) {
            throw new \Exception('Montant invalide');
        }

        // FIX :56 — getParameter() returns mixed; cast to string
$stripeKey = $this->getParameter('stripe_secret_key');
if (!is_string($stripeKey)) {
    throw new \RuntimeException('stripe_secret_key must be a string');
}
\Stripe\Stripe::setApiKey($stripeKey);
        // FIX :58 — metadata values must be string, not int|null
        $session = \Stripe\Checkout\Session::create([
            'mode'       => 'payment',
            'line_items' => [[
                'price_data' => [
                    'currency'     => 'eur',
                    'product_data' => [
                        'name' => 'Excursion #' . $reservation->getIdReservation(),
                    ],
                    'unit_amount'  => $amount,
                ],
                'quantity' => 1,
            ]],
            'metadata'    => [
                'reservation_id' => (string) $reservation->getIdReservation(),
            ],
            'success_url' => 'http://127.0.0.1:8000/paiement/success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url'  => 'http://127.0.0.1:8000/paiement/cancel',
        ]);

        // FIX :81 — $session->url is string|null; assert non-null before redirect
        if (!$session->url) {
            throw new \Exception('URL Stripe introuvable');
        }

        return $this->redirect($session->url, 303);
    }

    #[Route('/paiement/success', name: 'app_paiement_success')]
    public function success(Request $request, EntityManagerInterface $em, EmailService $emailService): Response
    {
        $sessionId = $request->query->get('session_id');

        if (!$sessionId) {
            return new Response('Session invalide');
        }

        // FIX :92 — cast getParameter() to string
$stripeKey = $this->getParameter('stripe_secret_key');
if (!is_string($stripeKey)) {
    throw new \RuntimeException('stripe_secret_key must be a string');
}
\Stripe\Stripe::setApiKey($stripeKey);

        $session = \Stripe\Checkout\Session::retrieve((string) $sessionId);

        if ($session->payment_status !== 'paid') {
            return new Response('Paiement non confirmé');
        }

        $reservationId = $session->metadata->reservation_id ?? null;

        if (!$reservationId) {
            return new Response('ID réservation introuvable');
        }

        $reservation = $em->getRepository(Reservation::class)->find($reservationId);

        if (!$reservation) {
            return new Response('Réservation introuvable');
        }

        $reservation->setStatut('CONFIRMEE');

        // FIX :121/:128 — find() returns ?Excursion; guard null before calling methods
        $excursion = $em->getRepository(Excursion::class)->find($reservation->getIdExcursion());

        if ($excursion !== null) {
            $totalParticipants = $reservation->getNbAdultes()
                + $reservation->getNbEnfants()
                + $reservation->getNbBebes();

            $placesRestantes = $excursion->getNombrePlacesDisponibles() - $totalParticipants;

            if ($placesRestantes < 0) {
                return new Response('Plus de places disponibles');
            }

            $excursion->setNombrePlacesDisponibles($placesRestantes);
        }

        $em->flush();

        $user = $this->getUser();

        if (!$user instanceof \App\Entity\User) {
            return new Response('Utilisateur non connecté');
        }

        $data = [
            'reservation' => $reservation,
            'excursion'   => $excursion,
            'user'        => $user,
        ];

        // FIX :148 — getEmail() returns ?string; cast to string
        $emailService->envoyerFacture($data, (string) $user->getEmail());

        return $this->redirectToRoute('app_mes_reservations');
    }

    #[Route('/reservation/show/{id}', name: 'reservation_show')]
    public function show(int $id, EntityManagerInterface $em): Response
    {
        $reservation = $em->getRepository(Reservation::class)->find($id);

        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/paiement/cancel', name: 'app_paiement_cancel')]
    public function cancel(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return new Response('Utilisateur non connecté');
        }

        $reservation = $em->getRepository(Reservation::class)
            ->createQueryBuilder('r')
            ->where('r.user = :user')
            ->andWhere('r.statut = :statut')
            ->setParameter('user', $user)
            ->setParameter('statut', 'EN_ATTENTE')
            ->orderBy('r.idReservation', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        if (!$reservation) {
            return new Response('Aucune réservation à annuler');
        }

        $reservation->setStatut('ANNULEE');
        $em->flush();

        return new Response('Paiement annulé ❌');
    }
}