<?php

namespace App\Controller;

use App\Service\PrixIntelligentService;
use App\Entity\Reservation;
use App\Entity\Hebergement;
use App\Form\ReservationType;
use App\Entity\User;
use App\Repository\ExcursionRepository;
use App\Repository\HebergementRepository;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class ReservationController extends AbstractController
{
    #[Route('/reservation/{idExcursion}', name: 'app_reserver_excursion', methods: ['POST'])]
    public function reserver(
        int $idExcursion,
        Request $request,
        EntityManagerInterface $em,
        ExcursionRepository $excursionRepository,
        PrixIntelligentService $prixService
    ): Response {
        $promoCode = trim(strtoupper((string) $request->request->get('promo_code', '')));
        $discount = match($promoCode) {
            'BRONZE10' => 10, 'SILVER15' => 15, 'GOLD20' => 20,
            default => 0,
        };

        $user = $this->getUser();
        if (!$user instanceof User) return $this->redirectToRoute('app_login');

        $excursion = $excursionRepository->find($idExcursion);
        if (!$excursion) throw $this->createNotFoundException('Excursion introuvable');

        if (!$this->isCsrfTokenValid('reservation', (string) $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token invalide');
        }

        $nbAdultes = max(0, (int) $request->request->get('nb_adultes', 0));
        $nbEnfants = max(0, (int) $request->request->get('nb_enfants', 0));
        $nbBebes = max(0, (int) $request->request->get('nb_bebes', 0));

        $existing = $em->getRepository(Reservation::class)->createQueryBuilder('r')
            ->where('r.idUser = :user')->andWhere('r.idExcursion = :excursion')
            ->andWhere('r.statut = :statut')
            ->setParameter('user', $user->getId())
            ->setParameter('excursion', $excursion->getIdExcursion())
            ->setParameter('statut', 'EN_ATTENTE')
            ->orderBy('r.idReservation', 'DESC')->setMaxResults(1)
            ->getQuery()->getOneOrNullResult();

        $resultatPrix = $prixService->calculerPrix($excursion, $nbAdultes, $nbEnfants, $nbBebes);
        $total = $resultatPrix['total'];
        if ($discount > 0) $total = round($total * (1 - $discount / 100), 2);
        if ($total <= 0) {
            $this->addFlash('error', 'Montant invalide');
            return $this->redirectToRoute('excursion_detail', ['id' => $excursion->getIdExcursion()]);
        }

        if ($existing) {
            $existing->setMontantTotal((int) $total);
            $existing->setNbAdultes($nbAdultes);
            $existing->setNbEnfants($nbEnfants);
            $existing->setNbBebes($nbBebes);
            $em->flush();
            return $this->redirectToRoute('app_paiement_checkout', ['id' => $existing->getIdReservation()]);
        }

        $userId = $user->getId();
        if ($userId === null) {
            return $this->redirectToRoute('app_login');
        }

        $reservation = new Reservation();
        $reservation->setIdExcursion($excursion->getIdExcursion());
        $reservation->setIdUser($userId);
        $reservation->setDateReservation(new \DateTime());
        $reservation->setStatut('EN_ATTENTE');
        $reservation->setTypeReservation('EXCURSION');
        $reservation->setNbAdultes($nbAdultes);
        $reservation->setNbEnfants($nbEnfants);
        $reservation->setNbBebes($nbBebes);
        $reservation->setMontantTotal((int) $total);
        $em->persist($reservation);
        $em->flush();

        return $this->redirectToRoute('app_paiement_checkout', ['id' => $reservation->getIdReservation()]);
    }

    #[Route('/prix-intelligent', name: 'prix_intelligent', methods: ['POST'])]
    public function prixIntelligent(Request $request, ExcursionRepository $repo, PrixIntelligentService $service): JsonResponse
    {
        $excursion = $repo->find($request->request->get('id'));
        if (!$excursion) return $this->json(['error' => 'Excursion introuvable']);
        $result = $service->calculerPrix($excursion,
            (int)$request->request->get('adultes'),
            (int)$request->request->get('enfants'),
            (int)$request->request->get('bebes')
        );
        return $this->json($result);
    }

    #[Route('/create/{id}', name: 'app_reservation_create')]
    public function create(Hebergement $hebergement, Request $request, HebergementRepository $hebergementRepository, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if (!$this->isHebergementReservable($hebergement)) {
            $this->addFlash('error', 'Cet hébergement est actuellement indisponible.');
            return $this->redirectToRoute('app_hebergement_detail', ['id' => $hebergement->getIdHebergement()]);
        }

        $user = $this->getUser();
        if (!$user instanceof User) return $this->redirectToRoute('app_login');

        $userId = $user->getId();
        if ($userId === null) {
            return $this->redirectToRoute('app_login');
        }

        $reservation = new Reservation();
        $reservation->setDateReservation(new \DateTime());
        $reservation->setTypeReservation('HEBERGEMENT');
        $reservation->setIdUser($userId);
        $reservation->setStatut('EN_ATTENTE');
        $reservation->setIdHebergement($hebergement->getIdHebergement());
        $reservation->setHebergement($hebergement);

        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fresh = $hebergementRepository->find($hebergement->getIdHebergement());
            if (!$this->isHebergementReservable($fresh)) {
                $this->addFlash('error', 'Désolé, cet hébergement vient de passer indisponible.');
                return $this->redirectToRoute('app_hebergement_detail', ['id' => $hebergement->getIdHebergement()]);
            }
            $dateArrivee = $reservation->getDateArrivee();
            $dateDepart  = $reservation->getDateDepart();
            if ($dateArrivee && $dateDepart && $dateArrivee < $dateDepart) {
                $nbNuits     = (int) $dateDepart->diff($dateArrivee)->days;
                $prixParNuit = (float) ($hebergement->getPrixParNuit() ?? 0);
                $nbAdultes = $reservation->getNbAdultes();
$nbEnfants = $reservation->getNbEnfants();
$nbBebes   = $reservation->getNbBebes();

$nbPersonnes = $nbAdultes + $nbEnfants + $nbBebes;
$montantTotal = (int) ($prixParNuit * $nbNuits);

$reservation->setMontantTotal($montantTotal);
$reservation->setNbPersonnes($nbPersonnes);
$reservation->setNbAdultes($nbAdultes);
$reservation->setNbEnfants($nbEnfants);
$reservation->setNbBebes($nbBebes);
                $em->persist($reservation);
                $em->flush();
                $this->addFlash('success', 'Réservation créée avec succès !');
                return $this->redirectToRoute('app_reservation_confirmation', ['id' => $reservation->getIdReservation()]);
            } else {
                $this->addFlash('error', 'Les dates ne sont pas valides.');
            }
        }
        return $this->render('reservation/create.html.twig', [
            'form' => $form, 'hebergement' => $hebergement, 'title' => 'Réserver : ' . $hebergement->getNom(),
        ]);
    }

    #[Route('/reservation/{id}/confirmation', name: 'app_reservation_confirmation')]
    public function confirmation(int $id, ReservationRepository $reservationRepo, HebergementRepository $hebergementRepo): Response
    {
        $reservation = $reservationRepo->find($id);
        if (!$reservation) throw $this->createNotFoundException('Réservation non trouvée.');

        $user = $this->getUser();
        if (!$user instanceof User || $reservation->getIdUser() !== $user->getId()) {
            throw $this->createAccessDeniedException('Accès non autorisé.');
        }

        $hebergement = null;
        $idHeb = $reservation->getIdHebergement();
        if ($idHeb !== null) {
            $hebergement = $hebergementRepo->find($idHeb);
        }

        return $this->render('reservation/confirmation.html.twig', [
            'reservation' => $reservation, 'hebergement' => $hebergement,
        ]);
    }

    #[Route('/reservation/{id}/cancel', name: 'app_reservation_cancel', methods: ['POST'])]
    public function cancel(Reservation $reservation, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        if (!$user instanceof User) throw $this->createAccessDeniedException('Non autorisé.');
        if ($reservation->getIdUser() !== $user->getId() && !in_array('ROLE_ADMIN', $user->getRoles())) {
            throw $this->createAccessDeniedException('Non autorisé.');
        }
        $reservation->setStatut('ANNULEE');
        $em->flush();
        $this->addFlash('warning', 'Réservation annulée.');
        return $this->redirectToRoute('app_mes_reservations');
    }

    #[Route('/admin/reservation/{id}/confirm', name: 'app_reservation_confirm', methods: ['POST'])]
    public function confirm(Reservation $reservation, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $reservation->setStatut('CONFIRMEE');
        $em->flush();
        $this->addFlash('success', 'Réservation confirmée.');
        return $this->redirectToRoute('admin_reservation_index');
    }

    private function isHebergementReservable(?Hebergement $hebergement): bool
    {
        return $hebergement !== null && strtoupper((string) $hebergement->getDisponibilite()) === 'DISPONIBLE';
    }
}