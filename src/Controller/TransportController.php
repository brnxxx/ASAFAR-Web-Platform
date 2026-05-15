<?php

namespace App\Controller;

use App\Entity\Transport;
use App\Entity\Aeroport;
use App\Entity\Hebergement;
use App\Repository\TransportRepository;
use App\Repository\AeroportRepository;
use App\Repository\HebergementRepository;
use App\Form\TransportType;
use App\Form\HebergementType;
use App\Service\CityExtractionService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin')]
class TransportController extends AbstractController
{
    #[Route('/transport-dashboard', name: 'admin_transport_dashboard')]
    public function dashboard(TransportRepository $transportRepo): Response
    {
        $stats = [
            'transports' => $transportRepo->count([]),
        ];

        return $this->render('admin/dashboard.html.twig', [
            'stats' => $stats,
        ]);
    }

    // Transport Section
    #[Route('/transports', name: 'admin_transports')]
    public function transports(TransportRepository $transportRepo): Response
    {
        $transports = $transportRepo->findAllWithAirports();

        return $this->render('admin/transports/index.html.twig', [
            'transports' => $transports,
        ]);
    }

    #[Route('/transports/create', name: 'admin_transport_create', methods: ['GET', 'POST'])]
    public function createTransport(
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $transport = new Transport();
        $transport->setDateCreation(new \DateTimeImmutable());

        $form = $this->createForm(TransportType::class, $transport);
        $this->syncDisplayAirportsIntoFormPayload($request, $form->getName());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->normalizeTransportAirportsByType($transport);

            try {
                $em->persist($transport);
                $em->flush();

                $this->addFlash('success', 'Transport créé avec succès!');
                return $this->redirectToRoute('admin_transports');
            } catch (\Throwable $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la création du transport.');
            }
        }

        return $this->render('admin/transports/form.html.twig', [
            'form' => $form,
            'transport' => $transport,
            'title' => 'Créer un Transport',
        ]);
    }

    #[Route('/transports/{id}/edit', name: 'admin_transport_edit', methods: ['GET', 'POST'])]
    public function editTransport(
        Transport $transport,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $form = $this->createForm(TransportType::class, $transport);
        $this->syncDisplayAirportsIntoFormPayload($request, $form->getName());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->normalizeTransportAirportsByType($transport);

            try {
                $em->flush();

                $this->addFlash('success', 'Transport modifié avec succès!');
                return $this->redirectToRoute('admin_transports');
            } catch (\Throwable $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la modification du transport.');
            }
        }

        return $this->render('admin/transports/form.html.twig', [
            'form' => $form,
            'transport' => $transport,
            'title' => 'Modifier le Transport',
        ]);
    }

    #[Route('/transports/{id}/delete', name: 'admin_transport_delete', methods: ['POST'])]
    public function deleteTransport(
        Transport $transport,
        EntityManagerInterface $em,
        Request $request
    ): Response {
        $token = $request->request->get('_token');
        $token = is_string($token) ? $token : null;
        if ($this->isCsrfTokenValid('delete' . $transport->getIdTransport(), $token)) {
            try {
                $em->remove($transport);
                $em->flush();

                $this->addFlash('success', 'Transport supprimé avec succès!');
            } catch (\Throwable $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la suppression du transport.');
            }
        }

        return $this->redirectToRoute('admin_transports');
    }

    #[Route('/api/extract-airports', name: 'api_extract_airports', methods: ['POST'])]
    public function extractAirports(
        Request $request,
        CityExtractionService $cityExtractor,
        AeroportRepository $aeroportRepo
    ): JsonResponse
    {
        $transportName = (string) ($request->request->get('transportName', '') ?? '');

        if (empty($transportName)) {
            return new JsonResponse(['departure' => [], 'destination' => []]);
        }

        $cities = $cityExtractor->extractCities($transportName);

        if (!$cities) {
            return new JsonResponse(['departure' => [], 'destination' => []]);
        }

        $airports = $aeroportRepo->findAirportsByRoute(
            $cities['departure'],
            $cities['destination'],
            100
        );

        $departureData = array_map(fn(Aeroport $a) => [
            'id' => $a->getId(),
            'name' => sprintf('%s (%s)', $a->getNom(), $a->getCodeIata() ?? 'N/A')
        ], $airports['departure']);

        $destinationData = array_map(fn(Aeroport $a) => [
            'id' => $a->getId(),
            'name' => sprintf('%s (%s)', $a->getNom(), $a->getCodeIata() ?? 'N/A')
        ], $airports['destination']);

        return new JsonResponse([
            'departure' => $departureData,
            'destination' => $destinationData
        ]);
    }

    private function syncDisplayAirportsIntoFormPayload(Request $request, string $formName): void
    {
        if (!$request->isMethod('POST')) {
            return;
        }

        $payload = $request->request->all();
        $formData = $payload[$formName] ?? [];
        if (!\is_array($formData)) {
            $formData = [];
        }

        $departId = $request->request->get('display_aeroport_depart');
        $destinationId = $request->request->get('display_aeroport_destination');
        $pickupId = $request->request->get('display_aeroport_prise_en_charge');

        if ($request->request->has('display_aeroport_depart')) {
            $formData['aeroportDepart'] = (string) $departId;
        }

        if ($request->request->has('display_aeroport_destination')) {
            $formData['aeroportDestination'] = (string) $destinationId;
        }

        if ($request->request->has('display_aeroport_prise_en_charge')) {
            $formData['aeroportPriseEnCharge'] = (string) $pickupId;
        }

        $request->request->set($formName, $formData);
    }

    private function normalizeTransportAirportsByType(Transport $transport): void
    {
        $type = strtoupper((string) $transport->getType());

        if ($type === 'AVION') {
            $transport->setAeroportPriseEnCharge(null);
            return;
        }

        if ($type === 'VOITURE') {
            $transport->setAeroportDepart(null);
            $transport->setAeroportDestination(null);
            return;
        }

        $transport->setAeroportDepart(null);
        $transport->setAeroportDestination(null);
        $transport->setAeroportPriseEnCharge(null);
    }

    // Users Section
    #[Route('/utilisateurs', name: 'admin_utilisateurs')]
    public function utilisateurs(): Response
    {
        return $this->render('admin/utilisateurs/index.html.twig');
    }

    // Hebergements Section
    #[Route('/hebergements-legacy', name: 'admin_hebergements_legacy')]
    public function hebergements(HebergementRepository $hebergementRepo): Response
    {
        $hebergements = $hebergementRepo->findAllWithCategorie();
        $stats = [
            'total' => $hebergementRepo->count([]),
            'disponible' => count(array_filter($hebergements, fn($h) => $h->getDisponibilite() === 'DISPONIBLE')),
            'prix_moyen' => 0,
            'note_moyenne' => 0,
        ];

        // Calculate average price and rating
        if (!empty($hebergements)) {
            $totalPrice = array_sum(array_map(fn($h) => (float)$h->getPrixParNuit(), $hebergements));
            $stats['prix_moyen'] = round($totalPrice / count($hebergements), 2);

            $totalRating = array_sum(array_map(fn($h) => (float)$h->getNoteMoyenne() ?: 0, $hebergements));
            $stats['note_moyenne'] = round($totalRating / count($hebergements), 1);
        }

        return $this->render('admin/hebergements/list.html.twig', [
            'hebergements' => $hebergements,
            'stats' => $stats,
        ]);
    }

    #[Route('/debug/upload', name: 'debug_upload')]
    public function debugUpload(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $file = $request->files->get('test_file');
            if ($file) {
                return new JsonResponse([
                    'success' => true,
                    'filename' => $file->getClientOriginalName(),
                    'size' => $file->getSize(),
                ]);
            }
            return new JsonResponse(['success' => false, 'error' => 'No file']);
        }

        return new Response('
            <form method="POST" enctype="multipart/form-data">
                <input type="file" name="test_file" required>
                <button type="submit">Upload Test</button>
            </form>
        ');
    }

    // Loisirs Section
    #[Route('/loisirs', name: 'admin_loisirs')]
    public function loisirs(): Response
    {
        return $this->render('admin/loisirs/index.html.twig');
    }

    // Posts Section
    #[Route('/posts', name: 'admin_posts')]
    #[Route('/gestion-posts', name: 'admin_gestion_posts')]
    public function posts(): Response
    {
        return $this->redirectToRoute('admin_publications');
    }

    
}
