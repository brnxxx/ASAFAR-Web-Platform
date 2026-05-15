<?php

namespace App\Controller;
use App\Entity\ReponseReclamation;
use App\Repository\ReclamationWhatsAppSessionRepository;
use App\Entity\Reclamation;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use App\Entity\Notification;
use Knp\Component\Pager\PaginatorInterface;
use App\Service\ExcelService;
#[Route('/admin/reclamations')]
class AdminReclamationController extends AbstractController
{
    public function __construct(
        private ReclamationRepository  $reclamationRepository,
        private EntityManagerInterface $entityManager
    ) {}

    // ── Export CSV ── DOIT être EN PREMIER avant /{id} ──────────────
    #[Route('/export', name: 'admin_reclamations_export', methods: ['GET'])]
public function export(ExcelService $excelService): Response
{
    $reclamations = $this->reclamationRepository->findBy([], ['dateReclamation' => 'DESC']);

    // 🔥 Transformer tes données
    $data = [];

    foreach ($reclamations as $r) {
        $data[] = [
            'id' => $r->getIdReclamation(),
            'sujet' => $r->getSujet(),
            'type' => $r->getTypeReclamation(),
            'statut' => $r->getStatut(),
            'priorite' => $r->getPriorite(),
'date' => $r->getDateReclamation()->format('Y-m-d'),
            'user' => $r->getIdUser(),
            'reponse' => $r->getReponseAdmin() ?? '',
        ];
    }

    // 🔥 Générer Excel
    $file = $excelService->generate($data);

return new Response((string) file_get_contents($file), 200, [
        'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'Content-Disposition' => 'attachment; filename="reclamations-' . date('Y-m-d') . '.xlsx"',
    ]);
}

#[Route('', name: 'admin_reclamations', methods: ['GET'])]
public function index(
    Request $request,
    ReclamationWhatsAppSessionRepository $sessionRepo,
    UserRepository $userRepo,
    PaginatorInterface $paginator
): Response {

    $page  = max(1, $request->query->getInt('page', 1));
    $limit = 1;

    $filter = $request->query->get('filter', 'all');
    $type   = $request->query->get('type',   'all');
    $search = $request->query->get('search', '');

    $qb = $this->reclamationRepository->createQueryBuilder('r')
        ->orderBy('r.dateReclamation', 'DESC');

    // 🔍 filtre statut
    if ($filter !== 'all') {
        $qb->andWhere('r.statut = :statut')
           ->setParameter('statut', strtoupper($filter));
    }

    // 🔍 filtre type
    if ($type !== 'all') {
        $qb->andWhere('r.typeReclamation = :type')
           ->setParameter('type', strtoupper($type));
    }

    // 🔍 recherche
    if (!empty($search)) {
        $qb->andWhere('r.sujet LIKE :search OR r.description LIKE :search')
           ->setParameter('search', '%' . $search . '%');
    }

    // 🔥 COUNT sécurisé (évite bugs Doctrine)
    $total = (clone $qb)
        ->select('COUNT(r.idReclamation)')
        ->resetDQLPart('orderBy')
        ->getQuery()
        ->getSingleScalarResult();

$totalPages = max(1, ceil((int) $total / $limit));

    $query = $qb->getQuery();
$query->setHint(\Doctrine\ORM\Query::HINT_FORCE_PARTIAL_LOAD, true);

$pagination = $paginator->paginate(
    $query,
    $page,
    $limit
);

    // 🔁 résultats paginés
    $reclamations = $pagination->getItems();

    // 🔥 OPTIMISATION : éviter erreurs si user null
    $userEmail = [];
    foreach ($reclamations as $rec) {
        $user = $userRepo->find($rec->getIdUser());
        $userEmail[$rec->getIdReclamation()] = $user?->getEmail() ?? '—';
    }

    // 🔥 session WhatsApp
foreach ($reclamations as $rec) {
$session = $sessionRepo->findOneBy(
    ['reclamation' => $rec],
    ['id' => 'DESC']
);

    $rec->setSession($session);
}

    // 📊 stats
    $stats = [
        'total'       => $this->reclamationRepository->count([]),
        'en_attente'  => $this->reclamationRepository->count(['statut' => 'EN_ATTENTE']),
        'traitee'     => $this->reclamationRepository->count(['statut' => 'TRAITEE']),
        'refusee'     => $this->reclamationRepository->count(['statut' => 'REFUSEE']),
        'transport'   => $this->reclamationRepository->count(['typeReclamation' => 'TRANSPORT']),
        'hebergement' => $this->reclamationRepository->count(['typeReclamation' => 'HEBERGEMENT']),
        'loisir'      => $this->reclamationRepository->count(['typeReclamation' => 'LOISIR']),
    ];

    return $this->render('admin/reclamations/index.html.twig', [
        'reclamations' => $reclamations,
        'pagination'   => $pagination, // 🔥 essentiel pour Twig
        'stats'        => $stats,
        'currentPage'  => $page,
        'pages'        => $totalPages,
        'total'        => $total,
        'filter'       => $filter,
        'type'         => $type,
        'search'       => $search,
        'userEmail'    => $userEmail,
    ]);
}
    // ── Changer le statut (AJAX) ─────────────────────────────────────
    #[Route('/{id}/statut', name: 'admin_reclamation_statut', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function changeStatut(int $id, Request $request): JsonResponse
    {
        $reclamation = $this->reclamationRepository->find($id);
        if (!$reclamation) {
            return $this->json(['success' => false, 'message' => 'Réclamation introuvable'], 404);
        }

        $data   = json_decode($request->getContent(), true);
        $statut = strtoupper($data['statut'] ?? '');

        if (!in_array($statut, ['EN_ATTENTE', 'TRAITEE', 'REFUSEE'])) {
            return $this->json(['success' => false, 'message' => 'Statut invalide'], 400);
        }

        $reclamation->setStatut($statut);
        $this->entityManager->flush();

        return $this->json(['success' => true, 'statut' => $statut]);
    }
#[Route('/{id}/repondre', name: 'admin_reclamation_repondre', methods: ['POST'], requirements: ['id' => '\d+'])]
public function repondre(int $id, Request $request): JsonResponse
{
    $reclamation = $this->reclamationRepository->find($id);
    if (!$reclamation) {
        return $this->json(['success' => false, 'message' => 'Réclamation introuvable'], 404);
    }

    $data    = json_decode($request->getContent(), true);
    $reponse = trim($data['reponse'] ?? '');

    if (!$reponse || strlen($reponse) < 5) {
        return $this->json(['success' => false, 'message' => 'La réponse est trop courte'], 400);
    }

$reclamation->setReponseAdmin($reponse);
$reclamation->setStatut('TRAITEE');

$notification = new Notification();
$notification->setUserId($reclamation->getIdUser());
$notification->setReclamationId($reclamation->getIdReclamation());
$notification->setMessage(
    "Votre réclamation '".$reclamation->getSujet()."' a été traitée."
);
$notification->setCreatedAt(new \DateTime());
$notification->setIsRead(false);

$this->entityManager->persist($notification);

$this->entityManager->flush();

    return $this->json(['success' => true]);
}

    // ── Supprimer (AJAX) ─────────────────────────────────────────────
    #[Route('/{id}/delete', name: 'admin_reclamation_delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(int $id): JsonResponse
    {
        $reclamation = $this->reclamationRepository->find($id);
        if (!$reclamation) {
            return $this->json(['success' => false, 'message' => 'Réclamation introuvable'], 404);
        }

        $this->entityManager->remove($reclamation);
        $this->entityManager->flush();

        return $this->json(['success' => true]);
    }

    // ── Voir une réclamation ── EN DERNIER car /{id} est générique ───
#[Route('/{id}', name: 'admin_reclamation_view', methods: ['GET'])]
public function view(
    int $id,
    ReclamationWhatsAppSessionRepository $sessionRepo
): Response {
    $rec = $this->reclamationRepository->find($id);
    if (!$rec) { 
        throw $this->createNotFoundException(); 
    }

$session = $sessionRepo->findOneBy(
    ['reclamation' => $rec],
    ['id' => 'DESC']
);

    // 🔥 AJOUT ICI (LE FIX)
    $data = json_decode($session?->getCollectedData() ?? '{}', true);
    $history = $data['history'] ?? [];

    return $this->render('admin/reclamations/view.html.twig', [
        'rec'     => $rec,
        'session' => $session,
        'history' => $history,
    ]);
}
}