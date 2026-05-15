<?php

namespace App\Controller;
use App\Repository\ReclamationWhatsAppSessionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/whatsapp-sessions')]
class AdminWhatsAppSessionController extends AbstractController
{
    #[Route('', name: 'admin_whatsapp_sessions', methods: ['GET'])]
    public function index(
        Request $request,
        ReclamationWhatsAppSessionRepository $repo
    ): Response {
        $filter      = $request->query->get('filter', 'all');
        $search      = $request->query->get('search', '');
        $currentPage = max(1, (int) $request->query->get('page', 1));
        $perPage     = 10;

        // ── Requête filtrée ───────────────────────────────────────────────
        $qb = $repo->createQueryBuilder('s');

        if ($filter === 'active') {
            $qb->andWhere('s.isActive = true');
        } elseif ($filter === 'termine') {
            $qb->andWhere('s.isActive = false')->andWhere("s.step = 'termine'");
        } elseif ($filter === 'annule') {
            $qb->andWhere('s.isActive = false')->andWhere("s.step = 'annule'");
        }
if ($search) {

    if (is_numeric($search)) {
        // 🔥 recherche par ID
        $qb->andWhere('s.id = :id')
           ->setParameter('id', $search);
    } else {
        // 🔥 recherche par téléphone
        $qb->andWhere('s.phone LIKE :phone')
           ->setParameter('phone', "%$search%");
    }
}

        $total = (clone $qb)->select('COUNT(s.id)')->getQuery()->getSingleScalarResult();
$pages = max(1, (int) ceil((int) $total / $perPage));
        $sessions = $qb
            ->orderBy('s.createdAt', 'DESC')
            ->setFirstResult(($currentPage - 1) * $perPage)
            ->setMaxResults($perPage)
            ->getQuery()
            ->getResult();

        // ── Stats globales ────────────────────────────────────────────────
        $all      = $repo->findAll();
        $avgTurns = count($all) > 0
            ? round(array_sum(array_map(fn($s) => $s->getTurn(), $all)) / count($all), 1)
            : 0;

        $stats = [
            'total'     => count($all),
            'active'    => count(array_filter($all, fn($s) => $s->getIsActive())),
            'termine'   => count(array_filter($all, fn($s) => !$s->getIsActive() && $s->getStep() === 'termine')),
            'annule'    => count(array_filter($all, fn($s) => !$s->getIsActive() && $s->getStep() === 'annule')),
            'coherent'  => count(array_filter($all, fn($s) => $s->getCoherent() === true)),
            'avg_turns' => $avgTurns,
        ];

        // ── JSON pour le modal JS ─────────────────────────────────────────
        $sessionsJson = [];
        foreach ($sessions as $s) {
            $sessionsJson[$s->getId()] = [
                'phone'           => $s->getPhone(),
                'reclamationId'   => $s->getReclamationId(),
                'step'            => $s->getStep(),
                'turn'            => $s->getTurn(),
                'coherent'        => $s->getCoherent(),
                'reason'          => $s->getReason(),
                'analysisSummary' => $s->getAnalysisSummary(),
                'collectedData'   => $s->getCollectedData(),
                'createdAt'       => $s->getCreatedAt()->format('d/m/Y H:i'),
            ];
        }

        return $this->render('admin/whatsapp_sessions/index.html.twig', [
            'sessions'     => $sessions,
            'sessionsJson' => json_encode($sessionsJson),
            'stats'        => $stats,
            'filter'       => $filter,
            'search'       => $search,
            'currentPage'  => $currentPage,
            'pages'        => $pages,
            'total'        => $total,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_whatsapp_session_delete', methods: ['POST'])]
    public function delete(
        int $id,
        ReclamationWhatsAppSessionRepository $repo,
        EntityManagerInterface $em
    ): JsonResponse {
        $session = $repo->find($id);
        if (!$session) {
            return $this->json(['success' => false, 'message' => 'Session introuvable'], 404);
        }

        $em->remove($session);
        $em->flush();

        return $this->json(['success' => true]);
    }
}