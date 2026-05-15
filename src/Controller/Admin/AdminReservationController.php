<?php

namespace App\Controller\Admin;

use App\Entity\Reservation;
use App\Repository\ReservationRepository;
use App\Repository\HebergementRepository; // 🔴 AJOUT TRÈS IMPORTANT ICI
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/hebergement/reservations')]
class AdminReservationController extends AbstractController
{
    #[Route('', name: 'admin_hebergement_reservations')]
    public function index(
        ReservationRepository $reservationRepository, 
        HebergementRepository $hebergementRepository // 🔴 On injecte le repository ici
    ): Response {
        // 1. On récupère TOUTES les réservations liées aux hébergements, SANS JOINTURE
        $reservations = $reservationRepository->findBy(
            ['typeReservation' => 'HEBERGEMENT'], 
            ['idReservation' => 'DESC'] // Triées par les plus récentes
        );

        // 2. On récupère manuellement les hébergements correspondants
        $hebergements = [];
        foreach ($reservations as $res) {
            if ($res->getIdHebergement()) {
                // On stocke l'hébergement avec l'ID de la réservation comme clé
                $hebergements[$res->getIdReservation()] = $hebergementRepository->find($res->getIdHebergement());
            }
        }

        return $this->render('admin/reservations/index.html.twig', [
            'reservations' => $reservations,
            'hebergements' => $hebergements, // 🔴 On envoie ce tableau à Twig
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(
        Reservation $reservation,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        if ($request->isMethod('POST')) {
            $statut = $request->request->get('statut');
            if (is_string($statut)) {
                $reservation->setStatut($statut);
            }
            $reservation->setNbAdultes((int)($request->request->get('nbAdultes') ?? $reservation->getNbAdultes()));
            $reservation->setNbEnfants((int)($request->request->get('nbEnfants') ?? $reservation->getNbEnfants()));
            $reservation->setNbBebes((int)($request->request->get('nbBebes') ?? $reservation->getNbBebes()));

            $em->flush();
            $this->addFlash('success', 'Réservation modifiée avec succès!');

            return $this->redirectToRoute('admin_hebergement_reservations');
        }

        return $this->render('admin/reservations/edit.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_reservation_delete', methods: ['POST'])]
    public function delete(
        Reservation $reservation,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $token = $request->request->get('_token');
        $token = is_string($token) ? $token : null;
        if ($this->isCsrfTokenValid('delete' . $reservation->getIdReservation(), $token)) {
            $em->remove($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation supprimée avec succès!');
        }

        return $this->redirectToRoute('admin_hebergement_reservations');
    }
}