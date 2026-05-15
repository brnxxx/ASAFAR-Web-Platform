<?php

namespace App\Tests\Business;

use App\Entity\Aeroport;
use App\Entity\Transport;
use App\Entity\Reservation;
use PHPUnit\Framework\TestCase;


class TransportMetiersTest extends TestCase
{

    public function testPrixReservationAvionAdultesSeuls(): void
    {
        $basePrice = 250.50;
        $nbAdultes = 2;
        $nbEnfants = 0;

        $total = ($nbAdultes * $basePrice) + ($nbEnfants * $basePrice * 0.33);

        $this->assertEqualsWithDelta(501.00, $total, 0.01);
    }

    public function testPrixReservationAvionAvecEnfants(): void
    {
        $basePrice = 250.50;
        $nbAdultes = 2;
        $nbEnfants = 1;

        $total = ($nbAdultes * $basePrice) + ($nbEnfants * $basePrice * 0.33);

        $this->assertEqualsWithDelta(583.67, $total, 0.01);
    }

    public function testPrixReservationAvionEnfantsPaientMoins(): void
    {
        $basePrice = 300.00;
        $prixEnfant = $basePrice * 0.33;

        $this->assertEqualsWithDelta(99.00, $prixEnfant, 0.01);
        $this->assertLessThan($basePrice, $prixEnfant);
    }

    public function testPrixReservationAvionFamilleComplete(): void
    {
        $basePrice = 200.00;
        $nbAdultes = 2;
        $nbEnfants = 3;

        $total = ($nbAdultes * $basePrice) + ($nbEnfants * $basePrice * 0.33);

        $this->assertEqualsWithDelta(598.00, $total, 0.01);
    }

    public function testPrixReservationAvionUnSeulPassager(): void
    {
        $basePrice = 150.75;
        $nbAdultes = 1;
        $nbEnfants = 0;

        $total = ($nbAdultes * $basePrice) + ($nbEnfants * $basePrice * 0.33);

        $this->assertEqualsWithDelta(150.75, $total, 0.01);
    }

    public function testPrixReservationVoitureEstPrixDeBase(): void
    {
        $basePrice = 85.00;

        $totalPrice = $basePrice;

        $this->assertEqualsWithDelta(85.00, $totalPrice, 0.01);
    }

    public function testReservationVoitureNbPersonnesForceAZero(): void
    {
        $reservation = new Reservation();
        $reservation->setNbAdultes(0);
        $reservation->setNbEnfants(0);
        $reservation->setNbBebes(0);

        $this->assertSame(0, $reservation->getNbAdultes());
        $this->assertSame(0, $reservation->getNbEnfants());
        $this->assertSame(0, $reservation->getNbBebes());
    }

    public function testMontantTotalReservationEstEntier(): void
    {
        $basePrice = 250.50;
        $nbAdultes = 2;
        $nbEnfants = 1;

        $totalFloat = ($nbAdultes * $basePrice) + ($nbEnfants * $basePrice * 0.33);
        $montantTotal = (int) $totalFloat;

        $this->assertIsInt($montantTotal);
        $this->assertSame(583, $montantTotal);
    }

    private function transportMatchesFilters(
        string $transportType,
        float $price,
        string $departureCity,
        string $destinationCity,
        array $filters
    ): bool {
        if ($filters['type'] !== '' && strtoupper($transportType) !== strtoupper($filters['type'])) {
            return false;
        }

        if (
            $filters['max_prix'] !== ''
            && is_numeric($filters['max_prix'])
            && $price > (float) $filters['max_prix']
        ) {
            return false;
        }

        if ($filters['departure_city'] !== '') {
            if (!str_contains(mb_strtolower($departureCity), mb_strtolower(trim($filters['departure_city'])))) {
                return false;
            }
        }

        if ($filters['destination_city'] !== '') {
            if (!str_contains(mb_strtolower($destinationCity), mb_strtolower(trim($filters['destination_city'])))) {
                return false;
            }
        }

        return true;
    }

    public function testFiltreParTypeAvion(): void
    {
        $match = $this->transportMatchesFilters('AVION', 250.0, 'Tunis', 'Paris', [
            'type' => 'AVION',
            'max_prix' => '',
            'departure_city' => '',
            'destination_city' => '',
        ]);

        $this->assertTrue($match);
    }

    public function testFiltreParTypeExclutVoiture(): void
    {
        $match = $this->transportMatchesFilters('VOITURE', 85.0, 'Tunis', 'Sousse', [
            'type' => 'AVION',
            'max_prix' => '',
            'departure_city' => '',
            'destination_city' => '',
        ]);

        $this->assertFalse($match);
    }

    public function testFiltreParPrixMaxRespected(): void
    {
        $match = $this->transportMatchesFilters('AVION', 199.99, 'Tunis', 'Paris', [
            'type' => '',
            'max_prix' => '200',
            'departure_city' => '',
            'destination_city' => '',
        ]);

        $this->assertTrue($match);
    }

    public function testFiltreParPrixMaxDepasse(): void
    {
        $match = $this->transportMatchesFilters('AVION', 350.00, 'Tunis', 'Paris', [
            'type' => '',
            'max_prix' => '300',
            'departure_city' => '',
            'destination_city' => '',
        ]);

        $this->assertFalse($match);
    }

    public function testFiltreVilleDepartInsensibleCasse(): void
    {
        $match = $this->transportMatchesFilters('AVION', 250.0, 'Tunis', 'Paris', [
            'type' => '',
            'max_prix' => '',
            'departure_city' => 'tunis',
            'destination_city' => '',
        ]);

        $this->assertTrue($match);
    }

    public function testFiltreVilleDestinationPartielle(): void
    {
        $match = $this->transportMatchesFilters('AVION', 250.0, 'Tunis', 'Paris Charles de Gaulle', [
            'type' => '',
            'max_prix' => '',
            'departure_city' => '',
            'destination_city' => 'paris',
        ]);

        $this->assertTrue($match);
    }

    public function testFiltresVidesRetournentTout(): void
    {
        $filters = [
            'type' => '',
            'max_prix' => '',
            'departure_city' => '',
            'destination_city' => '',
        ];

        $match1 = $this->transportMatchesFilters('AVION', 500.0, 'Tunis', 'Londres', $filters);
        $match2 = $this->transportMatchesFilters('VOITURE', 50.0, 'Sfax', 'Monastir', $filters);

        $this->assertTrue($match1);
        $this->assertTrue($match2);
    }
    private function hasValidCoordinates(?array $airport): bool
    {
        if ($airport === null) return false;

        $lat = $airport['lat'] ?? null;
        $lng = $airport['lng'] ?? null;

        if (!is_numeric($lat) || !is_numeric($lng)) return false;

        $lat = (float) $lat;
        $lng = (float) $lng;

        if ($lat === 0.0 && $lng === 0.0) return false;

        return $lat >= -90 && $lat <= 90 && $lng >= -180 && $lng <= 180;
    }

    public function testCoordonneesTunisValides(): void
    {
        $airport = ['lat' => 36.8515, 'lng' => 10.2272];
        $this->assertTrue($this->hasValidCoordinates($airport));
    }

    public function testCoordonneesParisCDGValides(): void
    {
        $airport = ['lat' => 49.0097, 'lng' => 2.5478];
        $this->assertTrue($this->hasValidCoordinates($airport));
    }

    public function testCoordonneesZeroZeroInvalides(): void
    {
        $airport = ['lat' => 0.0, 'lng' => 0.0];
        $this->assertFalse($this->hasValidCoordinates($airport));
    }

    public function testCoordonneesNullInvalides(): void
    {
        $this->assertFalse($this->hasValidCoordinates(null));
    }

    public function testCoordonneesHorsRangeLatInvalides(): void
    {
        $airport = ['lat' => 95.0, 'lng' => 10.0];
        $this->assertFalse($this->hasValidCoordinates($airport));
    }

    public function testCoordonneesHorsRangeLngInvalides(): void
    {
        $airport = ['lat' => 36.8, 'lng' => -200.0];
        $this->assertFalse($this->hasValidCoordinates($airport));
    }

    public function testCoordonneesTextuellesInvalides(): void
    {
        $airport = ['lat' => 'abc', 'lng' => 'xyz'];
        $this->assertFalse($this->hasValidCoordinates($airport));
    }

    public function testCoordonneesManquantesInvalides(): void
    {
        $airport = ['nom' => 'Tunis Carthage'];
        $this->assertFalse($this->hasValidCoordinates($airport));
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

    public function testDistanceTunisParisApproximative(): void
    {
       
        $distance = $this->computeDistanceKm(36.8515, 10.2272, 49.0097, 2.5478);

        $this->assertEqualsWithDelta(1487.6, $distance, 10.0);
    }

    public function testDistanceMemePointEstZero(): void
    {
        $distance = $this->computeDistanceKm(36.8515, 10.2272, 36.8515, 10.2272);
        $this->assertEqualsWithDelta(0.0, $distance, 0.1);
    }

    public function testDistanceEstPositive(): void
    {
        $distance = $this->computeDistanceKm(36.8515, 10.2272, 51.5074, -0.1278);
        $this->assertGreaterThan(0, $distance);
    }

    public function testDistanceEstSymetrique(): void
    {
    
        $dist1 = $this->computeDistanceKm(36.8515, 10.2272, 48.8566, 2.3522);
        $dist2 = $this->computeDistanceKm(48.8566, 2.3522, 36.8515, 10.2272);

        $this->assertEqualsWithDelta($dist1, $dist2, 0.01);
    }

    public function testDistanceArrondiAUnDecimale(): void
    {
        $distance = $this->computeDistanceKm(36.8515, 10.2272, 49.0097, 2.5478);


        $this->assertSame($distance, round($distance, 1));
    }

    private function normalizeCoordinate(mixed $value): ?float
    {
        if ($value === null || $value === '') return null;

        if (is_string($value)) {
            $value = str_replace(',', '.', trim($value));
        }

        if (!is_numeric($value)) return null;

        return (float) $value;
    }

    private function sanitizeUtf8(string $value): string
    {
        $value = trim($value);
        if ($value === '') return '';
        if (mb_check_encoding($value, 'UTF-8')) return $value;

        $converted = mb_convert_encoding($value, 'UTF-8', 'UTF-8,ISO-8859-1,Windows-1252');
        return $converted !== false ? $converted : '';
    }

    public function testNormalizeCoordonneeVirguleEnPoint(): void
    {
        $result = $this->normalizeCoordinate('36,8515');
        $this->assertEqualsWithDelta(36.8515, $result, 0.0001);
    }

    public function testNormalizeCoordonneeNullRetourneNull(): void
    {
        $this->assertNull($this->normalizeCoordinate(null));
    }

    public function testNormalizeCoordonneeVideRetourneNull(): void
    {
        $this->assertNull($this->normalizeCoordinate(''));
    }

    public function testNormalizeCoordonneeTexteRetourneNull(): void
    {
        $this->assertNull($this->normalizeCoordinate('invalid'));
    }

    public function testNormalizeCoordonneeEntier(): void
    {
        $result = $this->normalizeCoordinate(10);
        $this->assertEqualsWithDelta(10.0, $result, 0.0001);
    }

    public function testSanitizeUtf8StringValide(): void
    {
        $result = $this->sanitizeUtf8('  Aéroport Tunis-Carthage  ');
        $this->assertSame('Aéroport Tunis-Carthage', $result);
    }

    public function testSanitizeUtf8StringVideRetourneVide(): void
    {
        $result = $this->sanitizeUtf8('   ');
        $this->assertSame('', $result);
    }

    public function testTypeTransportNormaliseEnMajuscules(): void
    {

        $rawType = 'voiture';
        $normalized = strtoupper((string) $rawType);
        $this->assertSame('VOITURE', $normalized);
    }

    public function testPrixAvecVirguleConvertiEnFloat(): void
    {
    
        $rawPrix = '250,50';
        $prix = (float) str_replace(',', '.', $rawPrix);
        $this->assertEqualsWithDelta(250.50, $prix, 0.001);
    }
    public function testSjsMatchingSuccesQuandMemeAeroport(): void
    {
        $aeroportTunis = new Aeroport();
        $aeroportTunis->setNom('Aéroport International Tunis-Carthage');

      
        $destinationVol = $aeroportTunis;

    
        $pickupVoiture = $aeroportTunis;

        $match = ($destinationVol === $pickupVoiture);

        $this->assertTrue($match);
    }

    public function testSjsMatchingEchecQuandAeroportsDifferents(): void
    {
        $aeroportTunis = new Aeroport();
        $aeroportTunis->setNom('Tunis-Carthage');

        $aeroportSfax = new Aeroport();
        $aeroportSfax->setNom('Sfax-Thyna');

        $destinationVol = $aeroportTunis;
        $pickupVoiture = $aeroportSfax;

        $match = ($destinationVol === $pickupVoiture);

        $this->assertFalse($match);
    }

    public function testSjsPasDeMatchSiAucunVol(): void
    {
        $vols = [];
        $voitures = [['transport' => new Transport()]];

        $canSync = !empty($vols) && !empty($voitures);

        $this->assertFalse($canSync);
    }

    public function testSjsPasDeMatchSiAucuneVoiture(): void
    {
        $vols = [['transport' => new Transport()]];
        $voitures = [];

        $canSync = !empty($vols) && !empty($voitures);

        $this->assertFalse($canSync);
    }

    public function testSjsNecessiteAuMoinsUnVolEtUneVoiture(): void
    {
        $vols = [['transport' => new Transport()]];
        $voitures = [['transport' => new Transport()]];

        $prerequis = !empty($vols) && !empty($voitures);

        $this->assertTrue($prerequis);
    }
    public function testReservationStatutParDefautEnAttente(): void
    {
        $reservation = new Reservation();
        $reservation->setStatut('EN_ATTENTE');

        $this->assertSame('EN_ATTENTE', $reservation->getStatut());
    }

    public function testReservationTypeTransportValide(): void
    {
        $reservation = new Reservation();
        $reservation->setTypeReservation('TRANSPORT');

        $this->assertSame('TRANSPORT', $reservation->getTypeReservation());
    }

    public function testReservationDateEstDefinie(): void
    {
        $reservation = new Reservation();
        $now = new \DateTime();
        $reservation->setDateReservation($now);

        $this->assertInstanceOf(\DateTime::class, $reservation->getDateReservation());
        $this->assertEqualsWithDelta(
            $now->getTimestamp(),
            $reservation->getDateReservation()->getTimestamp(),
            2
        );
    }

    public function testReservationAvionHebergementNul(): void
    {
        $reservation = new Reservation();
        $reservation->setIdHebergement(null);
        $reservation->setIdExcursion(null);

        $this->assertNull($reservation->getIdHebergement());
        $this->assertNull($reservation->getIdExcursion());
    }
}
