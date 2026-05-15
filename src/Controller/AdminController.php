<?php

namespace App\Controller;
use App\Entity\Notification;
use App\Entity\User;
use App\Form\BackofficeUserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CategorieRepository;
use Symfony\Component\Form\FormError;
#[Route('/admin')]
class AdminController extends AbstractController
{
    public function __construct(
        private UserRepository $userRepository,
        private EntityManagerInterface $entityManager,
        private UserPasswordHasherInterface $passwordHasher
    ) {
    }

    #[Route('', name: 'admin_dashboard')]
    public function dashboard(): Response
    {
        $stats = $this->userRepository->getUserStats();
        $recentUsers = $this->userRepository->findRecentUsers(5);
        

        $dashboardData = [
            'users' => [
                'total' => $stats['total'],
                'active' => $stats['active'],
                'inactive' => $stats['inactive'],
                'blocked' => $stats['blocked'],
                'newThisMonth' => $stats['newThisMonth'],
                'growth' => $stats['growth'],
            ],
            'transports' => ['total' => 0, 'pending' => 0],
            'reclamations' => ['total' => 0, 'pending' => 0],
        ];

        return $this->render('admin/dashboard.html.twig', [
            'stats' => $dashboardData,
            'recentUsers' => $recentUsers,
        ]);
    }

    #[Route('/users', name: 'admin_users')]
    public function index(Request $request): Response
    {
        $page = max(1, $request->query->getInt('page', 1));
        $limit = 10;
        $offset = ($page - 1) * $limit;

        $filter = $request->query->get('filter', 'all');
$search = $request->query->get('search', '');
$sort = $request->query->get('sort', 'ASC'); 

$sortField = match($sort) {
    'date_asc'  => ['u.dateInscription', 'ASC'],
    'date_desc' => ['u.dateInscription', 'DESC'],
    'DESC'      => ['u.nom', 'DESC'],
    default     => ['u.nom', 'ASC'],
};
$qb = $this->userRepository->createQueryBuilder('u')
    ->orderBy($sortField[0], $sortField[1]);

        if ($filter === 'active') {
            $qb->andWhere('u.statut = :status')->setParameter('status', 'actif');
        } elseif ($filter === 'inactive') {
            $qb->andWhere('u.statut = :status')->setParameter('status', 'inactif');
        } elseif ($filter === 'blocked') {
            $qb->andWhere('u.statut = :status')->setParameter('status', 'bloqué');
        } elseif ($filter === 'admin') {
            $qb->andWhere('u.role = :role')->setParameter('role', 'admin');
        }

        if (!empty($search)) {
            $qb->andWhere('u.nom LIKE :search OR u.prenom LIKE :search OR u.email LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        /*$totalCount = (clone $qb)->select('COUNT(u.id)')->getQuery()->getSingleScalarResult();
        $totalPages = ceil($totalCount / $limit);*/
        $totalCount = (int) (clone $qb)
    ->select('COUNT(u.id)')
    ->getQuery()
    ->getSingleScalarResult();

$totalPages = (int) ceil($totalCount / $limit);

        $users = $qb->setFirstResult($offset)->setMaxResults($limit)->getQuery()->getResult();
        $stats = $this->userRepository->getUserStats();
        $notifications = [];

$user = $this->getUser();


$user = $this->getUser();

if ($user instanceof User) {
    $notifications = $this->entityManager
        ->getRepository(Notification::class)
        ->findBy([
            'user' => $user,
            'isRead' => false
        ]);
}
        

        return $this->render('admin/utilisateurs/index.html.twig', [
            'users' => $users,
            'stats' => $stats,
            'currentPage' => $page,
            'pages' => $totalPages,
            'total' => $totalCount,
            'filter' => $filter,
            'search' => $search,
             'notifications' => $notifications,
        ]);
    }

    #[Route('/user/{id}', name: 'admin_user_view', requirements: ['id' => '\d+'])]
    public function viewUser(int $id):Response
    {
        $user = $this->userRepository->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        return $this->render('admin/users/view.html.twig', ['user' => $user]);
    }

    #[Route('/user/{id}/toggle-status', name: 'admin_user_toggle_status', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function toggleStatus(int $id): JsonResponse
    {
        $user = $this->userRepository->find($id);

        if (!$user) {
            return $this->json(['success' => false, 'message' => 'Utilisateur non trouvé']);
        }

        $user->setStatut($user->getStatut() === 'actif' ? 'inactif' : 'actif');
        $this->entityManager->flush();

        return $this->json(['success' => true]);
    }

    #[Route('/user/{id}/delete', name: 'admin_user_delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function deleteUser(int $id): JsonResponse
    {
        $user = $this->userRepository->find($id);

        if (!$user) {
            return $this->json(['success' => false, 'message' => 'Utilisateur non trouvé']);
        }

        $this->entityManager->remove($user);
        $this->entityManager->flush();

        return $this->json(['success' => true]);
    }

    #[Route('/users/export', name: 'admin_users_export')]
    public function exportUsers(): Response
    {
        $users = $this->userRepository->findAll();

        /*$handle = fopen('php://temp', 'r+');
        fwrite($handle, "\xEF\xBB\xBF");*/
        $handle = fopen('php://temp', 'r+');

if ($handle === false) {
    throw new \RuntimeException('Impossible d’ouvrir le flux');
}

fwrite($handle, "\xEF\xBB\xBF");
        fputcsv($handle, ['ID', 'Nom', 'Prenom', 'Email', 'Role', 'Statut', 'Date Inscription'], ';');

        foreach ($users as $user) {
            fputcsv($handle, [
                $user->getId(),
                $user->getNom(),
                $user->getPrenom(),
                $user->getEmail(),
                $user->getRole(),
                $user->getStatut(),
                $user->getDateInscription() ? $user->getDateInscription()->format('Y-m-d') : ''
            ], ';');
        }

        rewind($handle);
        $csv = stream_get_contents($handle) ?: '';
        fclose($handle);

        return new Response($csv, 200, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="users.csv"',
        ]);
    }

    #[Route('/users/search', name: 'admin_users_search')]
    public function searchUsers(Request $request): Response
    {
        $search = $request->query->get('search', '');
        $filter = $request->query->get('filter', 'all');
            $sort = $request->query->get('sort', 'ASC');

$sortField = match($sort) {
    'date_asc'  => ['u.dateInscription', 'ASC'],
    'date_desc' => ['u.dateInscription', 'DESC'],
    'DESC'      => ['u.nom', 'DESC'],
    default     => ['u.nom', 'ASC'],
};
$qb = $this->userRepository->createQueryBuilder('u')
    ->orderBy($sortField[0], $sortField[1]);
        if ($filter === 'active') {
            $qb->andWhere('u.statut = :status')->setParameter('status', 'actif');
        } elseif ($filter === 'inactive') {
            $qb->andWhere('u.statut = :status')->setParameter('status', 'inactif');
        } elseif ($filter === 'blocked') {
            $qb->andWhere('u.statut = :status')->setParameter('status', 'bloqué');
        } elseif ($filter === 'admin') {
            $qb->andWhere('u.role = :role')->setParameter('role', 'admin');
        }

        if (!empty($search)) {
            $qb->andWhere('u.nom LIKE :search OR u.prenom LIKE :search OR u.email LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        $users = $qb->setMaxResults(20)->getQuery()->getResult();

        return $this->render('admin/utilisateurs/users_table.html.twig', ['users' => $users]);
    }

    // ========================
    // FORM ROUTES - AJOUT
    // ========================

    #[Route('/user/form/add', name: 'admin_user_form_add', methods: ['GET'])]
    public function getAddForm(): Response
    {
        $user = new User();
        $form = $this->createForm(BackofficeUserType::class, $user, [
            'is_edit' => false,
        ]);

        $html = $this->renderView('admin/utilisateurs/_form.html.twig', [
            'form' => $form->createView(),
            'is_edit' => false,
            'user_id' => null,
        ]);

        return new Response($html);
    }

#[Route('/user/form/add/submit', name: 'admin_user_form_add_submit', methods: ['POST'])]
public function submitAddForm(Request $request): JsonResponse
{
    try {
        $user = new User();
        $form = $this->createForm(BackofficeUserType::class, $user, [
            'is_edit' => false,
        ]);

        $form->handleRequest($request);

        if (!$form->isSubmitted() || !$form->isValid()) {
$errors = [];

$errors = [];

foreach ($form->getErrors(true) as $error) {
    if (!$error instanceof FormError) {
        continue;
    }

    $origin = $error->getOrigin();
    $field = $origin ? $origin->getName() : 'global';

    $errors[$field] = $error->getMessage();
}

            return $this->json([
                'success' => false,
                'message' => 'Erreur de validation',
                'errors' => $errors,
            ], 400);
        }

        $existingUser = $this->userRepository->findOneBy(['email' => $user->getEmail()]);
        if ($existingUser) {
            return $this->json([
                'success' => false,
                'message' => 'Cet email est déjà utilisé.',
                'errors' => ['email' => 'Cet email est déjà utilisé'],
            ], 400);
        }

        $plainPassword = $form->get('plainPassword')->get('first')->getData();

        if (!$plainPassword) {
            return $this->json([
                'success' => false,
                'message' => 'Le mot de passe est obligatoire',
                'errors' => ['plainPassword' => 'Le mot de passe est obligatoire'],
            ], 400);
        }

        $hashedPassword = $this->passwordHasher->hashPassword($user, $plainPassword);
        $user->setPassword($hashedPassword);

        if (!$user->getRole()) {
            $user->setRole('client');
        }
        if (!$user->getStatut()) {
            $user->setStatut('actif');
        }

        $user->setDateInscription(new \DateTime());
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'message' => 'Utilisateur créé avec succès',
        ]);
    } catch (\Exception $e) {
        return $this->json([
            'success' => false,
            'message' => 'Erreur serveur: ' . $e->getMessage(),
        ], 500);
    }
}
    #[Route('/user/form/{id}/edit', name: 'admin_user_form_edit', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function getEditForm(int $id): Response
    {
        $user = $this->userRepository->find($id);

        if (!$user) {
            return new Response('Utilisateur non trouvé', 404);
        }

        $form = $this->createForm(BackofficeUserType::class, $user, [
            'is_edit' => true,
        ]);

        $html = $this->renderView('admin/utilisateurs/_form.html.twig', [
            'form' => $form->createView(),
            'is_edit' => true,
            'user_id' => $user->getId(),
        ]);

        return new Response($html);
    }

    #[Route('/user/form/{id}/edit', name: 'admin_user_form_edit_submit', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function submitEditForm(int $id, Request $request): JsonResponse
    {
        $user = $this->userRepository->find($id);

        if (!$user) {
            return $this->json([
                'success' => false,
                'message' => 'Utilisateur non trouvé',
            ], 404);
        }

        $form = $this->createForm(BackofficeUserType::class, $user, [
            'is_edit' => true,
        ]);

        $data = json_decode($request->getContent(), true);

        unset($data['plainPassword']);
$form->handleRequest($request);
        if (!$form->isValid()) {
$errors = [];

foreach ($form->getErrors(true) as $error) {
    if (!$error instanceof FormError) {
        continue;
    }

    $origin = $error->getOrigin();
    $field = $origin ? $origin->getName() : 'global';

    $errors[$field] = $error->getMessage();
}
            return $this->json([
                'success' => false,
                'message' => 'Erreur de validation',
                'errors' => $errors,
            ], 400);
        }

        if (isset($data['email']) && $data['email'] !== $user->getEmail()) {
            $existingUser = $this->userRepository->findOneBy(['email' => $data['email']]);
            if ($existingUser && $existingUser->getId() !== $user->getId()) {
                return $this->json([
                    'success' => false,
                    'message' => 'Cet email est déjà utilisé.',
                    'errors' => ['email' => 'Cet email est déjà utilisé'],
                ], 400);
            }
        }

        if (!empty($data['plainPassword']['first'])) {
            $hashedPassword = $this->passwordHasher->hashPassword($user, $data['plainPassword']['first']);
            $user->setPassword($hashedPassword);
        }

        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'message' => 'Utilisateur mis à jour avec succès',
        ]);
    }

}