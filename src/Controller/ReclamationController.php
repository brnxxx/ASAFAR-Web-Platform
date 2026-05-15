<?php

namespace App\Controller;

use App\Entity\ReclamationWhatsAppSession;
use App\Service\WhatsAppService;
use App\Entity\Reclamation;
use App\Repository\ReclamationRepository;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    public function __construct(
        private WhatsAppService $whatsAppService,
        #[Autowire('%env(GEMINI_API_KEY)%')]
        private string $geminiApiKey = '',
    ) {}

    #[Route('', name: 'reclamation_index', methods: ['GET'])]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('reclamation/index.html.twig');
    }

    #[Route('/articles', name: 'reclamation_articles')]
    public function getArticles(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var User $user */
        $user = $this->getUser();

        // FIX :138 — query->get() returns ?string, cast to string before strtoupper
        $type = strtoupper((string) $request->query->get('type', ''));

        if (!$type) {
            return $this->json([]);
        }

        $typeMap = [
            'TRANSPORT'   => 'TRANSPORT',
            'HEBERGEMENT' => 'HEBERGEMENT',
            'LOISIR'      => 'EXCURSION',
        ];

        $expectedType = $typeMap[$type] ?? null;

        if (!$expectedType) {
            return $this->json([]);
        }

        $reservations = $em->getRepository(\App\Entity\Reservation::class)->findBy([
            'idUser'          => $user->getId(),
            'typeReservation' => $expectedType,
        ]);

        $data = [];

        foreach ($reservations as $res) {
            $dateRes = $res->getDateReservation();
            $dateLabel = $dateRes->format('d/m/Y');

            $data[] = [
                'id'    => $res->getIdReservation(),
                'label' => $type . ' — ' . $dateLabel,
            ];
        }

        return $this->json($data);
    }

    #[Route('/soumettre', name: 'reclamation_soumettre', methods: ['POST'])]
    public function soumettre(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var User|null $user */
        $user = $this->getUser();

        if (!$user instanceof User) {
            return $this->json(['status' => 'ERROR', 'message' => 'Utilisateur non authentifié'], 401);
        }

        $data        = json_decode($request->getContent(), true);
        $sujet       = trim($data['sujet'] ?? '');
        $description = trim($data['description'] ?? '');
        $targetId    = $data['target_id'] ?? $data['idReservation'] ?? null;

        if (!$sujet || strlen($sujet) < 5) {
            return $this->json(['status' => 'ERROR', 'message' => 'Le sujet doit contenir au moins 5 caractères'], 400);
        }

        if (!$description || strlen($description) < 20) {
            return $this->json(['status' => 'ERROR', 'message' => 'La description doit contenir au moins 20 caractères'], 400);
        }

        if (!$targetId) {
            return $this->json(['status' => 'ERROR', 'message' => 'Veuillez sélectionner une réservation'], 400);
        }

        $reservation = $em->getRepository(\App\Entity\Reservation::class)->find((int) $targetId);

        if (!$reservation) {
            return $this->json(['status' => 'ERROR', 'message' => 'Réservation introuvable'], 404);
        }

        if ($reservation->getIdUser() !== $user->getId()) {
            return $this->json(['status' => 'ERROR', 'message' => 'Cette réservation ne vous appartient pas'], 403);
        }

        // FIX :138 — getTypeReservation() is ?string, cast before strtoupper
        $typeRes = strtoupper((string) $reservation->getTypeReservation());

        $dateReference = match($typeRes) {
            'EXCURSION'   => $reservation->getDateExcursion(),
            'TRANSPORT'   => $reservation->getDateDepart(),
            'HEBERGEMENT' => $reservation->getDateArrivee(),
            default       => $reservation->getDateReservation(),
        } ?? $reservation->getDateReservation();

        $today = new \DateTime();
        $today->setTime(0, 0, 0);

        // clone works on \DateTime; convert DateTimeInterface to \DateTime if needed
        $dateCheck = \DateTime::createFromInterface($dateReference);
        $dateCheck->setTime(0, 0, 0);

        if ($dateCheck >= $today) {
            return $this->json(['status' => 'ERROR', 'message' => 'Vous ne pouvez réclamer que sur des réservations passées'], 400);
        }

        $typeMap = [
            'HEBERGEMENT' => 'HEBERGEMENT',
            'TRANSPORT'   => 'TRANSPORT',
            'EXCURSION'   => 'LOISIR',
        ];

        $type = $typeMap[$typeRes] ?? 'LOISIR';

        $existing = $em->getRepository(Reclamation::class)->findOneBy([
            'idReservation' => (int) $targetId,
            'idUser'        => $user->getId(),
        ]);

        if ($existing) {
            return $this->json(['status' => 'ERROR', 'message' => 'Vous avez déjà soumis une réclamation pour cette réservation'], 409);
        }

        $priorite = $this->analyserPrioriteAvecGemini($sujet, $description);

        $reclamation = new Reclamation();
        $reclamation->setSujet($sujet);
        $reclamation->setDescription($description);
        $reclamation->setTypeReclamation($type);
        $reclamation->setPriorite($priorite);
        $reclamation->setDateReclamation(new \DateTime());
        $reclamation->setStatut('EN_ATTENTE');
        // FIX :189 — getId() is ?int, cast to int
        $reclamation->setIdUser((int) $user->getId());
        $reclamation->setIdReservation((int) $targetId);

        // FIX :192–195 — method_exists() always true; call directly
        $reclamation->setTargetType($typeRes);
        $reclamation->setTargetId((int) $targetId);

        $em->persist($reclamation);
        $em->flush();

        // ── Envoi WhatsApp ────────────────────────────────────────────────
        $telephone = $user->getTelephone();

        if ($telephone) {
            $telephone = trim($telephone);
            if (!str_starts_with($telephone, '+')) {
                $telephone = '+216' . ltrim($telephone, '0');
            }

            $session = new ReclamationWhatsAppSession();
            $session->setReclamation($reclamation);
            $session->setPhone($telephone);
            $session->setStep('analyse_en_cours');

            // FIX :215 — json_encode returns string|false; use ?: fallback
            $session->setCollectedData(json_encode([
                'history' => [],
                'verdict' => null,
                'reason'  => null,
                'turn'    => 0,
            ]) ?: '{}');

            $em->persist($session);
            $em->flush();

            $this->whatsAppService->send(
                $telephone,
                "Bonjour 👋 Votre réclamation #{$reclamation->getIdReclamation()} concernant la réservation #{$targetId} a été reçue.\n\nRépondez à ce message pour démarrer l'analyse avec notre assistant IA."
            );
        }

        return $this->json([
            'status'      => 'OK',
            'message'     => 'Votre réclamation a été soumise avec succès.',
            'id'          => $reclamation->getIdReclamation(),
            'priorite'    => $priorite,
            'reservation' => (int) $targetId,
            'type'        => $type,
        ]);
    }

    private function analyserPrioriteAvecGemini(string $sujet, string $description): string
    {
        $text = strtolower($sujet . ' ' . $description);

        if (
            str_contains($text, 'accident') ||
            str_contains($text, 'blessé') ||
            str_contains($text, 'mort') ||
            str_contains($text, 'urgence')
        ) {
            return 'URGENT';
        }

        if (
            str_contains($text, 'panne') ||
            str_contains($text, 'problème') ||
            str_contains($text, 'erreur')
        ) {
            return 'NORMAL';
        }

        if (
            str_contains($text, 'retard') ||
            str_contains($text, 'attente') ||
            str_contains($text, 'lent')
        ) {
            return 'FAIBLE';
        }

        return $this->callGeminiPriority($sujet, $description);
    }

    private function callGeminiPriority(string $sujet, string $description): string
    {
        $apiKey = $this->geminiApiKey;

        if (empty($apiKey)) {
            return 'NORMAL';
        }

        $prompt = "
Classifie cette réclamation :

- URGENT → danger, accident
- NORMAL → problème important
- FAIBLE → petit problème

Réponds UNIQUEMENT :
URGENT, NORMAL ou FAIBLE

Réclamation :
$sujet
$description
";

        $body = json_encode([
            'contents' => [
                ['parts' => [['text' => $prompt]]]
            ]
        ]);

        $url = "https://generativelanguage.googleapis.com/v1/models/gemini-2.5-flash:generateContent?key=$apiKey";

        $ch = curl_init($url);

        // FIX :307 — CURLOPT_POSTFIELDS must be string, not string|false
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $body ?: '',
            CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
        ]);

        $response = curl_exec($ch);
        curl_close($ch);

        // FIX :307/:321 — curl_exec returns string|bool; guard before json_decode
        if (!is_string($response) || $response === '') {
            return 'NORMAL';
        }

        $data = json_decode($response, true);
        $text = strtoupper(trim($data['candidates'][0]['content']['parts'][0]['text'] ?? ''));

        if ($text === 'URGENT') return 'URGENT';
        if ($text === 'FAIBLE') return 'FAIBLE';

        return 'NORMAL';
    }

    #[Route('/mes-reclamations', name: 'reclamation_mes', methods: ['GET'])]
    public function mesReclamations(EntityManagerInterface $em): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var User|null $user */
        $user = $this->getUser();

        if (!$user instanceof User) {
            return $this->json([], 401);
        }

        $recs = $em->getRepository(Reclamation::class)->findBy(
            ['idUser' => $user->getId()],
            ['dateReclamation' => 'DESC']
        );

        $data = [];
        foreach ($recs as $r) {
            $data[] = [
                'id'          => $r->getIdReclamation(),
                'sujet'       => $r->getSujet(),
                'type'        => $r->getTypeReclamation(),
                'statut'      => $r->getStatut(),
                'priorite'    => $r->getPriorite(),
                // FIX :358 — getDateReclamation() is non-nullable here; use -> not ?->
                'date'        => $r->getDateReclamation()->format('d/m/Y'),
                'reponse'     => $r->getReponseAdmin(),
                'description' => $r->getDescription(),
                'satisfait'   => $r->getSatisfait(),
            ];
        }

        return $this->json($data);
    }

    #[Route('/mes-reclamations-page', name: 'reclamation_mes_page', methods: ['GET'])]
    public function mesReclamationsPage(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('reclamation/mes-reclamations.html.twig');
    }

    #[Route('/admin/reclamations', name: 'admin_reclamations')]
    public function adminIndex(Request $request, EntityManagerInterface $em, UserRepository $userRepo): Response
    {
        $filter = $request->query->get('filter', 'all');
        $type   = $request->query->get('type',   'all');
        $search = $request->query->get('search', '');
        $page   = max(1, (int) $request->query->get('page', 1));
        $limit  = 1;

        $repo = $em->getRepository(Reclamation::class);
        $all  = $repo->findAll();

        $stats = [
            'total'       => count($all),
            'en_attente'  => count(array_filter($all, fn($r) => $r->getStatut() === 'EN_ATTENTE')),
            'traitee'     => count(array_filter($all, fn($r) => $r->getStatut() === 'TRAITEE')),
            'refusee'     => count(array_filter($all, fn($r) => $r->getStatut() === 'REFUSEE')),
            'transport'   => count(array_filter($all, fn($r) => $r->getTypeReclamation() === 'TRANSPORT')),
            'hebergement' => count(array_filter($all, fn($r) => $r->getTypeReclamation() === 'HEBERGEMENT')),
            'loisir'      => count(array_filter($all, fn($r) => $r->getTypeReclamation() === 'LOISIR')),
        ];

        $filtered = array_filter($all, function (Reclamation $r) use ($filter, $type, $search) {
            if ($filter !== 'all' && $r->getStatut() !== $filter) return false;
            if ($type   !== 'all' && $r->getTypeReclamation() !== $type) return false;
            if ($search && stripos($r->getSujet() . ' ' . $r->getDescription(), $search) === false) return false;
            return true;
        });
        $filtered = array_values($filtered);

        $total = count($filtered);
        $pages = max(1, (int) ceil($total / $limit));
        $page  = min($page, $pages);
        $reclamations = array_slice($filtered, ($page - 1) * $limit, $limit);

        $userEmail = [];
        foreach ($reclamations as $rec) {
            $recUser = $userRepo->find($rec->getIdUser());
            $userEmail[$rec->getIdReclamation()] = $recUser ? $recUser->getEmail() : '—';
        }

        return $this->render('admin/reclamations/index.html.twig', [
            'reclamations' => $reclamations,
            'stats'        => $stats,
            'filter'       => $filter,
            'type'         => $type,
            'search'       => $search,
            'currentPage'  => $page,
            'pages'        => $pages,
            'total'        => $total,
            'userEmail'    => $userEmail,
            'pagination'   => null,
        ]);
    }

    #[Route('/{id}/satisfaction', name: 'reclamation_satisfaction', methods: ['POST'])]
    public function satisfaction(int $id, Request $request, EntityManagerInterface $em): JsonResponse
    {
        $rec = $em->getRepository(Reclamation::class)->find($id);

        if (!$rec) {
            return $this->json(['success' => false], 404);
        }

        $data = json_decode($request->getContent(), true);

        $rec->setSatisfait($data['satisfait']);

        if ($data['satisfait'] === 'INSATISFAIT') {
            $rec->setStatut('EN_ATTENTE');
        }

        $em->flush();

        return $this->json(['success' => true]);
    }
}