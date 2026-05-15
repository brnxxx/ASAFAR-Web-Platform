<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\Commentaire;
use App\Entity\PostLike;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/publications')]
final class AdminPublicationStatisticsController extends AbstractController
{
    #[Route('/statistiques', name: 'admin_publication_statistics', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        try {
            $this->denyAccessUnlessGranted('ROLE_ADMIN');

            $postRepo = $entityManager->getRepository(Post::class);
            $commentRepo = $entityManager->getRepository(Commentaire::class);
            $likeRepo = $entityManager->getRepository(PostLike::class);

            $totalPosts = $postRepo->count([]);
            $totalComments = $commentRepo->count([]);
            $totalLikes = $likeRepo->count([]);

            $avgCommentsPerPost = $totalPosts > 0 ? round($totalComments / $totalPosts, 2) : 0;
            $avgLikesPerPost = $totalPosts > 0 ? round($totalLikes / $totalPosts, 2) : 0;
            $engagementRate = $totalPosts > 0 ? round(($totalComments + $totalLikes) / $totalPosts, 2) : 0;

            $postsByType = $entityManager->createQueryBuilder()
                ->select('p.type AS type, COUNT(p.id) AS total')
                ->from(Post::class, 'p')
                ->groupBy('p.type')
                ->orderBy('total', 'DESC')
                ->getQuery()
                ->getResult();

            $postsByMonth = $entityManager->getConnection()->executeQuery("
                SELECT DATE_FORMAT(created_at, '%Y-%m') AS month_label, COUNT(*) AS total
                FROM post
                GROUP BY month_label
                ORDER BY month_label ASC
            ")->fetchAllAssociative();

            $topLikedPostsRaw = $entityManager->createQueryBuilder()
                ->select('p.id AS id, p.titre AS titre, p.type AS type, COUNT(pl.id) AS likes_count')
                ->from(Post::class, 'p')
                ->leftJoin('p.postLikes', 'pl')
                ->groupBy('p.id, p.titre, p.type')
                ->orderBy('likes_count', 'DESC')
                ->addOrderBy('p.id', 'DESC')
                ->setMaxResults(5)
                ->getQuery()
                ->getResult();

            $topLikedPosts = [];
            foreach ($topLikedPostsRaw as $row) {
                $post = $postRepo->find($row['id']);
                if ($post && $post->getUser()) {
                    $nom = (string) $post->getUser()->getNom();
                    $prenom = (string) $post->getUser()->getPrenom();
                    $author = trim($nom . ' ' . $prenom);
                } else {
                    $author = 'Auteur inconnu';
                }

                $topLikedPosts[] = [
                    'id' => $row['id'],
                    'titre' => $row['titre'],
                    'type' => $row['type'],
                    'auteur' => $author,
                    'likes_count' => $row['likes_count'],
                ];
            }

            $topCommentedPostsRaw = $entityManager->createQueryBuilder()
                ->select('p.id AS id, p.titre AS titre, p.type AS type, COUNT(c.id) AS comments_count')
                ->from(Post::class, 'p')
                ->leftJoin('p.commentaires', 'c')
                ->groupBy('p.id, p.titre, p.type')
                ->orderBy('comments_count', 'DESC')
                ->addOrderBy('p.id', 'DESC')
                ->setMaxResults(5)
                ->getQuery()
                ->getResult();

            $topCommentedPosts = [];
            foreach ($topCommentedPostsRaw as $row) {
                $post = $postRepo->find($row['id']);
                $postUser = $post?->getUser();
                $author = $postUser
                    ? trim($postUser->getNom() . ' ' . $postUser->getPrenom())
                    : 'Auteur inconnu';

                $topCommentedPosts[] = [
                    'id' => $row['id'],
                    'titre' => $row['titre'],
                    'type' => $row['type'],
                    'auteur' => $author,
                    'comments_count' => $row['comments_count'],
                ];
            }

            $allPosts = $postRepo->findAll();

            $authorsMap = [];

foreach ($allPosts as $post) {
    $user = $post->getUser();

    if ($user === null || $user->getId() === null) {
        continue;
    }

    $key = $user->getId();
    $name = trim((string) $user->getNom() . ' ' . (string) $user->getPrenom());

    if (!isset($authorsMap[$key])) {
        $authorsMap[$key] = [
            'idUser' => $key,
            'auteur' => $name !== '' ? $name : 'Auteur inconnu',
            'posts_count' => 0,
        ];
    }

    $authorsMap[$key]['posts_count']++;
}

            $authorsList = array_values($authorsMap);

            usort($authorsList, static function (array $a, array $b): int {
                return $b['posts_count'] <=> $a['posts_count'];
            });

            $topActiveAuthors = array_slice($authorsList, 0, 5);

            $recentPerformance = [];
            foreach ($allPosts as $post) {
                $user = $post->getUser();
                if ($user) {
                    $nom = (string) $user->getNom();
                    $prenom = (string) $user->getPrenom();
                    $author = trim($nom . ' ' . $prenom);
                } else {
                    $author = 'Auteur inconnu';
                }

                $likes = $post->getPostLikes()->count();
                $comments = $post->getCommentaires()->count();

                $recentPerformance[] = [
                    'id' => $post->getId(),
                    'titre' => $post->getTitre(),
                    'type' => $post->getType(),
                    'auteur' => $author !== '' ? $author : 'Auteur inconnu',
                    'likes_count' => $likes,
                    'comments_count' => $comments,
                    'score' => $likes + $comments,
                ];
            }

            usort($recentPerformance, static function (array $a, array $b): int {
                return $b['score'] <=> $a['score'] ?: ($b['id'] <=> $a['id']);
            });

            return $this->render('admin/posts/_statistics_modal_content.html.twig', [
                'stats' => [
                    'totalPosts' => $totalPosts,
                    'totalComments' => $totalComments,
                    'totalLikes' => $totalLikes,
                    'avgCommentsPerPost' => $avgCommentsPerPost,
                    'avgLikesPerPost' => $avgLikesPerPost,
                    'engagementRate' => $engagementRate,
                ],
                'postsByType' => $postsByType,
                'postsByMonth' => $postsByMonth,
                'topLikedPosts' => $topLikedPosts,
                'topCommentedPosts' => $topCommentedPosts,
                'topActiveAuthors' => $topActiveAuthors,
                'recentPerformance' => array_slice($recentPerformance, 0, 10),
            ]);
        } catch (\Throwable $e) {
            return new Response(
                '<div style="padding:24px;color:#ffb4b4;font-weight:700;">Erreur réelle : '
                . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8')
                . '</div>',
                500
            );
        }
    }
}