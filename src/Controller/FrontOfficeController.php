<?php

namespace App\Controller;

use App\Entity\Aeroport;
use App\Entity\Transport;
use App\Repository\TransportRepository;
use App\Entity\Reservation;
use App\Repository\ReservationRepository;
use App\Entity\Hebergement;
use App\Repository\CategorieHebergementRepository;
use App\Repository\HebergementRepository;
use App\Form\TransportReservationType;
use App\Repository\AeroportRepository;
use App\Entity\User;

use App\Service\FlightWeatherIntelService;
use App\Service\PredictiveFareService;
use App\Service\CityExtractionService;
use App\Service\SmartJourneySynchronizer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;
use Endroid\QrCode\Builder\BuilderInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class FrontOfficeController extends AbstractController
{


    #[Route('/hebergements', name: 'app_hebergements', methods: ['GET'])]
    public function hebergements(
        Request $request,
        HebergementRepository $hebergementRepository,
        CategorieHebergementRepository $categorieRepository
    ): Response {
        $filters = [
            'lieu' => trim((string) $request->query->get('lieu', '')),
            'type' => trim((string) $request->query->get('type', '')),
            'max_prix' => trim((string) $request->query->get('max_prix', '')),
            'categorie' => trim((string) $request->query->get('categorie', '')),
        ];

        $qb = $hebergementRepository->createQueryBuilder('h')
            ->leftJoin('h.categorieHebergement', 'c')
            ->addSelect('c');

        if ($filters['lieu'] !== '') {
            $qb
                ->andWhere('LOWER(h.localisation) LIKE :lieu')
                ->setParameter('lieu', '%' . mb_strtolower($filters['lieu']) . '%');
        }

        if ($filters['type'] !== '') {
            $qb
                ->andWhere('h.type = :type')
                ->setParameter('type', strtoupper($filters['type']));
        }

        if ($filters['max_prix'] !== '' && is_numeric($filters['max_prix'])) {
            $qb
                ->andWhere('h.prixParNuit <= :maxPrix')
                ->setParameter('maxPrix', (float) $filters['max_prix']);
        }

        if ($filters['categorie'] !== '' && ctype_digit($filters['categorie'])) {
            $qb
                ->andWhere('c.idCategorie = :categorie')
                ->setParameter('categorie', (int) $filters['categorie']);
        }

        $hebergements = $qb
            ->orderBy('h.noteMoyenne', 'DESC')
            ->addOrderBy('h.idHebergement', 'DESC')
            ->setMaxResults(60)
            ->getQuery()
            ->getResult();

        $hebergementsView = array_map(static function (Hebergement $hebergement): array {
            $rating = $hebergement->getNoteMoyenne();
            $displayRating = $rating !== null ? (string) $rating : '4.8';

            return [
                'idHebergement' => $hebergement->getIdHebergement(),
                'nom' => $hebergement->getNom(),
                'type' => $hebergement->getType(),
                'lieu' => $hebergement->getLocalisation(),
                'localisation' => $hebergement->getLocalisation(),
                'description' => $hebergement->getDescription(),
                'prixParNuit' => $hebergement->getPrixParNuit(),
                'etoiles' => $displayRating,
                'imageUrl' => $hebergement->getImagePath(),
                'disponibilite' => $hebergement->getDisponibilite(),
                'noteMoyenne' => $hebergement->getNoteMoyenne(),
            ];
        }, $hebergements);

        $categoriesView = array_map(static function ($categorie): array {
            return [
                'idCategorie' => $categorie->getIdCategorie(),
                'nom' => $categorie->getNom(),
                'description' => $categorie->getDescription(),
                'image' => $categorie->getImagePath(),
            ];
        }, $categorieRepository->findAll());

        $typesRows = $hebergementRepository->createQueryBuilder('h')
            ->select('DISTINCT h.type AS type')
            ->where('h.type IS NOT NULL')
            ->andWhere('h.type <> :empty')
            ->setParameter('empty', '')
            ->orderBy('h.type', 'ASC')
            ->getQuery()
            ->getArrayResult();

        $types = array_values(array_filter(array_map(
            static fn(array $row): ?string => isset($row['type']) ? (string) $row['type'] : null,
            $typesRows
        )));

        return $this->render('hebergements.html.twig', [
            'hebergements' => $hebergementsView,
            'categories' => $categoriesView,
            'types' => $types,
            'filters' => $filters,
        ]);
    }

    #[Route('/hebergements/categorie/{id}', name: 'app_hebergements_categorie', methods: ['GET'])]
    public function hebergementsByCategorie(
        int $id,
        CategorieHebergementRepository $categorieRepository,
        HebergementRepository $hebergementRepository
    ): Response {
        $categorie = $categorieRepository->find($id);

        if (!$categorie) {
            throw $this->createNotFoundException('Categorie hebergement non trouvee');
        }

        $hebergements = $hebergementRepository->findBy(
            ['categorieHebergement' => $categorie],
            ['noteMoyenne' => 'DESC', 'idHebergement' => 'DESC']
        );

        return $this->render('hebergements/categorie.html.twig', [
            'categorie' => $categorie,
            'hebergements' => $hebergements,
        ]);
    }

    #[Route('/hebergement/{id}', name: 'app_hebergement_detail', methods: ['GET'])]
    public function hebergementDetail(int $id, HebergementRepository $hebergementRepository): Response
    {
        $hebergement = $hebergementRepository->find($id);

        if (!$hebergement) {
            throw $this->createNotFoundException('Hebergement non trouve');
        }

        $relatedHebergements = [];
        $categorie = $hebergement->getCategorieHebergement();

        if ($categorie) {
            $relatedHebergements = $hebergementRepository->createQueryBuilder('h')
                ->where('h.categorieHebergement = :categorie')
                ->andWhere('h.idHebergement != :currentId')
                ->setParameter('categorie', $categorie)
                ->setParameter('currentId', $hebergement->getIdHebergement())
                ->orderBy('h.noteMoyenne', 'DESC')
                ->addOrderBy('h.idHebergement', 'DESC')
                ->setMaxResults(3)
                ->getQuery()
                ->getResult();
        }

        return $this->render('hebergements/detail.html.twig', [
            'hebergement' => $hebergement,
            'relatedHebergements' => $relatedHebergements,
        ]);
    }
    





    #[Route('/transports', name: 'app_transports', methods: ['GET'])]
    public function transports(
        Request $request,
        TransportRepository $transportRepository,
        AeroportRepository $aeroportRepository
    ): Response {
        $filters = [
            'type' => strtoupper(trim((string) $request->query->get('type', ''))),
            'max_prix' => trim((string) $request->query->get('max_prix', '')),
            'departure_city' => trim((string) $request->query->get('departure_city', '')),
            'destination_city' => trim((string) $request->query->get('destination_city', '')),
            'airport_type' => trim((string) $request->query->get('airport_type', '')),
        ];

        $allTransports = $transportRepository->findAllWithAirports();
        $filteredTransports = array_values(array_filter(
            $allTransports,
            fn(Transport $transport): bool => $this->transportMatchesFilters($transport, $filters)
        ));

        $transportsView = array_map(
            fn(Transport $transport): array => $this->normalizeTransportForView($transport),
            $filteredTransports
        );

        // Map data is built from all transports (not list filters) so the map remains fully populated.
        $mapPayload = $this->buildMapPayload($allTransports, $aeroportRepository);

        return $this->render('transports.html.twig', [
            'transports' => $transportsView,
            'mapAirports' => $mapPayload['airports'],
            'mapFlights' => $mapPayload['flights'],
            'airportTypes' => $mapPayload['airportTypes'],
            'transportTypes' => $mapPayload['transportTypes'],
            'filters' => $filters,
        ]);
    }



    #[Route('/transports/{id}', name: 'app_transport_detail', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
public function transportDetail(
    int $id,
    TransportRepository $transportRepository,
    Request $request,
    EntityManagerInterface $em,
    PredictiveFareService $pricingService,
    SmartJourneySynchronizer $sjs
): Response {
    $transport = $transportRepository->find($id);

    if (!$transport instanceof Transport) {
        throw $this->createNotFoundException('Transport non trouvé');
    }

    // --- 2. EXÉCUTION DU MOTEUR D'AJUSTEMENT PRÉDICTIF ---
    $pricingData = $pricingService->analyze($transport);

    $reservation = new Reservation();
    $reservation->setIdTransport($id);

    $user = $this->getUser();
    if ($user instanceof User) {
        $userId = $user->getId();
        if (is_int($userId)) {
            $reservation->setIdUser($userId);
        }
    } else {
        $reservation->setIdUser(1);
    }

    $form = $this->createForm(TransportReservationType::class, $reservation, [
        'transport_type' => $transport->getType(),
    ]);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // --- VALEURS OBLIGATOIRES POUR TA BDD ---
        $reservation->setDateReservation(new \DateTime());
        $reservation->setTypeReservation('TRANSPORT'); // ✅ OBLIGATOIRE
        $reservation->setStatut('EN_ATTENTE'); // ✅ Valeur exacte de ton ENUM SQL

        // --- VALEURS NULL PAR DÉFAUT ---
        $reservation->setIdHebergement(null);
        $reservation->setIdExcursion(null);
        $reservation->setDateExcursion(null);
        $reservation->setNbPersonnes(null);
        $reservation->setCodePromo(null);
        $reservation->setReductionPromo(0);

        // --- 3. SÉCURITÉ : Utilisation du prix dynamique actuel pour la facturation ---
        $basePrice = (float) ($pricingData['prix_actuel'] ?? 0);
        $totalPrice = 0;

        // Calcul Backend Sécurisé
        if ($transport->getType() === 'AVION') {

            $reservation->setDateArrivee(null); // Pas d'arrivée pour l'avion

            $adults = $reservation->getNbAdultes();
            $children = $reservation->getNbEnfants();
            $totalPrice = ($adults * $basePrice) + ($children * $basePrice * 0.33);

        } elseif ($transport->getType() === 'VOITURE') {

            $reservation->setDateDepart(null); // Pas de départ stocké pour la voiture

            // Obligatoire pour ta BDD (Null: No)
            $reservation->setNbAdultes(0);
            $reservation->setNbEnfants(0);
            $reservation->setNbBebes(0);

            // Logique de prix Voiture : Puisque tu n'utilises que dateArrivee dans le formulaire, 
            // on ne peut pas faire de diff() avec une dateDebut inexistante. 
            // On utilise donc le prix de base directement (ou adapte si tu as une autre logique).
            $totalPrice = $basePrice; 
        }

        // ✅ La bonne méthode basée sur ta BDD
        $reservation->setMontantTotal((int) $totalPrice); 

        $em->persist($reservation);
        $em->flush();
        $idReservation = $reservation->getIdReservation();



$sjs->synchronize([
            'transport_id' => $transport->getIdTransport(),
            'type' => $transport->getType(),
            'prix_final' => $reservation->getmontantTotal(),
            'date_depart' => $reservation->getDateDepart()?->format('Y-m-d'),
            'user_id' => $reservation->getIdUser(),
            'status' => 'READY_FOR_SYNC'
        ]);


        // ✅ Correction du flash message avec getMontantTotal()
        $this->addFlash('success', 'Votre réservation a été confirmée pour un montant de ' . $reservation->getMontantTotal() . ' TND.');
        return $this->redirectToRoute('app_transport_detail', ['id' => $transport->getIdTransport()]);
    }

    $transportView = $this->normalizeTransportForView($transport);
    $transportType = strtoupper((string) ($transportView['type'] ?? ''));
    $routeDistanceKm = null;

    if (
        $transportType === 'AVION'
        && $this->hasValidCoordinates($transportView['departure'])
        && $this->hasValidCoordinates($transportView['destination'])
    ) {
        $routeDistanceKm = $this->computeDistanceKm(
            (float) $transportView['departure']['lat'],
            (float) $transportView['departure']['lng'],
            (float) $transportView['destination']['lat'],
            (float) $transportView['destination']['lng']
        );
    }

    $relatedQb = $transportRepository->createQueryBuilder('t')
        ->leftJoin('t.aeroportDepart', 'ad')
        ->addSelect('ad')
        ->leftJoin('t.aeroportDestination', 'adest')
        ->addSelect('adest')
        ->leftJoin('t.aeroportPriseEnCharge', 'apec')
        ->addSelect('apec')
        ->andWhere('t.idTransport != :currentId')
        ->setParameter('currentId', $transport->getIdTransport())
        ->orderBy('t.dateCreation', 'DESC')
        ->setMaxResults(3);

    if ($transportType !== '') {
        $relatedQb
            ->andWhere('UPPER(t.type) = :transportType')
            ->setParameter('transportType', $transportType);
    }

    $relatedTransports = array_map(
        fn(Transport $item): array => $this->normalizeTransportForView($item),
        $relatedQb->getQuery()->getResult()
    );

    return $this->render('transports/detail.html.twig', [
        'transport' => $transportView,
        'relatedTransports' => $relatedTransports,
        'routeDistanceKm' => $routeDistanceKm,
        'form' => $form->createView(),
        'pricing' => $pricingData, // <-- 4. ENVOI DES DONNÉES À TWIG
    ]);
}
    #[Route('/transports/map-data', name: 'app_transports_map_data', methods: ['GET'])]
    public function transportsMapData(
        TransportRepository $transportRepository,
        AeroportRepository $aeroportRepository,
        CacheInterface $cache
    ): JsonResponse {
        try {
/** @var array{airports: array<int, array<string,mixed>>, flights: array<int, array<string,mixed>>, airportTypes: string[], transportTypes: string[], updatedAt: string} $payload */
            $payload = $cache->get('transports.map_data.v1', function (ItemInterface $item) use ($transportRepository, $aeroportRepository) {
                $item->expiresAfter(180);

                $allTransports = $transportRepository->findAllWithAirports();
                $mapPayload = $this->buildMapPayload($allTransports, $aeroportRepository);

                return [
                    'airports' => $mapPayload['airports'],
                    'flights' => $mapPayload['flights'],
                    'airportTypes' => $mapPayload['airportTypes'],
                    'transportTypes' => $mapPayload['transportTypes'],
                    'updatedAt' => (new \DateTimeImmutable())->format(DATE_ATOM),
                ];
            });

            return $this->json([
                'success' => true,
                'airports' => $payload['airports'],
                'flights' => $payload['flights'],
                'airportTypes' => $payload['airportTypes'],
                'transportTypes' => $payload['transportTypes'],
                'updatedAt' => $payload['updatedAt'],
            ], 200, [
                'Cache-Control' => 'public, max-age=60, s-maxage=120, stale-while-revalidate=300',
            ]);
        } catch (\Throwable $e) {
            return $this->json([
                'success' => false,
                'airports' => [],
                'flights' => [],
                'airportTypes' => [],
                'transportTypes' => [],
                'message' => 'Failed to load transport map data.',
            ], 500, [
                'Cache-Control' => 'no-store, max-age=0',
            ]);
        }
    }

    #[Route('/transports/weather-intel', name: 'app_transports_weather_intel', methods: ['GET'])]
    public function transportsWeatherIntel(
        TransportRepository $transportRepository,
        AeroportRepository $aeroportRepository,
        FlightWeatherIntelService $flightWeatherIntelService,
        CacheInterface $cache
    ): JsonResponse {
        try {
            $weatherIntelPayload = $cache->get('transports.weather_intel.v1', function (ItemInterface $item) use ($transportRepository, $aeroportRepository, $flightWeatherIntelService): array {
                $item->expiresAfter(300);

                $allTransports = $transportRepository->findAllWithAirports();
                $payload = $this->buildMapPayload($allTransports, $aeroportRepository);
                $weatherIntel = $flightWeatherIntelService->buildWeatherIntel($payload['flights']);

                return [
                    'routes' => $weatherIntel['routes'],
                    'summary' => $weatherIntel['summary'],
                    'updatedAt' => (new \DateTimeImmutable())->format(DATE_ATOM),
                ];
            });

            return $this->json([
                'success' => true,
                'routes' => $weatherIntelPayload['routes'],
                'summary' => $weatherIntelPayload['summary'],
                'updatedAt' => $weatherIntelPayload['updatedAt'],
            ], 200, [
                'Cache-Control' => 'public, max-age=120, s-maxage=240, stale-while-revalidate=600',
            ]);
        } catch (\Throwable $e) {
            return $this->json([
                'success' => false,
                'routes' => [],
                'summary' => [
                    'total' => 0,
                    'good' => 0,
                    'caution' => 0,
                    'severe' => 0,
                    'unknown' => 0,
                ],
                'message' => 'Failed to load weather intelligence for flights.',
            ], 500, [
                'Cache-Control' => 'no-store, max-age=0',
            ]);
        }
    }

    /**
     * @param Transport[] $transports
     * @return array<string, mixed>
     */
    private function buildMapPayload(array $transports, AeroportRepository $aeroportRepository): array
    {
        $airportsById = [];
        $flightRoutes = [];

        foreach ($transports as $transport) {

            $departure = $this->normalizeAirport($transport->getAeroportDepart());
            $destination = $this->normalizeAirport($transport->getAeroportDestination());
            $pickup = $this->normalizeAirport($transport->getAeroportPriseEnCharge());
            $transportType = strtoupper((string) $transport->getType());

            foreach ([$departure, $destination, $pickup] as $airport) {
                if ($airport !== null && isset($airport['id']) && $this->hasValidCoordinates($airport)) {
                    $airportsById[(int) $airport['id']] = $airport;
                }
            }

            if (
                $transportType === 'AVION'
                && $this->hasValidCoordinates($departure)
                && $this->hasValidCoordinates($destination)
            ) {
                $flightRoutes[] = [
                    'id' => $transport->getIdTransport(),
                    'nom' => $this->sanitizeUtf8((string) $transport->getNom()),
                    'type' => $transportType,
                    'prix' => (float) str_replace(',', '.', (string) $transport->getPrix()),
                    'detailUrl' => $this->generateUrl('app_transport_detail', [
                        'id' => $transport->getIdTransport(),
                    ]),
                    'routeLabel' => sprintf(
                        '%s (%s) -> %s (%s)',
                        (string) ($departure['ville'] ?? 'Unknown'),
                        (string) ($departure['codeIata'] ?? 'N/A'),
                        (string) ($destination['ville'] ?? 'Unknown'),
                        (string) ($destination['codeIata'] ?? 'N/A')
                    ),
                    'from' => $departure,
                    'to' => $destination,
                    'fromId' => is_array($departure) ? (int) ($departure['id'] ?? 0) : 0,
                    'toId' => is_array($destination) ? (int) ($destination['id'] ?? 0) : 0,
                    'coordinates' => [
                        [(float) (is_array($departure) ? ($departure['lat'] ?? 0) : 0), (float) (is_array($departure) ? ($departure['lng'] ?? 0) : 0)],
                        [(float) (is_array($destination) ? ($destination['lat'] ?? 0) : 0), (float) (is_array($destination) ? ($destination['lng'] ?? 0) : 0)],
                    ],
                ];
            }
        }

        if ($airportsById === []) {
            $fallbackAirports = $aeroportRepository->createQueryBuilder('a')
                ->where('a.latitude IS NOT NULL')
                ->andWhere('a.longitude IS NOT NULL')
                ->andWhere('NOT (a.latitude = 0 AND a.longitude = 0)')
                ->orderBy('a.id', 'ASC')
                ->setMaxResults(1200)
                ->getQuery()
                ->getResult();

            foreach ($fallbackAirports as $airportEntity) {
                if (!$airportEntity instanceof Aeroport) {
                    continue;
                }

                $normalizedAirport = $this->normalizeAirport($airportEntity);
                if ($this->hasValidCoordinates($normalizedAirport) && is_array($normalizedAirport)) {
                    $airportsById[(int) ($normalizedAirport['id'] ?? 0)] = $normalizedAirport;
                }
            }
        }

        $mapAirports = array_values($airportsById);

        $airportTypes = array_values(array_unique(array_filter(array_map(
            static fn(array|null $airport): string => is_array($airport) ? (string) ($airport['type'] ?? 'other') : 'other',
            $mapAirports
        ))));
        sort($airportTypes);

        $transportTypes = array_values(array_unique(array_filter(array_map(
            fn(Transport $transport): string => strtoupper(trim($this->sanitizeUtf8((string) $transport->getType()))),
            $transports
        ))));
        sort($transportTypes);

        return [
            'airports' => $mapAirports,
            'flights' => $flightRoutes,
            'airportTypes' => $airportTypes,
            'transportTypes' => $transportTypes,
        ];
    }

    /**
     * @param array<string,mixed> $filters
     */
    private function transportMatchesFilters(Transport $transport, array $filters): bool
    {
        $transportType = strtoupper((string) $transport->getType());
        $price = (float) str_replace(',', '.', (string) $transport->getPrix());

        $departureCity = $transport->getAeroportDepart()?->getVille() ?? '';
        $destinationCity = $transport->getAeroportDestination()?->getVille() ?? '';

        if ($filters['type'] !== '' && $transportType !== strtoupper($filters['type'])) {
            return false;
        }

        if ($filters['max_prix'] !== '' && is_numeric($filters['max_prix']) && $price > (float) $filters['max_prix']) {
            return false;
        }

        if ($filters['departure_city'] !== '' && !$this->containsText($departureCity, $filters['departure_city'])) {
            return false;
        }

        if ($filters['destination_city'] !== '' && !$this->containsText($destinationCity, $filters['destination_city'])) {
            return false;
        }

        if ($filters['airport_type'] !== '') {
            $airportType = mb_strtolower($filters['airport_type']);
            $candidateTypes = [
                mb_strtolower((string) ($transport->getAeroportDepart()?->getType() ?? '')),
                mb_strtolower((string) ($transport->getAeroportDestination()?->getType() ?? '')),
                mb_strtolower((string) ($transport->getAeroportPriseEnCharge()?->getType() ?? '')),
            ];

            if (!in_array($airportType, $candidateTypes, true)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @return array<string,mixed>
     */
    private function normalizeTransportForView(Transport $transport): array
    {
        $departure = $this->normalizeAirport($transport->getAeroportDepart());
        $destination = $this->normalizeAirport($transport->getAeroportDestination());
        $pickup = $this->normalizeAirport($transport->getAeroportPriseEnCharge());

        return [
            'id' => $transport->getIdTransport(),
            'nom' => $this->sanitizeUtf8((string) $transport->getNom()),
            'type' => strtoupper((string) $transport->getType()),
            'prix' => (float) str_replace(',', '.', (string) $transport->getPrix()),
            'description' => $this->sanitizeUtf8((string) $transport->getDescription()),
            'dateCreation' => $transport->getDateCreation()->format('Y-m-d H:i'),
            'departure' => $departure,
            'destination' => $destination,
            'pickup' => $pickup,
            'latitude' => $this->normalizeCoordinate($transport->getLatitude()),
            'longitude' => $this->normalizeCoordinate($transport->getLongitude()),
        ];
    }

    private function containsText(?string $haystack, string $needle): bool
    {
        return str_contains(
            mb_strtolower((string) $haystack),
            mb_strtolower(trim($needle))
        );
    }

    /**
     * @return array<string,mixed>|null
     */
    private function normalizeAirport(?Aeroport $airport): ?array
    {
        if ($airport === null) {
            return null;
        }

        $lat = $this->normalizeCoordinate($airport->getLatitude());
        $lng = $this->normalizeCoordinate($airport->getLongitude());

        return [
            'id' => $airport->getId(),
            'nom' => $this->sanitizeUtf8($airport->getNom()),
            'ville' => $this->sanitizeUtf8($airport->getVille() ?: 'Unknown'),
            'pays' => $this->sanitizeUtf8($airport->getPays() ?: 'Unknown'),
            'codeIata' => $this->sanitizeUtf8($airport->getCodeIata() ?: 'N/A'),
            'type' => $this->sanitizeUtf8(trim((string) ($airport->getType() ?: 'other'))),
            'lat' => $lat,
            'lng' => $lng,
        ];
    }

    private function sanitizeUtf8(string $value): string
    {
        $value = trim($value);
        if ($value === '') {
            return '';
        }

        if (mb_check_encoding($value, 'UTF-8')) {
            return $value;
        }

        $converted = mb_convert_encoding($value, 'UTF-8', 'UTF-8,ISO-8859-1,Windows-1252');
        return $converted !== false ? $converted : '';
    }

    private function normalizeCoordinate(float|int|string|null $value): ?float
    {
        if ($value === null || $value === '') {
            return null;
        }

        if (is_string($value)) {
            $value = str_replace(',', '.', trim($value));
        }

        if (!is_numeric($value)) {
            return null;
        }

        return (float) $value;
    }

    /**
     * @param array<string,mixed>|null $airport
     */
    private function hasValidCoordinates(?array $airport): bool
    {
        if ($airport === null) {
            return false;
        }

        $latRaw = $airport['lat'] ?? null;
        $lngRaw = $airport['lng'] ?? null;

        if (!is_numeric($latRaw) || !is_numeric($lngRaw)) {
            return false;
        }

        $lat = (float) $latRaw;
        $lng = (float) $lngRaw;

        if ($lat === 0.0 && $lng === 0.0) {
            return false;
        }

        return $lat >= -90 && $lat <= 90 && $lng >= -180 && $lng <= 180;
    }

    private function computeDistanceKm(float $lat1, float $lng1, float $lat2, float $lng2): float
    {
        $earthRadiusKm = 6371;

        $latDiff = deg2rad($lat2 - $lat1);
        $lngDiff = deg2rad($lng2 - $lng1);

        $a = sin($latDiff / 2) ** 2
            + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($lngDiff / 2) ** 2;
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return round($earthRadiusKm * $c, 1);
    }
     #[Route('/transport/mobile/{id}', name: 'app_transport_mobile_detail')]
    public function mobileDetail(Transport $transport): Response
    {
        // Cette page sera celle affichée sur le téléphone
        return $this->render('transport/mobile_detail.html.twig', [
            'transport' => $transport,
        ]);
    }

    #[Route('/transport/pass-image/{id}', name: 'app_transport_pass_image')]
public function generatePassImage(Transport $transport): Response
{
    // 1. Création d'une image vierge (Format Ticket Mobile : 400x600)
    $img = imagecreatetruecolor(400, 600);
    
    // 2. Définition des couleurs (Palette ASAFAR)
    $navy = imagecolorallocate($img, 5, 22, 33) ?: 1;
    $amber = imagecolorallocate($img, 255, 193, 7) ?: 1;
    $sky = imagecolorallocate($img, 47, 168, 255) ?: 1;
    $white = imagecolorallocate($img, 244, 248, 252) ?: 1;

    // 3. Fond et bordures
    imagefill($img, 0, 0, $navy);
    imagerectangle($img, 10, 10, 390, 590, $amber);

    // 4. Ajout du contenu (Texte simple avec GD)
    imagestring($img, 5, 130, 30, "ASAFAR PASS", $amber);
    imagestring($img, 3, 20, 80, "TYPE: " . strtoupper((string) $transport->getType()), $sky);
    imagestring($img, 5, 20, 110, (string) $transport->getNom(), $white);

    // Itinéraire
    $depName = ($transport->getAeroportDepart() instanceof Aeroport) ? $transport->getAeroportDepart()->getVille() : 'N/A';
    $destName = ($transport->getAeroportDestination() instanceof Aeroport) ? $transport->getAeroportDestination()->getVille() : 'N/A';
    $route = "DE: " . (string) $depName;
    $dest = "A: " . (string) $destName;
    imagestring($img, 4, 20, 160, $route, $white);
    imagestring($img, 4, 20, 190, $dest, $white);

    // Pied de page
    imageline($img, 20, 500, 380, 500, $sky);
    imagestring($img, 3, 100, 520, "SCANNEZ POUR VALIDATION", $white);
    imagestring($img, 4, 140, 550, (string) $transport->getPrix() . " TND", $amber);

    // 5. Capture du flux de sortie
    ob_start();
    imagepng($img);
    $imageData = ob_get_clean();
    imagedestroy($img);

    return new Response($imageData ?: '', 200, [
        'Content-Type' => 'image/png',
        'Content-Disposition' => 'inline; filename="pass_asafar.png"'
    ]);
}

#[Route('/api/optimize-route', name: 'api_optimize_route', methods: ['POST'])]
public function optimizeRoute(Request $request, HttpClientInterface $client): JsonResponse
{
    $data = json_decode($request->getContent(), true);
    if (!isset($data['start_lat'], $data['start_lng'])) {
        return new JsonResponse(['error' => 'Position de départ manquante.'], 400);
    }

    $lat = (float) $data['start_lat'];
    $lng = (float) $data['start_lng'];
    $weatherApiKey = "e636928574b9bd1a194958cfb708d25d";

    try {
        // --- MÉTÉO ---
        $meteoCode   = 0;
        $weatherMain = 'Clear';
        $temperature = 15.0; // ← initialisé ICI, hors du try imbriqué

        try {
            $w           = $client->request('GET', sprintf(
                "https://api.openweathermap.org/data/2.5/weather?lat=%s&lon=%s&appid=%s&units=metric",
                $lat, $lng, $weatherApiKey
            ))->toArray();
            $weatherMain = $w['weather'][0]['main'];
            $temperature = (float) ($w['main']['temp'] ?? 15.0);
            if (in_array($weatherMain, ['Rain','Drizzle','Snow'])) $meteoCode = 1;
            elseif (in_array($weatherMain, ['Thunderstorm','Tornado'])) $meteoCode = 2;
        } catch (\Throwable $e) {
            // météo indisponible → valeurs par défaut déjà initialisées
        }

        // --- DESTINATION ---
        $overpassQuery = sprintf(
            '[out:json];node["place"~"city|town"](around:10000,%s,%s);out 1;', $lat, $lng
        );
        $cityData = $client->request('GET',
            'https://overpass-api.de/api/interpreter?data=' . urlencode($overpassQuery)
        )->toArray();

        if (empty($cityData['elements'])) {
            $destLat = $lat + 0.15; $destLng = $lng + 0.15; $cityName = "Zone locale";
        } else {
            $city    = $cityData['elements'][0];
            $destLat = $city['lat'];
            $destLng = $city['lon'];
            $cityName = $city['tags']['name'] ?? 'Centre Ville';
        }

        // --- 3 WAYPOINTS ---
        $midLat = ($lat + $destLat) / 2;
        $midLng = ($lng + $destLng) / 2;
        $offset = 0.025;

        $waypoints = [
            null,
            ['lat' => $midLat + $offset, 'lng' => $midLng - ($offset * 0.5)],
            ['lat' => $midLat - $offset, 'lng' => $midLng + ($offset * 0.5)],
        ];

        $routeConfigs = [
            ['label_base' => '⚡ Rapide',        'color' => '#3498db'],
            ['label_base' => '🔀 Alternative N', 'color' => '#ffa502'],
            ['label_base' => '🔀 Alternative S', 'color' => '#a29bfe'],
        ];

        $processedRoutes = [];

        foreach ($waypoints as $i => $wp) {
            try {
                if ($wp === null) {
                    $osrmUrl = sprintf(
                        "http://router.project-osrm.org/route/v1/driving/%s,%s;%s,%s?overview=full&geometries=geojson&steps=true",
                        $lng, $lat, $destLng, $destLat
                    );
                } else {
                    $osrmUrl = sprintf(
                        "http://router.project-osrm.org/route/v1/driving/%s,%s;%s,%s;%s,%s?overview=full&geometries=geojson&steps=true",
                        $lng, $lat,
                        $wp['lng'], $wp['lat'],
                        $destLng, $destLat
                    );
                }

                $osrmData = $client->request('GET', $osrmUrl)->toArray();
                if (empty($osrmData['routes'])) continue;

                $routeData = $osrmData['routes'][0];
                $dist = round($routeData['distance'] / 1000, 1);
                $dur  = round($routeData['duration'] / 60, 1);

                // Features avancées depuis les steps OSRM
                $steps     = $routeData['legs'][0]['steps'] ?? [];
                $nbVirages = count($steps);
                $nbFeux    = 0;
                foreach ($steps as $step) {
                    if (isset($step['maneuver']['type']) &&
                        in_array($step['maneuver']['type'], ['turn', 'end of road', 'new name'])) {
                        $nbFeux++;
                    }
                }

                $vitesseMoy = $dur > 0 ? ($dist / ($dur / 60)) : 50;
                $typeRoute  = match(true) {
                    $vitesseMoy < 30 => 0,
                    $vitesseMoy < 55 => 1,
                    $vitesseMoy < 90 => 2,
                    default          => 3,
                };

                // Prédiction ML
                try {
                    $mlResponse = $client->request('POST',
                        'http://127.0.0.1:8888/api/predict-intelligence', [
                        'timeout' => 3.0,
                        'json'    => [
                            'distance_km'            => $dist,
                            'duration_theorique_min' => $dur,
                            'heure_depart'           => (int) date('H'),
                            'jour_semaine'           => (int) date('N') - 1,
                            'meteo_code'             => $meteoCode,
                            'nb_virages'             => $nbVirages,
                            'nb_feux'                => $nbFeux,
                            'denivele_m'             => 0,
                            'type_route'             => $typeRoute,
                            'temperature_c'          => $temperature,
                            'vehicle_type'           => $data['vehicle_type'] ?? 'berline',
                        ]
                    ])->toArray();
                } catch (\Throwable $e) {
                    // Fallback physique si ML indisponible
                    $mlResponse = [
                        'predictions' => [
                            'eta_reel_min'                => (int) round($dur),
                            'eta_optimiste_min'           => (int) round($dur * 0.88),
                            'eta_pessimiste_min'          => (int) round($dur * 1.25),
                            'fiabilite_pct'               => 70,
                            'consommation_estimee_litres' => round($dist * 0.078, 2),
                            'consommation_l100'           => 7.8,
                            'cout_estime_eur'             => round($dist * 0.078 * 1.75, 2),
                            'co2_grammes'                 => (int) round($dist * 0.078 * 2392),
                        ],
                        'analyse_metier' => [
                            'statut_trafic'   => '🟢 Fluide',
                            'couleur_trafic'  => '#2ed573',
                            'alerte_securite' => null,
                            'vitesse_reelle'  => round($vitesseMoy, 1),
                        ],
                    ];
                }

                // ✅ BUG CORRIGÉ — ligne manquante dans ton code
                $processedRoutes[] = [
                    'label'       => $routeConfigs[$i]['label_base'],
                    'color'       => $routeConfigs[$i]['color'],
                    'distance_km' => $dist,
                    'geometry'    => $routeData['geometry'],
                    'predictions' => $mlResponse,
                ];

            } catch (\Throwable $e) {
                continue;
            }
        }

        if (empty($processedRoutes)) {
            throw new \Exception("Aucun itinéraire trouvé.");
        }

        // Marquer la route la plus éco
        $minConso = PHP_FLOAT_MAX;
        $ecoIndex = 0;
        foreach ($processedRoutes as $idx => $r) {
            $conso = $r['predictions']['predictions']['consommation_estimee_litres'];
            if ($conso < $minConso) { $minConso = $conso; $ecoIndex = $idx; }
        }
        if (isset($processedRoutes[$ecoIndex])) {
            $processedRoutes[$ecoIndex]['label'] .= ' 🌱';
            $processedRoutes[$ecoIndex]['color']  = '#2ed573';
        }

        return new JsonResponse([
            'city_name'   => $cityName,
            'weather'     => $weatherMain,
            'destination' => ['lat' => $destLat, 'lng' => $destLng],
            'routes'      => $processedRoutes,
        ]);

    } catch (\Throwable $e) {
        return new JsonResponse(['error' => $e->getMessage()], 500);
    }
}

#[Route('/transports/synchronisation-intelligente', name: 'app_front_sjs')]
    public function smartJourneySync(
        SmartJourneySynchronizer $sjs,
        ReservationRepository $reservationRepository,
        TransportRepository $transportRepository
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('warning', 'Veuillez vous connecter.');
            return $this->redirectToRoute('app_login');
        }

        if (!$user instanceof User) {
            $this->addFlash('warning', 'Authentification requise.');
            return $this->redirectToRoute('app_login');
        }

        // 1. Récupérer TOUTES les réservations de l'utilisateur
        $allReservations = $reservationRepository->findBy(['idUser' => $user->getId()]);

        $vols = [];
        $voitures = [];

        // 2. On trie en récupérant les VRAIS objets Transport
        foreach ($allReservations as $res) {
            $idTransport = $res->getIdTransport(); // Retourne un entier
            if (!$idTransport) continue;
            
            // On va chercher l'objet complet dans la base de données
            $transport = $transportRepository->find($idTransport);
            if (!$transport) continue; 
            
            if ($transport->getType() === 'AVION') {
                $vols[] = ['reservation' => $res, 'transport' => $transport];
            } elseif ($transport->getType() === 'VOITURE') {
                $voitures[] = ['reservation' => $res, 'transport' => $transport];
            }
        }

        // 3. LOGIQUE DE MATCHING basée sur VOS getters exacts
        foreach ($vols as $volData) {
            $volRes = $volData['reservation'];
            $transportVol = $volData['transport']; 
            
            // VOS MÉTHODES : On récupère l'aéroport de destination du vol
            $destVol = $transportVol->getAeroportDestination();
            
            foreach ($voitures as $voitureData) {
                $voitureRes = $voitureData['reservation'];
                $transportVoiture = $voitureData['transport']; 
                
                // VOS MÉTHODES : On récupère l'aéroport de prise en charge de la voiture
                $pickupCar = $transportVoiture->getAeroportPriseEnCharge();

                // On vérifie qu'ils existent et que l'ID est identique
                if ($destVol && $pickupCar && ($destVol->getId() === $pickupCar->getId())) {
                    
                    // --- SUCCÈS ---
                    $sjs->synchronize([
                        'transport_id' => $transportVol->getIdTransport(),
                        'type' => 'AVION',
                        'linked_car_id' => $transportVoiture->getIdTransport(),
                        'action' => 'LINK_FLIGHT_TO_CAR'
                    ]);

                    $this->addFlash('success', 'SJS Activé : Synchronisation réussie pour l\'aéroport ' . $destVol->getNom());
                    
                    return $this->render('/transports/sjs.html.twig', [
                        'avion' => $volRes,
                        'voiture' => $voitureRes,
                        'aeroport' => $destVol
                    ]);
                }
            }
        }

        // 4. GESTION DES ERREURS
        if (empty($vols) || empty($voitures)) {
            $this->addFlash('warning', 'Il vous faut au moins un vol et une voiture pour synchroniser.');
        } else {
            $this->addFlash('danger', 'Aucune correspondance trouvée : l\'aéroport de destination du vol ne correspond pas au lieu de prise en charge de la voiture.');
        }

        return $this->redirectToRoute('app_mes_reservations_transports');
    }

}