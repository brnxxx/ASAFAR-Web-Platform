<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\RecommandationService;
use App\Service\PrixIntelligentService;
use App\Service\WeatherService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecommandationController extends AbstractController
{
    #[Route('/recommandations', name: 'app_recommandations')]
    public function index(
        Request $request,
        RecommandationService $recommandationService,
        PrixIntelligentService $prixService,
        WeatherService $weatherService
    ): Response {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        /** @var User $user */
        $user = $this->getUser();

        $recommandations = $this->getRecommandationsWithCache(
            $request, $recommandationService, $prixService, $weatherService, $user
        );

        return $this->render('recommandation/index.html.twig', [
            'recommandations' => $recommandations,
        ]);
    }

    #[Route('/recommandations/ajax', name: 'app_recommandations_ajax')]
    public function ajax(
        Request $request,
        RecommandationService $recommandationService,
        PrixIntelligentService $prixService,
        WeatherService $weatherService
    ): Response {
        if (!$this->getUser()) {
            return new Response('');
        }

        /** @var User $user */
        $user = $this->getUser();

        $recommandations = $this->getRecommandationsWithCache(
            $request, $recommandationService, $prixService, $weatherService, $user
        );

        return $this->render('recommandation/index.html.twig', [
            'recommandations' => $recommandations,
            'ajax'            => true,
        ]);
    }

    #[Route('/recommandations/reset-cache', name: 'app_recommandations_reset_cache')]
    public function resetCache(Request $request): Response
    {
        // FIX: instanceof guard — getUser() returns UserInterface, not User
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        $session  = $request->getSession();
        $cacheKey = 'reco_user_' . $user->getId();
        $session->remove($cacheKey);

        return $this->redirectToRoute('app_recommandations');
    }

    /**
     * @return array<int, mixed>
     */
    private function getRecommandationsWithCache(
        Request $request,
        RecommandationService $recommandationService,
        PrixIntelligentService $prixService,
        WeatherService $weatherService,
        User $user
    ): array {
        $session  = $request->getSession();
        $cacheKey = 'reco_user_' . $user->getId();

        if ($session->has($cacheKey)) {
            // FIX: @var cast needed — session->get() returns mixed
            /** @var array<int, mixed> $cached */
            $cached = $session->get($cacheKey);
            return $cached;
        }

        $recommandations = $recommandationService->getRecommandations($user, 6);

        foreach ($recommandations as $item) {
            $excursion = $item['excursion'];

            $excursion->prixData = $prixService->calculerPrix($excursion, 1, 0, 0);

            // FIX: getLieu() is ?string — guard null before passing to getWeather()
            try {
                $excursion->weather = $weatherService->getWeather($excursion->getLieu());
            } catch (\Exception $e) {
                $excursion->weather = null;
            }
        }

        $session->set($cacheKey, $recommandations);

        return $recommandations;
    }
}