<?php

namespace App\Controller\Admin;

use App\Repository\ReservationRepository;
use App\Repository\TransportRepository;
use App\Repository\UserRepository; // Assurez-vous d'avoir ce repository
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

// #[IsGranted('ROLE_ADMIN')] // Décommentez pour sécuriser l'accès aux administrateurs
#[Route('/admin/transports/reservations')]
class AdminTransportReservationController extends AbstractController
{
    #[Route('/', name: 'admin_transport_reservation_index', methods: ['GET'])]
    public function index(
        Request $request,
        ReservationRepository $reservationRepository,
        TransportRepository $transportRepository,
        UserRepository $userRepository
    ): Response {
        // 1. Récupération des paramètres de l'URL (Filtres et Tri)
        $statutFiltre = $request->query->get('statut');
        $sort = $request->query->get('sort', 'date'); // 'date' par défaut
        $search = $request->query->get('search');

        // 2. Récupération de TOUTES les réservations (pour filtrer côté PHP)
        $allReservations = $reservationRepository->findAll();

        $data = [];
        $stats = [
            'total' => 0,
            'confirmed' => 0,
            'pending' => 0
        ];

        // 3. Construction des données et calcul des statistiques globales
        foreach ($allReservations as $res) {
            $idTransport = $res->getIdTransport();
            if (!$idTransport) continue;

            $transport = $transportRepository->find($idTransport);

            // On ne garde QUE les réservations liées à un Avion ou une Voiture
            if (!$transport || !in_array($transport->getType(), ['AVION', 'VOITURE'])) {
                continue;
            }

            $statutReservation = strtoupper($res->getStatut());

            // Calcul des statistiques globales (indépendant des filtres actifs)
            $stats['total']++;
            if ($statutReservation === 'CONFIRMEE') {
                $stats['confirmed']++;
            } elseif (in_array($statutReservation, ['EN_ATTENTE', 'PENDING'])) {
                $stats['pending']++;
            }

            // Application du filtre de statut (si l'admin a cliqué sur un bouton de filtre)
            if ($statutFiltre && $statutReservation !== strtoupper($statutFiltre)) {
                continue; // On ignore cette ligne pour l'affichage
            }

            // Récupération de l'utilisateur
            $user = null;
            $idUser = $res->getIdUser();
            if ($idUser) {
                $user = $userRepository->find($idUser);
            }

            // Ajout à la liste des données pour la vue Twig
            $data[] = [
                'reservation' => $res,
                'transport' => $transport,
                'user' => $user
            ];
        }

        // 4. Logique de Tri personnalisé (Date, Prix, Type)
        usort($data, function ($a, $b) use ($sort) {
            $resA = $a['reservation'];
            $resB = $b['reservation'];

            if ($sort === 'prix') {
                // Tri par prix décroissant (du plus cher au moins cher)
                $prixA = $resA->getPrixTotal();
                $prixB = $resB->getPrixTotal();
                return $prixB <=> $prixA;
            }
            elseif ($sort === 'type') {
                // Tri par ordre alphabétique (AVION avant VOITURE)
                $typeA = (string) $a['transport']->getType();
                $typeB = (string) $b['transport']->getType();
                return strcmp($typeA, $typeB);
            }
            else {
                // Tri par défaut : Date de départ décroissante (le plus récent en premier)
                $dateA = $resA->getDateDepart() ? $resA->getDateDepart()->getTimestamp() : 0;
                $dateB = $resB->getDateDepart() ? $resB->getDateDepart()->getTimestamp() : 0;
                return $dateB <=> $dateA;
            }
        });

        // 5. Envoi des données formatées à la vue
        return $this->render('admin/reservationtransport/index.html.twig', [
            'data' => $data,
            'stats' => $stats,
            'currentStatus' => $statutFiltre,
            'search' => $search
        ]);
    }
}