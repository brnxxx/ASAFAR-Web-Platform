<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Post;
use App\Form\PostType;
use App\Repository\CommentaireRepository;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessTimedOutException;



#[Route('/admin/publications')]
class AdminPublicationController extends AbstractController
{
    #[Route('', name: 'admin_publications')]
    public function index(
        Request $request,
        PostRepository $postRepository,
        CommentaireRepository $commentaireRepository,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $search = trim((string) $request->query->get('search', ''));
        $type = $request->query->get('type', '');
        $author = trim((string) $request->query->get('author', ''));
        $sort = $request->query->get('sort', 'desc');
        $selectedPostId = $request->query->getInt('selected', 0);

        $post = new Post();
        $postForm = $this->createForm(PostType::class, $post);
        $postForm->handleRequest($request);

        if ($postForm->isSubmitted() && $postForm->isValid()) {
            $imageFile = $postForm->get('imagePath')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $extension = $imageFile->getClientOriginalExtension() ?: pathinfo($imageFile->getClientOriginalName(), PATHINFO_EXTENSION);

                if (!$extension) {
                    $extension = 'jpg';
                }

                $newFilename = $safeFilename . '-' . uniqid() . '.' . strtolower($extension);

                try {
                    $imageFile->move($this->getParameter('uploads_directory'), $newFilename);
                    $post->setImagePath('uploads/' . $newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
                }
            }

            $user = $this->getUser();
            if ($user instanceof \App\Entity\User) {
                $post->setUser($user);
            }
            $post->setCreatedAt(new \DateTimeImmutable());

            if ($post->getStatus() === '') {
                $post->setStatus('PUBLISHED');
            }

            if (trim($post->getType()) === '') {
                $post->setType('Promotion');
            }

            $entityManager->persist($post);
            $entityManager->flush();

            $this->addFlash('success', 'Publication créée avec succès.');
            return $this->redirectToRoute('admin_publications', ['selected' => $post->getId()]);
        }

        $posts = $postRepository->findWithFilters($search, $type, $author, $sort);
        $commentsByPost = [];
        $authors = [];
        $types = ['Promotion', 'Actualité', 'Conseil', 'Bon plan'];

        if (!empty($posts)) {
            $postIds = array_filter(array_map(fn(Post $postItem) => $postItem->getId(), $posts), fn($id) => is_int($id));
            /** @var array<int, int> $postIds */
            $comments = $commentaireRepository->findByPostIds($postIds);

            foreach ($comments as $comment) {
                $postId = $comment->getPost()?->getId();
                if ($postId !== null) {
                    $commentsByPost[$postId][] = $comment;
                }
            }

            foreach ($posts as $postItem) {
    $user = $postItem->getUser();

    if ($user !== null && $user->getId() !== null) {
        $authors[$user->getId()] = sprintf(
            '%s %s',
            $user->getNom(),
            $user->getPrenom()
        );
    }
}
        }

        $selectedPost = null;
        if ($selectedPostId > 0) {
            foreach ($posts as $postItem) {
                if ($postItem->getId() === $selectedPostId) {
                    $selectedPost = $postItem;
                    break;
                }
            }
        }

        if ($selectedPost === null && !empty($posts)) {
            $selectedPost = $posts[0];
            $selectedPostId = $selectedPost->getId();
        }

        return $this->render('admin/posts/index.html.twig', [
            'posts' => $posts,
            'commentsByPost' => $commentsByPost,
            'selectedPost' => $selectedPost,
            'selectedPostId' => $selectedPostId,
            'authors' => $authors,
            'types' => $types,
            'filters' => [
                'search' => $search,
                'type' => $type,
                'author' => $author,
                'sort' => $sort,
            ],
            'postForm' => $postForm->createView(),
            'commentActionBase' => $this->generateUrl('admin_publication_add_comment', ['id' => 0]),
            'postQuickEditBase' => $this->generateUrl('admin_publication_quick_edit', ['id' => 0]),
        ]);
    }

    #[Route('/{id}/comment', name: 'admin_publication_add_comment', methods: ['POST'])]
    public function addComment(Post $post, Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $content = trim((string) $request->request->get('content', ''));

        if ($content === '') {
            $this->addFlash('error', 'Le commentaire ne peut pas être vide.');
            return $this->redirectToRoute('admin_publications', ['selected' => $post->getId()]);
        }

        $comment = new Commentaire();
        $comment->setPost($post);
        $user = $this->getUser();
        if ($user instanceof \App\Entity\User) {
            $comment->setUser($user);
        }
        $comment->setContenu($content);
        $comment->setCreatedAt(new \DateTimeImmutable());

        $entityManager->persist($comment);
        $entityManager->flush();

        $this->addFlash('success', 'Commentaire ajouté avec succès.');
        return $this->redirectToRoute('admin_publications', ['selected' => $post->getId()]);
    }

    #[Route('/comment/{id}/edit', name: 'admin_publication_comment_edit', methods: ['POST'])]
    public function editComment(Commentaire $comment, Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $content = trim((string) $request->request->get('content', ''));

        if ($content === '') {
            $this->addFlash('error', 'Le commentaire ne peut pas être vide.');
            $postId = $comment->getPost()?->getId() ?? 0;
            return $this->redirectToRoute('admin_publications', ['selected' => $postId]);
        }

        $comment->setContenu($content);
        $entityManager->flush();

        $this->addFlash('success', 'Commentaire modifié avec succès.');
        $postId = $comment->getPost()?->getId() ?? 0;
        return $this->redirectToRoute('admin_publications', ['selected' => $postId]);
    }

    #[Route('/{id}/quick-edit', name: 'admin_publication_quick_edit', methods: ['POST'])]
    public function quickEdit(Post $post, Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $titre = trim((string) $request->request->get('titre', ''));
        $type = trim((string) $request->request->get('type', ''));
        $contenu = trim((string) $request->request->get('contenu', ''));

        if ($titre === '') {
            $this->addFlash('error', 'Le titre est obligatoire.');
            return $this->redirectToRoute('admin_publications', ['selected' => $post->getId()]);
        }

        if ($type === '') {
            $type = 'Promotion';
        }

        $post->setTitre($titre);
        $post->setType($type);
        $post->setContenu($contenu);

        $imageFile = $request->files->get('imagePath');

        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $extension = $imageFile->getClientOriginalExtension() ?: pathinfo($imageFile->getClientOriginalName(), PATHINFO_EXTENSION);

            if (!$extension) {
                $extension = 'jpg';
            }

            $newFilename = $safeFilename . '-' . uniqid() . '.' . strtolower($extension);

            try {
                $imageFile->move($this->getParameter('uploads_directory'), $newFilename);
                $post->setImagePath('uploads/' . $newFilename);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
            }
        }

        $post->setUpdatedAt(new \DateTime());
        $entityManager->flush();

        $this->addFlash('success', 'Publication modifiée avec succès.');
        return $this->redirectToRoute('admin_publications', ['selected' => $post->getId()]);
    }

    #[Route('/create', name: 'admin_publication_create', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imagePath')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $extension = $imageFile->getClientOriginalExtension() ?: pathinfo($imageFile->getClientOriginalName(), PATHINFO_EXTENSION);

                if (!$extension) {
                    $extension = 'jpg';
                }

                $newFilename = $safeFilename . '-' . uniqid() . '.' . strtolower($extension);

                try {
                    $imageFile->move($this->getParameter('uploads_directory'), $newFilename);
                    $post->setImagePath('uploads/' . $newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
                }
            }

            $user = $this->getUser();
            if ($user instanceof \App\Entity\User) {
                $post->setUser($user);
            }
            $post->setCreatedAt(new \DateTimeImmutable());

            if ($post->getStatus() === '') {
                $post->setStatus('PUBLISHED');
            }

            if (trim($post->getType()) === '') {
                $post->setType('Promotion');
            }

            $entityManager->persist($post);
            $entityManager->flush();

            $this->addFlash('success', 'Publication créée avec succès.');
            return $this->redirectToRoute('admin_publications');
        }

        if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Le formulaire contient des erreurs. Vérifiez les champs et réessayez.');
        }

        return $this->render('admin/posts/form.html.twig', [
            'postForm' => $form->createView(),
            'title' => 'Ajouter une publication',
            'post' => $post,
            'is_edit' => false,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_publication_edit', methods: ['GET', 'POST'])]
    public function edit(Post $post, Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imagePath')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $extension = $imageFile->getClientOriginalExtension() ?: pathinfo($imageFile->getClientOriginalName(), PATHINFO_EXTENSION);

                if (!$extension) {
                    $extension = 'jpg';
                }

                $newFilename = $safeFilename . '-' . uniqid() . '.' . strtolower($extension);

                try {
                    $imageFile->move($this->getParameter('uploads_directory'), $newFilename);
                    $post->setImagePath('uploads/' . $newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
                }
            }

            $post->setUpdatedAt(new \DateTime());
            $entityManager->flush();

            $this->addFlash('success', 'Publication modifiée avec succès.');
            return $this->redirectToRoute('admin_publications', ['selected' => $post->getId()]);
        }

        if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Le formulaire contient des erreurs. Vérifiez les champs et réessayez.');
        }

        return $this->render('admin/posts/form.html.twig', [
            'postForm' => $form->createView(),
            'title' => 'Modifier la publication',
            'post' => $post,
            'is_edit' => true,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_publication_delete', methods: ['POST'])]
    public function delete(Post $post, EntityManagerInterface $entityManager, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $token = $request->request->get('_token');
        $token = is_string($token) ? $token : null;
        if ($this->isCsrfTokenValid('delete-post' . $post->getId(), $token)) {
            $entityManager->remove($post);
            $entityManager->flush();
            $this->addFlash('success', 'Publication supprimée avec succès.');
        } else {
            $this->addFlash('error', 'Jeton CSRF invalide.');
        }

        return $this->redirectToRoute('admin_publications');
    }

    #[Route('/comment/{id}/delete', name: 'admin_publication_comment_delete', methods: ['POST'])]
    public function deleteComment(Commentaire $comment, EntityManagerInterface $entityManager, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $token = $request->request->get('_token');
        $token = is_string($token) ? $token : null;
        if ($this->isCsrfTokenValid('delete-comment' . $comment->getId(), $token)) {
            $entityManager->remove($comment);
            $entityManager->flush();
            $this->addFlash('success', 'Commentaire supprimé avec succès.');
        } else {
            $this->addFlash('error', 'Jeton CSRF invalide.');
        }

        return $this->redirectToRoute('admin_publications');
    }
    #[Route('/signalements', name: 'admin_publication_signalements', methods: ['GET'])]
public function signalements(Request $request, EntityManagerInterface $entityManager): Response
{
    $conn = $entityManager->getConnection();

   $reports = $conn->fetchAllAssociative("
    SELECT 
        s.id,
        s.post_id,
        s.raison,
        s.details,
        s.created_at,
        s.statut,
        p.titre AS post_titre,
        p.type AS post_type,
        u.nom AS auteur_nom,
        u.prenom AS auteur_prenom
    FROM signalement s
    LEFT JOIN post p ON p.id = s.post_id
    LEFT JOIN utilisateur u ON u.idUser = p.idUser
    ORDER BY s.created_at DESC
");

    return $this->render('admin/posts/_signalements_modal_content.html.twig', [
        'reports' => $reports
    ]);
}
#[Route('/signalement/{id}/traiter', name: 'admin_publication_signalement_traiter', methods: ['POST'])]
public function traiterSignalement(int $id, EntityManagerInterface $entityManager): JsonResponse
{
    $conn = $entityManager->getConnection();

    $conn->update('signalement', [
        'statut' => 'TRAITE'
    ], [
        'id' => $id
    ]);

    return new JsonResponse([
        'success' => true
    ]);
}

#[Route('/signalement/{id}/delete', name: 'admin_publication_signalement_delete', methods: ['POST'])]
public function deleteSignalement(int $id, EntityManagerInterface $entityManager): JsonResponse
{
    $conn = $entityManager->getConnection();

    $conn->delete('signalement', [
        'id' => $id
    ]);

    return new JsonResponse([
        'success' => true
    ]);
}
/**
 * @param array<string, mixed> $env
 * @return array<string, string>
 */
private function sanitizeEnv(array $env): array
{
    $clean = [];

    foreach ($env as $key => $value) {
        if (is_array($value) || is_object($value) || $value === null) {
            continue;
        }

        if ($value === false) {
            continue;
        }

        $clean[$key] = (string) $value;
    }

    return $clean;
}
#[Route('/ai-optimize-comments', name: 'admin_publication_ai_optimize_comments', methods: ['POST'])]
public function aiOptimizeComments(
    CommentaireRepository $commentaireRepository
): JsonResponse {
    $this->denyAccessUnlessGranted('ROLE_ADMIN');

    set_time_limit(300);
    ini_set('max_execution_time', '300');

    try {
        $comments = $commentaireRepository->findBy([], ['createdAt' => 'DESC'], 10);

        if (empty($comments)) {
            return new JsonResponse([
                'debug_step' => 'no_comments',
                'total' => 0,
                'flaggedCount' => 0,
                'kept' => 0,
                'threshold_toxic' => 0.60,
                'threshold_aggressive' => 0.35,
                'details' => [],
            ]);
        }

        $payload = [];

        foreach ($comments as $comment) {
            $payload[] = [
                'id' => $comment->getId(),
                'content' => (string) $comment->getContenu(),
            ];
        }

        $tmpInput = sys_get_temp_dir() . '/comments_ai_input_' . uniqid() . '.json';
        $jsonPayload = json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

        if ($jsonPayload === false) {
            return new JsonResponse([
                'error' => 'json_encode a échoué.',
                'details' => json_last_error_msg(),
                'debug_step' => 'json_encode',
            ], 500);
        }

        $written = file_put_contents($tmpInput, $jsonPayload);

        if ($written === false) {
            return new JsonResponse([
                'error' => 'Impossible de créer le fichier temporaire pour le scan IA.',
                'details' => $tmpInput,
                'debug_step' => 'file_put_contents',
            ], 500);
        }

        $projectDir = $this->getParameter('kernel.project_dir');
        if (!is_string($projectDir)) {
            @unlink($tmpInput);
            return new JsonResponse([
                'error' => 'Paramètre kernel.project_dir invalide.',
                'debug_step' => 'invalid_project_dir',
            ], 500);
        }

        $pythonScript = $projectDir . '/python/toxic_scan.py';
        $pythonExecutable = 'python';

        if (!file_exists($pythonScript)) {
            @unlink($tmpInput);

            return new JsonResponse([
                'error' => 'Script Python introuvable.',
                'details' => $pythonScript,
                'debug_step' => 'script_not_found',
            ], 500);
        }

        $baseEnv = (array) getenv();

        $env = $this->sanitizeEnv(array_merge(
            $baseEnv,
            $_ENV,
            $_SERVER,
            [
                'PYTHONIOENCODING' => 'utf-8',
                'TRANSFORMERS_OFFLINE' => '1',
                'HF_HUB_DISABLE_TELEMETRY' => '1',
                'DISABLE_IPV6' => '1',

                'SYSTEMROOT' => (string) (getenv('SYSTEMROOT') ?: 'C:\\Windows'),
                'WINDIR' => (string) (getenv('WINDIR') ?: 'C:\\Windows'),
                'USERNAME' => (string) (getenv('USERNAME') ?: 'Lenovo'),
                'USERPROFILE' => (string) (getenv('USERPROFILE') ?: 'C:\\Users\\Lenovo'),
                'HOME' => (string) (getenv('HOME') ?: (getenv('USERPROFILE') ?: 'C:\\Users\\Lenovo')),
                'APPDATA' => (string) (getenv('APPDATA') ?: 'C:\\Users\\Lenovo\\AppData\\Roaming'),
                'LOCALAPPDATA' => (string) (getenv('LOCALAPPDATA') ?: 'C:\\Users\\Lenovo\\AppData\\Local'),
                'PROGRAMDATA' => (string) (getenv('PROGRAMDATA') ?: 'C:\\ProgramData'),
                'TEMP' => (string) (getenv('TEMP') ?: sys_get_temp_dir()),
                'TMP' => (string) (getenv('TMP') ?: sys_get_temp_dir()),
                'COMSPEC' => (string) (getenv('COMSPEC') ?: 'C:\\Windows\\System32\\cmd.exe'),
                'PATHEXT' => (string) (getenv('PATHEXT') ?: '.COM;.EXE;.BAT;.CMD'),
                'PATH' => (string) (getenv('PATH') ?: ''),
            ]
        ));

        $process = new Process([
            $pythonExecutable,
            '-u',
            $pythonScript,
            $tmpInput
        ]);

        $process->setWorkingDirectory($projectDir);
        $process->setTimeout(90);
        $process->setEnv($env);

        $startedAt = microtime(true);

        try {
            $process->run();
        } catch (ProcessTimedOutException $e) {
            @unlink($tmpInput);

            return new JsonResponse([
                'error' => 'Le scan IA a dépassé le temps limite.',
                'details' => $e->getMessage(),
                'debug_step' => 'timeout',
            ], 500);
        } catch (\Throwable $processException) {
            @unlink($tmpInput);

            return new JsonResponse([
                'error' => 'Erreur pendant l’exécution du process Python.',
                'details' => $processException->getMessage(),
                'debug_step' => 'process_run_exception',
                'file' => $processException->getFile(),
                'line' => $processException->getLine(),
            ], 500);
        }

        $duration = round(microtime(true) - $startedAt, 2);

        $rawStdout = trim($process->getOutput());
        $rawStderr = trim($process->getErrorOutput());

        @unlink($tmpInput);

        if (!$process->isSuccessful()) {
            return new JsonResponse([
                'error' => 'Le script Python a échoué.',
                'details' => $rawStderr !== '' ? $rawStderr : $rawStdout,
                'debug_step' => 'process_failed',
                'exit_code' => $process->getExitCode(),
                'duration_seconds' => $duration,
            ], 500);
        }

        if ($rawStdout === '') {
            return new JsonResponse([
                'error' => 'Le script Python n’a renvoyé aucune sortie.',
                'details' => $rawStderr,
                'debug_step' => 'empty_stdout',
                'duration_seconds' => $duration,
            ], 500);
        }

        $lines = preg_split('/\r\n|\r|\n/', $rawStdout);
        $jsonLine = '';

        if (is_array($lines)) {
            for ($i = count($lines) - 1; $i >= 0; $i--) {
                $line = trim($lines[$i]);
                if ($line !== '' && str_starts_with($line, '{')) {
                    $jsonLine = $line;
                    break;
                }
            }
        }

        if ($jsonLine === '') {
            return new JsonResponse([
                'error' => 'Réponse JSON introuvable du script Python.',
                'details' => $rawStdout,
                'debug_step' => 'json_not_found',
                'duration_seconds' => $duration,
            ], 500);
        }

        $result = json_decode($jsonLine, true);

        if (!is_array($result)) {
            return new JsonResponse([
                'error' => 'Réponse JSON invalide du script Python.',
                'details' => json_last_error_msg(),
                'debug_step' => 'json_decode_failed',
                'duration_seconds' => $duration,
                'jsonLine' => $jsonLine,
            ], 500);
        }

        $flagged = $result['flagged'] ?? [];
        $details = [];

        foreach ($flagged as $flaggedItem) {
            $commentId = (int) ($flaggedItem['id'] ?? 0);

            if ($commentId <= 0) {
                continue;
            }

            $comment = $commentaireRepository->find($commentId);

            if (!$comment) {
                continue;
            }

            $details[] = [
                'id' => $commentId,
                'content' => $comment->getContenu(),
                'label' => $flaggedItem['label'] ?? 'toxic',
                'score' => (float) ($flaggedItem['score'] ?? 0),
                'author' => $comment->getUser()
                    ? trim($comment->getUser()->getNom() . ' ' . $comment->getUser()->getPrenom())
                    : 'Utilisateur inconnu',
                'postId' => $comment->getPost() ? $comment->getPost()->getId() : null,
                'postTitle' => $comment->getPost() ? $comment->getPost()->getTitre() : null,
                'createdAt' => $comment->getCreatedAt()->format('d/m/Y H:i'),
            ];
        }

        $total = count($comments);
        $flaggedCount = count($details);

        return new JsonResponse([
            'debug_step' => 'success',
            'duration_seconds' => $duration,
            'stdout_preview' => mb_substr($rawStdout, 0, 500),
            'stderr_preview' => mb_substr($rawStderr, 0, 500),
            'total' => $total,
            'flaggedCount' => $flaggedCount,
            'kept' => max(0, $total - $flaggedCount),
            'threshold_toxic' => $result['threshold_toxic'] ?? 0.60,
            'threshold_aggressive' => $result['threshold_aggressive'] ?? 0.35,
            'details' => $details,
        ]);
    } catch (\Throwable $e) {
        return new JsonResponse([
            'error' => 'Exception PHP dans aiOptimizeComments.',
            'details' => $e->getMessage(),
            'debug_step' => 'php_exception',
            'message' => $e->getMessage(),
            'file' => $e->getFile(),
            'line' => $e->getLine(),
            'trace' => mb_substr($e->getTraceAsString(), 0, 2000),
        ], 500);
    }
}
#[Route('/ai-delete-comment/{id}', name: 'admin_publication_ai_delete_comment', methods: ['POST'])]
public function aiDeleteComment(
    Commentaire $comment,
    EntityManagerInterface $entityManager,
    Request $request
): JsonResponse {
    $this->denyAccessUnlessGranted('ROLE_ADMIN');

    $entityManager->remove($comment);
    $entityManager->flush();

    return new JsonResponse([
        'success' => true,
        'id' => $comment->getId(),
        'message' => 'Commentaire supprimé avec succès.'
    ]);
}

} 