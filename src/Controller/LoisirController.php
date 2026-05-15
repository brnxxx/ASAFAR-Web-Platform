<?php

namespace App\Controller;

use App\Entity\Excursion;
use App\Entity\User;
use App\Entity\Favorite;
use App\Repository\CategorieRepository;
use App\Repository\PromoCodeRepository;
use App\Repository\ExcursionRepository;
use App\Repository\RatingRepository;
use App\Repository\FavoriteRepository;
use App\Service\PrixIntelligentService;
use App\Service\RecommandationService;
use App\Service\WeatherService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Rating;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\ExcursionType;

class LoisirController extends AbstractController
{
    #[Route('/loisirs', name: 'app_loisirs')]
    public function index(
        Request $request,
        CategorieRepository $categorieRepository,
        ExcursionRepository $excursionRepository,
        WeatherService $weatherService,
        PrixIntelligentService $prixService,
        RecommandationService $recommandationService,
        RatingRepository $ratingRepository
    ): Response {
        $lieu      = $request->query->get('lieu');
        $categorie = $request->query->get('categorie');
        $date      = $request->query->get('date');
        $reco      = $request->query->get('reco');

        $qb = $excursionRepository->createQueryBuilder('e');

        if ($lieu) {
            $qb->andWhere('LOWER(e.lieu) LIKE :lieu')
               ->setParameter('lieu', '%' . strtolower($lieu) . '%');
        }

        if ($categorie) {
            $qb->andWhere('e.categorie = :cat')
               ->setParameter('cat', $categorie);
        }

        if ($date) {
            $qb->andWhere('e.date = :date')
               ->setParameter('date', $date);
        }

        // FIX :64 — getUser() returns UserInterface; instanceof guard before passing to getRecommandations()
        $user = $this->getUser();

        if ($reco && $user instanceof User) {
            $recommandations = $recommandationService->getRecommandations($user, 6);
            $excursions      = [];
            $isSearch        = false;
        } elseif ($lieu || $categorie || $date) {
            $excursions      = $qb->getQuery()->getResult();
            $isSearch        = true;
            $recommandations = null;
        } else {
            $excursions      = $excursionRepository->findBy([], ['date' => 'ASC'], 6);
            $isSearch        = false;
            $recommandations = null;
        }

        if (!$reco) {
            foreach ($excursions as $excursion) {
                // getLieu() returns ?string — guard null
                $lieu = $excursion->getLieu();
                try {
                    $excursion->weather = $lieu !== null
                        ? $weatherService->getWeather($lieu)
                        : null;
                } catch (\Exception $e) {
                    $excursion->weather = null;
                }
                $excursion->rating  = (float) $ratingRepository->getAverageByExcursion($excursion);
                $excursion->prixData = $prixService->calculerPrix($excursion, 1, 0, 0);
            }
        }

        return $this->render('loisirs/loisirs.html.twig', [
            'categories'      => $categorieRepository->findAll(),
            'excursions'      => $excursions,
            'isSearch'        => $isSearch,
            'recommandations' => $recommandations,
        ]);
    }

    #[Route('/loisirs/categorie/{id}', name: 'excursions_by_categorie')]
    public function excursionsByCategorie(
        int $id,
        CategorieRepository $categorieRepository,
        ExcursionRepository $excursionRepository,
        RatingRepository $ratingRepository
    ): Response {
        $categorie = $categorieRepository->find($id);

        if (!$categorie) {
            throw $this->createNotFoundException('Catégorie non trouvée');
        }

        $excursions = $excursionRepository->findBy(['categorie' => $categorie]);
        $averages   = [];

        foreach ($excursions as $excursion) {
            $averages[$excursion->getIdExcursion()] = $ratingRepository->getAverage($excursion);
        }

        return $this->render('loisirs/categorie.html.twig', [
            'categorie'  => $categorie,
            'excursions' => $excursions,
            'averages'   => $averages,
        ]);
    }

    #[Route('/excursion/{id}', name: 'excursion_detail')]
    public function detail(
        int $id,
        ExcursionRepository $excursionRepository,
        RatingRepository $ratingRepository,
        FavoriteRepository $favoriteRepository,
        PrixIntelligentService $prixService,
        PromoCodeRepository $promoRepo
    ): Response {
        $excursion = $excursionRepository->find($id);

        if (!$excursion) {
            throw $this->createNotFoundException('Excursion non trouvée');
        }

        $prix       = $prixService->calculerPrix($excursion, 1, 0, 0);
        $user       = $this->getUser();
        $userRating = 0;
        $isFavori   = false;
        $promos     = [];

        if ($user) {
            $promos = $promoRepo->findBy(['user' => $user, 'actif' => true]);

            $rating = $ratingRepository->findOneBy(['user' => $user, 'excursion' => $excursion]);
            if ($rating) {
                $userRating = $rating->getValue();
            }

            $isFavori = $favoriteRepository->findOneBy([
                'user'      => $user,
                'excursion' => $excursion,
            ]) ? true : false;
        }

        $countFav  = $favoriteRepository->count(['excursion' => $excursion]);
        $avgRating = $ratingRepository->getAverage($excursion);
        $totalAvis = $ratingRepository->count(['excursion' => $excursion]);

        return $this->render('loisirs/detail.html.twig', [
            'excursion'  => $excursion,
            'prix'       => $prix,
            'userRating' => $userRating,
            'isFavori'   => $isFavori,
            'countFav'   => $countFav,
            'avgRating'  => $avgRating,
            'totalAvis'  => $totalAvis,
            'promos'     => $promos,
        ]);
    }

    #[Route('/excursion/{id}/reserver', name: 'excursion_reserver')]
    public function reserver(int $id, ExcursionRepository $excursionRepository): Response
    {
        $excursion = $excursionRepository->find($id);

        if (!$excursion) {
            throw $this->createNotFoundException('Excursion non trouvée');
        }

        return $this->render('loisirs/reserver.html.twig', [
            'excursion' => $excursion,
        ]);
    }

    #[Route('/admin/excursion/new', name: 'excursion_new')]
public function new(Request $request, EntityManagerInterface $em): Response
{
    $excursion = new Excursion();
    $form      = $this->createForm(ExcursionType::class, $excursion);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $file = $form->get('imageFile')->getData();

        if ($file) {
            $filename = uniqid() . '.' . $file->guessExtension();

            try {
                $projectDir = $this->getParameter('kernel.project_dir');
                if (!is_string($projectDir)) {
                    throw new \RuntimeException('kernel.project_dir must be a string');
                }
                $file->move($projectDir . '/public/images/loisirs', $filename);
            } catch (FileException $e) {}

            $excursion->setImageUrl($filename);
        }

        $em->persist($excursion);
        $em->flush();

        return $this->redirectToRoute('excursion_index');
    }

    return $this->render('admin/excursion/new.html.twig', [
        'form' => $form->createView(),
    ]);
}

    #[Route('/mes-favoris', name: 'app_mes_favoris')]
    public function mesFavoris(FavoriteRepository $repo): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $favoris = $repo->findBy(['user' => $user]);

        return $this->render('mes_favoris.html.twig', [
            'favoris' => $favoris,
        ]);
    }

    #[Route('/loisirs/search', name: 'app_loisirs_search')]
    public function search(Request $request, ExcursionRepository $repo, WeatherService $weatherService): Response
    {
        $lieu      = $request->query->get('lieu');
        $categorie = $request->query->get('categorie');
        $date      = $request->query->get('date');

        $qb = $repo->createQueryBuilder('e');

        if ($lieu) {
            $qb->andWhere('e.lieu LIKE :lieu')
               ->setParameter('lieu', "%$lieu%");
        }

        if ($categorie) {
            $qb->andWhere('e.categorie = :cat')
               ->setParameter('cat', $categorie);
        }

        if ($date) {
            $qb->andWhere('e.date = :date')
               ->setParameter('date', new \DateTime($date));
        }

        $excursions = $qb->getQuery()->getResult();

        foreach ($excursions as $excursion) {
            $lieu = $excursion->getLieu();
            try {
                $excursion->weather = $lieu !== null
                    ? $weatherService->getWeather($lieu)
                    : null;
            } catch (\Exception $e) {
                $excursion->weather = null;
            }
        }

        return $this->render('loisirs/_results.html.twig', [
            'excursions' => $excursions,
        ]);
    }

    #[Route('/meteo/excursion/{id}', name: 'app_weather_excursion')]
    public function meteoByExcursion(
        int $id,
        ExcursionRepository $excursionRepository,
        WeatherService $weatherService
    ): Response {
        $excursion = $excursionRepository->find($id);

        if (!$excursion) {
            throw $this->createNotFoundException('Excursion non trouvée');
        }

        // FIX :325 — getLieu() returns string; trim directly
        $city = trim($excursion->getLieu());

        if (!$city) {
            return $this->render('weather/index.html.twig', [
                'weather'   => null,
                'excursion' => $excursion,
                'error'     => 'Lieu non défini pour cette excursion',
            ]);
        }

        try {
            $data = $weatherService->getWeather($city);
        } catch (\Exception $e) {
            $data = null;
        }

        return $this->render('weather/index.html.twig', [
            'weather'   => $data,
            'excursion' => $excursion,
        ]);
    }

    #[Route('/excursion/{id}/rate', name: 'rate_excursion', methods: ['POST'])]
    public function rate(
        int $id,
        Request $request,
        ExcursionRepository $excursionRepository,
        RatingRepository $ratingRepository,
        EntityManagerInterface $em
    ): JsonResponse {
        // FIX :400 — getUser() returns UserInterface; instanceof guard before setUser()
        $user = $this->getUser();
        if (!$user instanceof User) {
            return new JsonResponse(['success' => false, 'error' => 'unauthorized'], 401);
        }

        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(['success' => false, 'error' => 'invalid_request'], 400);
        }

        $excursion = $excursionRepository->find($id);
        $value     = (int) $request->request->get('rating');

        if (!$excursion) {
            return new JsonResponse(['success' => false, 'error' => 'excursion_not_found'], 404);
        }

        if ($value < 1 || $value > 5) {
            return new JsonResponse(['success' => false, 'error' => 'invalid_rating'], 400);
        }

        $rating = $ratingRepository->findOneBy(['user' => $user, 'excursion' => $excursion]);

        if (!$rating) {
            $rating = new Rating();
            $rating->setUser($user);
            $rating->setExcursion($excursion);
        }

        $rating->setValue($value);
        $em->persist($rating);
        $em->flush();

        $avg = (float) $ratingRepository->createQueryBuilder('r')
            ->select('AVG(r.value)')
            ->where('r.excursion = :exc')
            ->setParameter('exc', $excursion)
            ->getQuery()
            ->getSingleScalarResult();

        return new JsonResponse([
            'success' => true,
            'rating'  => $value,
            'average' => round($avg, 1),
        ]);
    }
}