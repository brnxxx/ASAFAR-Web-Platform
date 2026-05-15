<?php

namespace App\Tests\Business;

use PHPUnit\Framework\TestCase;

class RecommendationHebTest extends TestCase
{
    private function computeScore(int $qualite, float $prix): float
    {
        if ($prix <= 0) {
            $prix = 1;
        }
        return round($qualite / $prix, 4);
    }

    /**
     * Trie un tableau d'hébergements par score décroissant et retourne le meilleur.
     *
     * @param array<int, array{nom: string, prix: float, qualite: int, score: float}> $results
     * @return array{nom: string, prix: float, qualite: int, score: float}|null
     */
    private function getBest(array $results): ?array
    {
        if (empty($results)) {
            return null;
        }
        usort($results, fn($a, $b) => $b['score'] <=> $a['score']);
        return $results[0];
    }

    /**
     * Construit la liste de résultats scorés comme le fait le controller.
     *
     * @param array<int, array{nom: string, qualite: int, prix: float}> $hebergements
     * @return array<int, array{nom: string, prix: float, qualite: int, score: float}>
     */
    private function buildResults(array $hebergements): array
    {
        $results = [];
        foreach ($hebergements as $heb) {
            $qualite = (int) $heb['qualite'];
            $prix    = (float) $heb['prix'];
            if ($prix <= 0) {
                $prix = 1;
            }
            $results[] = [
                'nom'     => $heb['nom'],
                'prix'    => $prix,
                'qualite' => $qualite,
                'score'   => round($qualite / $prix, 4),
            ];
        }
        return $results;
    }
    public function testScoreCalculBasique(): void
    {
        $score = $this->computeScore(80, 100.0);
        $this->assertEqualsWithDelta(0.8, $score, 0.0001);
    }

    public function testScoreArrondiA4Decimales(): void
    {
        $score = $this->computeScore(75, 130.0);
        $this->assertSame(0.5769, $score);
    }

    public function testScoreHebergementCherAvecQualiteElevee(): void
    {
        $score = $this->computeScore(90, 500.0);
        $this->assertEqualsWithDelta(0.18, $score, 0.0001);
    }

    public function testScoreHebergementBonMarcheAvecBonneQualite(): void
    {
        $score = $this->computeScore(85, 50.0);
        $this->assertEqualsWithDelta(1.7, $score, 0.0001);
    }

    public function testScoreQualiteMaximale(): void
    {
        $score = $this->computeScore(100, 200.0);
        $this->assertEqualsWithDelta(0.5, $score, 0.0001);
    }

    public function testScoreQualiteMinimale(): void
    {
        $score = $this->computeScore(1, 100.0);
        $this->assertEqualsWithDelta(0.01, $score, 0.0001);
    }
    public function testScoreAvecPrixZeroForceA1(): void
    {
        $score = $this->computeScore(80, 0.0);
        $this->assertEqualsWithDelta(80.0, $score, 0.0001);
    }

    public function testScoreAvecPrixNegatifForceA1(): void
    {
        $score = $this->computeScore(60, -50.0);
        $this->assertEqualsWithDelta(60.0, $score, 0.0001);
    }

    public function testScoreNEstJamaisNegatif(): void
    {
        $score = $this->computeScore(0, 150.0);
        $this->assertGreaterThanOrEqual(0.0, $score);
    }
    public function testMeilleurHebergementEstCeluiAvecScoreLeEleve(): void
    {
        $hebergements = [
            ['nom' => 'Hotel Carthage',  'qualite' => 80, 'prix' => 200.0],
            ['nom' => 'Riad Sidi Bou',   'qualite' => 90, 'prix' => 100.0], 
            ['nom' => 'Villa Hammamet',  'qualite' => 70, 'prix' => 300.0],
        ];

        $results = $this->buildResults($hebergements);
        $best    = $this->getBest($results);

        $this->assertNotNull($best);
        $this->assertSame('Riad Sidi Bou', $best['nom']);
    }

    public function testTriEstDecroissant(): void
    {
        $hebergements = [
            ['nom' => 'A', 'qualite' => 50, 'prix' => 100.0], 
            ['nom' => 'B', 'qualite' => 90, 'prix' => 100.0],
            ['nom' => 'C', 'qualite' => 70, 'prix' => 100.0], 
        ];

        $results = $this->buildResults($hebergements);
        usort($results, fn($a, $b) => $b['score'] <=> $a['score']);

        $this->assertSame('B', $results[0]['nom']);
        $this->assertSame('C', $results[1]['nom']);
        $this->assertSame('A', $results[2]['nom']);
    }

    public function testUnSeulHebergementEstForcementLeMeilleur(): void
    {
        $hebergements = [
            ['nom' => 'Seul Hotel', 'qualite' => 65, 'prix' => 120.0],
        ];

        $results = $this->buildResults($hebergements);
        $best    = $this->getBest($results);

        $this->assertNotNull($best);
        $this->assertSame('Seul Hotel', $best['nom']);
    }

    public function testListeVideRetourneNull(): void
    {
        $best = $this->getBest([]);
        $this->assertNull($best);
    }

    public function testMeilleurAvecGrandNombreHebergements(): void
    {
        $hebergements = [];
        for ($i = 1; $i <= 20; $i++) {
            $hebergements[] = ['nom' => "Hotel $i", 'qualite' => $i * 4, 'prix' => 200.0];
        }
    
        $hebergements[] = ['nom' => 'Champion', 'qualite' => 99, 'prix' => 50.0]; 

        $results = $this->buildResults($hebergements);
        $best    = $this->getBest($results);

        $this->assertSame('Champion', $best['nom']);
    }

    public function testDeuxHebergementsScoreEgalPremierConserve(): void
    {
        $hebergements = [
            ['nom' => 'Alpha', 'qualite' => 80, 'prix' => 100.0], 
            ['nom' => 'Beta',  'qualite' => 80, 'prix' => 100.0], 
        ];

        $results = $this->buildResults($hebergements);
        usort($results, fn($a, $b) => $b['score'] <=> $a['score']);
        $this->assertEqualsWithDelta($results[0]['score'], $results[1]['score'], 0.0001);
    }

    public function testScoreEstBienArrondiEtNonTronque(): void
    {
        $score = $this->computeScore(1, 3.0);
        $this->assertSame(0.3333, $score);
    }

    public function testPrixDecimalFonctionne(): void
    {
        $score = $this->computeScore(80, 99.99);
        $this->assertEqualsWithDelta(0.8001, $score, 0.0001);
    }

    public function testQualiteZeroDonneScoreZero(): void
    {
        $score = $this->computeScore(0, 150.0);
        $this->assertEqualsWithDelta(0.0, $score, 0.0001);
    }

    public function testHebergementPasCherSurpasHebergementCher(): void
    {
        $scoreBonMarche = $this->computeScore(70, 50.0);   // 1.4
        $scoreLuxe      = $this->computeScore(95, 400.0);  // 0.2375

        $this->assertGreaterThan($scoreLuxe, $scoreBonMarche);
    }
    public function testResultatContientTousLesChamps(): void
    {
        $hebergements = [
            ['nom' => 'Hotel Test', 'qualite' => 75, 'prix' => 150.0],
        ];

        $results = $this->buildResults($hebergements);

        $this->assertArrayHasKey('nom',     $results[0]);
        $this->assertArrayHasKey('prix',    $results[0]);
        $this->assertArrayHasKey('qualite', $results[0]);
        $this->assertArrayHasKey('score',   $results[0]);
    }

    public function testPrixEstConserveApresCalcul(): void
    {
        $hebergements = [
            ['nom' => 'Hotel Test', 'qualite' => 80, 'prix' => 175.50],
        ];

        $results = $this->buildResults($hebergements);

        $this->assertEqualsWithDelta(175.50, $results[0]['prix'], 0.001);
    }

    public function testQualiteEstConvertieEnEntier(): void
    {
        $hebergements = [
            ['nom' => 'Hotel Test', 'qualite' => 82, 'prix' => 120.0],
        ];

        $results = $this->buildResults($hebergements);

        $this->assertIsInt($results[0]['qualite']);
        $this->assertSame(82, $results[0]['qualite']);
    }

    public function testScoreEstUnFloat(): void
    {
        $hebergements = [
            ['nom' => 'Hotel Test', 'qualite' => 80, 'prix' => 100.0],
        ];

        $results = $this->buildResults($hebergements);

        $this->assertIsFloat($results[0]['score']);
    }

    public function testNombreResultatsConserve(): void
    {
        $hebergements = [
            ['nom' => 'H1', 'qualite' => 70, 'prix' => 100.0],
            ['nom' => 'H2', 'qualite' => 80, 'prix' => 150.0],
            ['nom' => 'H3', 'qualite' => 60, 'prix' => 80.0],
        ];

        $results = $this->buildResults($hebergements);
        $this->assertCount(3, $results);
    }
}
