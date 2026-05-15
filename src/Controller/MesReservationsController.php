<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\ReservationRepository;
use App\Repository\HebergementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('IS_AUTHENTICATED_FULLY')]
class MesReservationsController extends AbstractController
{
    // 🧭 LOISIRS
    #[Route('/mes-reservations', name: 'app_mes_reservations')]
    public function index(ReservationRepository $reservationRepository): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        // 🔥 TOUS les types SAUF hébergement et transport = loisirs
        $reservations = $reservationRepository->findBy(
            ['idUser' => $user->getId()], 
            ['dateReservation' => 'DESC']
        );

        // Filtre manuellement pour ne garder que les excursions
        $reservations = array_filter($reservations, fn($r) => $r->getTypeReservation() === 'EXCURSION');

        return $this->render('mes_reservations.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    // 🎫 TRAJETS
    #[Route('/mes-trajets', name: 'app_mes_reservations_transports')]
    public function transports(ReservationRepository $reservationRepository): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        $reservations = $reservationRepository->findBy(
            ['idUser' => $user->getId()], 
            ['dateReservation' => 'DESC']
        );
        
        $reservations = array_filter($reservations, fn($r) => $r->getTypeReservation() === 'TRANSPORT');

        return $this->render('reservations_transports.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    // 🏨 HÉBERGEMENTS
    #[Route('/mes-hebergements', name: 'app_mes_reservations_hebergements')]
    public function hebergements(ReservationRepository $reservationRepository, HebergementRepository $hebergementRepository): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        $reservations = $reservationRepository->findBy(
            ['idUser' => $user->getId()], 
            ['dateReservation' => 'DESC']
        );
        
        $reservations = array_filter($reservations, fn($r) => $r->getTypeReservation() === 'HEBERGEMENT');

        $reservationsWithDetails = [];
        foreach ($reservations as $r) {
            $hebergement = null;
            if ($r->getIdHebergement()) {
                $hebergement = $hebergementRepository->find($r->getIdHebergement());
            }

            $dateReservation = $r->getDateReservation();
            $dateArrivee = $r->getDateArrivee();
            $dateDepart = $r->getDateDepart();

            $reservationsWithDetails[] = [
                'id' => $r->getIdReservation(),
                'date' => $dateReservation->format('d/m/Y H:i'),
                'montant' => $r->getMontantTotal(),
                'statut' => $r->getStatut(),
                'dateArrivee' => $dateArrivee ? $dateArrivee->format('d/m/Y') : null,
                'dateDepart' => $dateDepart ? $dateDepart->format('d/m/Y') : null,
                'hebergement' => $hebergement ? [
                    'id' => $hebergement->getIdHebergement(),
                    'nom' => $hebergement->getNom(),
                    'image' => $hebergement->getImagePath(),
                    'localisation' => $hebergement->getLocalisation(),
                ] : null,
            ];
        }

        $stats = [
            'total' => count($reservations),
            'confirmees' => count(array_filter($reservations, fn($r) => $r->getStatut() === 'CONFIRMEE')),
            'enAttente' => count(array_filter($reservations, fn($r) => $r->getStatut() === 'EN_ATTENTE')),
            'annulees' => count(array_filter($reservations, fn($r) => $r->getStatut() === 'ANNULEE')),
        ];

        return $this->render('reservation/mes_reservations.html.twig', [
            'reservations' => $reservationsWithDetails,
            'stats' => $stats,
        ]);
    }
}