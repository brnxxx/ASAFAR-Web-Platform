<?php

namespace App\Controller;

use App\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/reservations')]
class AdminReservationController extends AbstractController
{
    #[Route('/', name: 'admin_reservation_index')]
    public function index(EntityManagerInterface $em, Request $request): Response
    {
        $repo = $em->getRepository(Reservation::class);

        $search = trim((string) $request->query->get('search', ''));

        $rawStatut = $request->query->get('statut');
        $statut    = is_string($rawStatut) ? $rawStatut : null;

        $rawSort = (string) $request->query->get('sort', 'date');
        $sort = $rawSort;

        $qb = $repo->createQueryBuilder('r');

        if ($search) {
            $qb->andWhere('r.idUser LIKE :q OR r.idExcursion LIKE :q')
               ->setParameter('q', '%' . $search . '%');
        }

        if ($statut) {
            $qb->andWhere('r.statut = :statut')
               ->setParameter('statut', $statut);
        }

        if ($sort === 'prix') {
            $qb->orderBy('r.montantTotal', 'DESC');
        } else {
            $qb->orderBy('r.dateReservation', 'DESC');
        }

        $reservations = $qb->getQuery()->getResult();

        $userRepo = $em->getRepository(\App\Entity\User::class);
        $excRepo  = $em->getRepository(\App\Entity\Excursion::class);

        $data = [];

        foreach ($reservations as $r) {
            $user = null;
            $exc  = null;

            if ($r->getIdUser() !== null) {
                $user = $userRepo->find($r->getIdUser());
            }

            if ($r->getIdExcursion() !== null) {
                $exc = $excRepo->find($r->getIdExcursion());
            }

            $data[] = [
                'reservation' => $r,
                'user'        => $user,
                'excursion'   => $exc,
            ];
        }

        $stats = [
            'total'     => $repo->count([]),
            'confirmed' => $repo->count(['statut' => 'CONFIRMEE']),
            'pending'   => $repo->count(['statut' => 'EN_ATTENTE']),
        ];

        return $this->render('admin/reservation/index.html.twig', [
            'data'          => $data,
            'stats'         => $stats,
            'search'        => $search,
            'currentStatus' => $statut,
            'sort'          => $sort,
        ]);
    }
}