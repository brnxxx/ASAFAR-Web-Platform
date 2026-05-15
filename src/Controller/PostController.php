<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Post;
use App\Entity\PostLike;
use App\Entity\User;
use App\Form\PostType;
use App\Repository\CommentaireRepository;
use App\Repository\PostLikeRepository;
use App\Repository\PostRepository;
use App\Service\BadWordsFilterService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Service\SmsService;



#[Route('/posts')]
final class PostController extends AbstractController
{
    #[Route('', name: 'app_posts', methods: ['GET'])]
    #[Route('/gestion-posts', name: 'app_gestion_posts', methods: ['GET'])]
    #[Route('', name: 'app_post_index', methods: ['GET', 'POST'])]
    #[Route('/', name: 'app_post_index_slash', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        PostRepository $postRepository,
        CommentaireRepository $commentaireRepository,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $user = $this->getUser();

        if (!$user instanceof User) {
            $this->addFlash('error', 'Vous devez être connecté pour accéder aux posts.');
            return $this->redirectToRoute('app_login');
        }

        $timezone = new \DateTimeZone('Africa/Tunis');
        $now = new \DateTime('now', $timezone);

        $scheduledPosts = $postRepository->createQueryBuilder('p')
            ->where('p.status = :status')
            ->andWhere('p.scheduledAt IS NOT NULL')
            ->andWhere('p.scheduledAt <= :now')
            ->setParameter('status', 'SCHEDULED')
            ->setParameter('now', $now)
            ->getQuery()
            ->getResult();

        foreach ($scheduledPosts as $scheduledPost) {
            $scheduledPost->setStatus('PUBLISHED');
            $scheduledPost->setPublishedAt($now);
        }

        if (!empty($scheduledPosts)) {
            $entityManager->flush();
        }

        $post = new Post();
        $post->setUser($user);

        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
    $createdNow = new \DateTimeImmutable('now', $timezone);
    $now = new \DateTime('now', $timezone);

    $post->setCreatedAt($createdNow);

            if (trim((string) $post->getType()) === '') {
                $post->setType('Promotion');
            }

            $scheduledAtRaw = $request->request->get('scheduled_at');
            $actionType = $request->request->get('post_action', 'publish');

            if ($actionType === 'schedule' && !empty($scheduledAtRaw)) {
                try {
                    $scheduledAtRaw = (string) $scheduledAtRaw;
                    $scheduledAt = new \DateTime($scheduledAtRaw, $timezone);

                    if ($scheduledAt <= $now) {
                        $this->addFlash('error', 'Scheduled date must be in the future.');
                        return $this->redirectToRoute('app_post_index');
                    }

                    $post->setStatus('SCHEDULED');
                    $post->setScheduledAt($scheduledAt);
                    $post->setPublishedAt(null);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Invalid scheduled date.');
                    return $this->redirectToRoute('app_post_index');
                }
            } else {
                $post->setStatus('PUBLISHED');
                $post->setPublishedAt($now);
                $post->setScheduledAt(null);
            }

            $imageFile = $form->get('imagePath')->getData();

            if ($imageFile) {
                try {
                    $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);

                    $extension = $imageFile->getClientOriginalExtension();
                    if (!$extension) {
                        $extension = pathinfo($imageFile->getClientOriginalName(), PATHINFO_EXTENSION);
                    }
                    if (!$extension) {
                        $extension = 'jpg';
                    }

                    $newFilename = $safeFilename . '-' . uniqid() . '.' . strtolower($extension);
                    $uploadsDir = $this->getParameter('uploads_directory');
                    if (!is_string($uploadsDir)) {
                        throw new \RuntimeException('uploads_directory not configured');
                    }

                    if (!is_dir($uploadsDir)) {
                        mkdir($uploadsDir, 0755, true);
                    }

                    $imageFile->move($uploadsDir, $newFilename);
                    $post->setImagePath('uploads/' . $newFilename);
                } catch (\Exception $e) {
                    $this->addFlash("error", "Image upload error");
                    return $this->redirectToRoute("app_post_index");
                }
            }

            $entityManager->persist($post);
            $entityManager->flush();

            if ($post->getStatus() === 'SCHEDULED') {
                $this->addFlash('success', 'Post planifié avec succès.');
            } else {
                $this->addFlash('success', 'Post publié avec succès.');
            }

            return $this->redirectToRoute('app_post_index');
        }

        $posts = $postRepository->createQueryBuilder('p')
    ->leftJoin('p.user', 'u')->addSelect('u')
    ->where('p.status = :status')
    ->setParameter('status', 'PUBLISHED')
    ->orderBy('p.publishedAt', 'DESC')
    ->getQuery()
    ->getResult();

if (!empty($posts)) {
    $postIds = array_filter(
        array_map(fn(Post $p) => $p->getId(), $posts),
        fn($id) => is_int($id)
    );

    if (!empty($postIds)) {
        $commentaireRepository->findByPostIds($postIds);
    }
}
        return $this->render('post/index.html.twig', [
            'posts' => $posts,
            'postForm' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_post_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Post $post,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $user = $this->getUser();

        if (!$user instanceof User) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(['success' => false, 'message' => 'Vous devez être connecté.'], 401);
            }

            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_login');
        }

        if ($post->getUser() !== $user) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(['success' => false, 'message' => 'Action non autorisée.'], 403);
            }

            throw $this->createAccessDeniedException('Vous ne pouvez modifier que vos propres posts.');
        }

        if ($request->isMethod('GET')) {
            return $this->redirectToRoute('app_post_index');
        }

        $post->setTitre((string) $request->request->get('titre', $post->getTitre()));
        $post->setType((string) $request->request->get('type', $post->getType()));
        $contenu = $request->request->get('contenu', $post->getContenu());
        $post->setContenu(is_string($contenu) ? $contenu : (string) $contenu);

        $imageFile = $request->files->get('imagePath');

        if ($imageFile) {
            try {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);

                $extension = $imageFile->getClientOriginalExtension();
                if (!$extension) {
                    $extension = pathinfo($imageFile->getClientOriginalName(), PATHINFO_EXTENSION);
                }
                if (!$extension) {
                    $extension = 'jpg';
                }

                $newFilename = $safeFilename . '-' . uniqid() . '.' . strtolower($extension);
                $uploadsDir = $this->getParameter('uploads_directory');
                if (!is_string($uploadsDir)) {
                    throw new \RuntimeException("uploads_directory not set");
                }

                if (!is_dir($uploadsDir)) {
                    mkdir($uploadsDir, 0755, true);
                }

                $imageFile->move($uploadsDir, $newFilename);
                $post->setImagePath('uploads/' . $newFilename);
            } catch (\Exception $e) {
                if ($request->isXmlHttpRequest()) {
                    return new JsonResponse([
                        "success" => false,
                        "message" => "Image upload error",
                    ], 500);
                }

                $this->addFlash("error", "Upload failed");
                return $this->redirectToRoute("app_post_index");
            }
        }

        $post->setUpdatedAt(new \DateTime());
        $entityManager->flush();

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success' => true,
                'message' => 'Post modifié avec succès.',
            ]);
        }

        $this->addFlash('success', 'Post modifié avec succès.');
        return $this->redirectToRoute('app_post_index');
    }

    #[Route('/api/post/{id}/like', name: 'api_post_like', methods: ['POST'])]
    public function toggleLike(
        int $id,
        PostRepository $postRepository,
        PostLikeRepository $postLikeRepository,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $user = $this->getUser();

        if (!$user instanceof User) {
            return new JsonResponse(['error' => 'Non authentifié'], 401);
        }

        $post = $postRepository->find($id);
        if (!$post) {
            return new JsonResponse(['error' => 'Post non trouvé'], 404);
        }

        $userKey = md5((string) ($user->getId() ?? $user->getEmail()));
        $existingLike = $postLikeRepository->findOneBy([
            'post' => $post,
            'userKey' => $userKey,
        ]);

        if ($existingLike) {
            $entityManager->remove($existingLike);
            $liked = false;
        } else {
            $like = new PostLike();
            $like->setPost($post);
            $like->setUserKey($userKey);
            $like->setCreatedAt(new \DateTimeImmutable());
            $entityManager->persist($like);
            $liked = true;
        }

        $entityManager->flush();

        return new JsonResponse([
            'success' => true,
            'liked' => $liked,
            'count' => $post->getPostLikes()->count(),
        ]);
    }

    #[Route('/api/post/{id}/comment', name: 'api_post_comment', methods: ['POST'])]
    public function addComment(
        int $id,
        Request $request,
        PostRepository $postRepository,
        EntityManagerInterface $entityManager,
        BadWordsFilterService $badWordsFilterService
    ): JsonResponse {
        $user = $this->getUser();

        if (!$user instanceof User) {
            return new JsonResponse(['error' => 'Non authentifié'], 401);
        }

        $post = $postRepository->find($id);
        if (!$post) {
            return new JsonResponse(['error' => 'Post non trouvé'], 404);
        }

        $data = json_decode($request->getContent(), true);
        $content = $data['contenu'] ?? null;
        $gifUrl = $data['gifUrl'] ?? null;

        $content = is_string($content) ? trim($content) : null;
        $gifUrl = is_string($gifUrl) ? trim($gifUrl) : null;

        if (($content === null || $content === '') && ($gifUrl === null || $gifUrl === '')) {
            return new JsonResponse(['error' => 'Le commentaire doit contenir un texte ou un GIF'], 400);
        }

        if ($content !== null && $content !== '') {
            $moderation = $badWordsFilterService->analyze($content);

            if (!$moderation['allowed']) {
                return new JsonResponse([
                    'error' => 'Votre commentaire contient des mots inappropriés.',
                    'matchedWords' => $moderation['matchedWords'],
                ], 400);
            }
        }

        $comment = new Commentaire();
        $comment->setPost($post);
        $comment->setUser($user);
        $comment->setContenu($content !== '' ? $content : null);
        $comment->setGifUrl($gifUrl !== '' ? $gifUrl : null);
        $comment->setCreatedAt(new \DateTimeImmutable());

        $entityManager->persist($comment);
        $entityManager->flush();

        $createdAt = $comment->getCreatedAt();
        return new JsonResponse([
            'success' => true,
            'comment' => [
                'id' => $comment->getId(),
                'author' => $user->getNom() . ' ' . $user->getPrenom(),
                'content' => $comment->getContenu(),
                'gifUrl' => $comment->getGifUrl(),
                'createdAt' => $createdAt->format('d/m/Y H:i'),
            ],
        ]);
    }

    #[Route('/{id}/delete', name: 'app_post_delete', methods: ['POST'])]
    public function delete(
        Post $post,
        EntityManagerInterface $entityManager
    ): Response {
        $user = $this->getUser();

        if (!$user instanceof User) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_login');
        }

        if ($post->getUser() !== $user) {
            throw $this->createAccessDeniedException('Vous ne pouvez supprimer que vos propres posts.');
        }

        $entityManager->remove($post);
        $entityManager->flush();

        $this->addFlash('success', 'Post supprimé avec succès.');
        return $this->redirectToRoute('app_post_index');
    }

    #[Route('/api/comment/{id}/edit', name: 'api_comment_edit', methods: ['POST'])]
    public function editComment(
        Commentaire $comment,
        Request $request,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $user = $this->getUser();

        if (!$user instanceof User) {
            return new JsonResponse(['error' => 'Non authentifié'], 401);
        }

        if ($comment->getUser()?->getId() !== $user->getId()) {
            return new JsonResponse(['error' => 'Action non autorisée'], 403);
        }

        $data = json_decode($request->getContent(), true);
        $content = $data['contenu'] ?? null;

        if (!$content) {
            return new JsonResponse(['error' => 'Contenu vide'], 400);
        }

        $comment->setContenu($content);
        $entityManager->flush();

        $createdAt = $comment->getCreatedAt();
        return new JsonResponse([
            'success' => true,
            'comment' => [
                'id' => $comment->getId(),
                'content' => $comment->getContenu(),
                'updatedAt' => $createdAt->format('d/m/Y H:i'),
            ],
        ]);
    }

    #[Route('/api/comment/{id}/delete', name: 'api_comment_delete', methods: ['POST'])]
    public function deleteComment(
        Commentaire $comment,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $user = $this->getUser();

        if (!$user instanceof User) {
            return new JsonResponse(['error' => 'Non authentifié'], 401);
        }

        if ($comment->getUser()?->getId() !== $user->getId()) {
            return new JsonResponse(['error' => 'Action non autorisée'], 403);
        }

        $entityManager->remove($comment);
        $entityManager->flush();

        return new JsonResponse([
            'success' => true,
            'id' => $comment->getId(),
        ]);
    }
#[Route('/api/translate', name: 'api_translate', methods: ['POST'])]
public function translate(Request $request): JsonResponse
{
    $data = json_decode($request->getContent(), true);

    $title = trim($data['title'] ?? '');
    $text = trim($data['text'] ?? '');
    $target = $data['target'] ?? 'fr';

    if ($title === '' && $text === '') {
        return new JsonResponse([
            'error' => 'Titre et contenu vides'
        ], 400);
    }

    $urls = [
        'https://translate.cutie.dating/translate',
        'https://translate.fedilab.app/translate'
    ];

    foreach ($urls as $url) {
        try {
            $client = \Symfony\Component\HttpClient\HttpClient::create();

            $translatedTitle = $title;
            $translatedText = $text;

            if ($title !== '') {
                $titleResponse = $client->request('POST', $url, [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/json',
                    ],
                    'json' => [
                        'q' => $title,
                        'source' => 'auto',
                        'target' => $target,
                        'format' => 'text',
                    ],
                    'timeout' => 5,
                ]);

                if ($titleResponse->getStatusCode() === 200) {
                    $titleResult = $titleResponse->toArray();
                    $translatedTitle = $titleResult['translatedText'] ?? $title;
                }
            }

            if ($text !== '') {
                $textResponse = $client->request('POST', $url, [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/json',
                    ],
                    'json' => [
                        'q' => $text,
                        'source' => 'auto',
                        'target' => $target,
                        'format' => 'text',
                    ],
                    'timeout' => 5,
                ]);

                if ($textResponse->getStatusCode() === 200) {
                    $textResult = $textResponse->toArray();
                    $translatedText = $textResult['translatedText'] ?? $text;
                }
            }

            return new JsonResponse([
                'translatedTitle' => $translatedTitle,
                'translatedText' => $translatedText,
            ]);

        } catch (\Throwable $e) {
        }
    }

    return new JsonResponse([
        'error' => 'Toutes les APIs de traduction sont indisponibles'
    ], 500);
}
#[Route('/api/post/{id}/report', name: 'post_report', methods: ['POST'])]
public function reportPost(
    int $id,
    Request $request,
    EntityManagerInterface $em,
    SmsService $smsService
): JsonResponse {
    $data = json_decode($request->getContent(), true);

    $raison = trim($data['raison'] ?? '');
    $details = trim($data['details'] ?? '');

    if ($raison === '') {
        return new JsonResponse(['error' => 'Raison obligatoire'], 400);
    }

    try {
        $conn = $em->getConnection();

        $postExists = $conn->fetchOne(
            'SELECT id FROM post WHERE id = ?',
            [$id]
        );

        if (!$postExists) {
            return new JsonResponse(['error' => 'Post non trouvé'], 404);
        }

        $conn->insert('signalement', [
            'post_id' => $id,
            'raison' => $raison,
            'details' => $details !== '' ? $details : null,
            'created_at' => (new \DateTime())->format('Y-m-d H:i:s'),
            'statut' => 'NOUVEAU'
        ]);

        $message = "Nouveau signalement\nPost ID: {$id}\nRaison: {$raison}";
        if ($details !== '') {
            $message .= "\nDetails: " . mb_substr($details, 0, 100);
        }

        try {
            $smsService->send(
                $_ENV['INFOBIP_ADMIN_NUMBER'] ?? '+21694393638',
                $message
            );
        } catch (\Throwable $smsError) {
            return new JsonResponse([
                'error' => 'Signalement enregistré mais SMS échoué',
                'details' => $smsError->getMessage()
            ], 500);
        }

        return new JsonResponse([
            'message' => 'Signalement envoyé avec succès'
        ]);
    } catch (\Throwable $e) {
        return new JsonResponse([
            'error' => 'Erreur serveur',
            'details' => $e->getMessage()
        ], 500);
    }
}
#[Route('/api/news', name: 'api_news', methods: ['GET'])]
public function getNews(): JsonResponse
{
    $apiKey = 'XlPez3aFpi-nTBiK8WlJLRd_-g9zYCIpUQaeNJ1RqWsaEhu-';

    $url = "https://api.currentsapi.services/v1/latest-news?apiKey=$apiKey&language=fr";

    try {
        $response = file_get_contents($url);
        if ($response === false) {
            return new JsonResponse(['error' => 'Erreur API'], 500);
        }
        $data = json_decode($response, true);

        $articles = [];

        foreach ($data['news'] ?? [] as $news) {
            $articles[] = [
                'title' => $news['title'] ?? '',
                'description' => $news['description'] ?? '',
                'url' => $news['url'] ?? '',
                'image' => $news['image'] ?? '',
            ];
        }

        return new JsonResponse(['news' => $articles]);
    } catch (\Throwable $e) {
        return new JsonResponse([
            'error' => 'Erreur API',
            'details' => $e->getMessage()
        ], 500);
    }
}
}