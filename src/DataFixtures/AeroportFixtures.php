<?php

namespace App\DataFixtures;

use App\Entity\Aeroport;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AeroportFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $airports = [
            // French airports
            ['nom' => 'Paris Charles de Gaulle', 'ville' => 'Paris', 'pays' => 'France', 'codeIata' => 'CDG', 'codeIcao' => 'LFPG', 'latitude' => 49.0097, 'longitude' => 2.5479],
            ['nom' => 'Paris Orly', 'ville' => 'Paris', 'pays' => 'France', 'codeIata' => 'ORY', 'codeIcao' => 'LFPO', 'latitude' => 48.7230, 'longitude' => 2.3592],
            ['nom' => 'Lyon-Bâle-Mulhouse', 'ville' => 'Lyon', 'pays' => 'France', 'codeIata' => 'LYS', 'codeIcao' => 'LFLL', 'latitude' => 45.7286, 'longitude' => 5.0910],
            ['nom' => 'Marseille Provence', 'ville' => 'Marseille', 'pays' => 'France', 'codeIata' => 'MRS', 'codeIcao' => 'LFML', 'latitude' => 43.4426, 'longitude' => 5.2147],
            ['nom' => 'Nice Côte d\'Azur', 'ville' => 'Nice', 'pays' => 'France', 'codeIata' => 'NCE', 'codeIcao' => 'LFMN', 'latitude' => 43.6584, 'longitude' => 7.2159],
            ['nom' => 'Toulouse-Blagnac', 'ville' => 'Toulouse', 'pays' => 'France', 'codeIata' => 'TLS', 'codeIcao' => 'LFBO', 'latitude' => 43.6293, 'longitude' => 1.3736],
            ['nom' => 'Nantes Atlantique', 'ville' => 'Nantes', 'pays' => 'France', 'codeIata' => 'NTE', 'codeIcao' => 'LFPN', 'latitude' => 47.1572, 'longitude' => -1.6010],
            ['nom' => 'Bordeaux-Mérignac', 'ville' => 'Bordeaux', 'pays' => 'France', 'codeIata' => 'BOD', 'codeIcao' => 'LFBD', 'latitude' => 44.8283, 'longitude' => -0.6155],

            // German airports
            ['nom' => 'Berlin Brandenburg', 'ville' => 'Berlin', 'pays' => 'Allemagne', 'codeIata' => 'BER', 'codeIcao' => 'EDDB', 'latitude' => 52.3667, 'longitude' => 13.5023],
            ['nom' => 'Munich Franz Josef Strauss', 'ville' => 'Munich', 'pays' => 'Allemagne', 'codeIata' => 'MUC', 'codeIcao' => 'EDDM', 'latitude' => 48.3537, 'longitude' => 11.7753],
            ['nom' => 'Frankfurt am Main', 'ville' => 'Francfort', 'pays' => 'Allemagne', 'codeIata' => 'FRA', 'codeIcao' => 'EDDF', 'latitude' => 50.0379, 'longitude' => 8.5622],
            ['nom' => 'Cologne Bonn', 'ville' => 'Cologne', 'pays' => 'Allemagne', 'codeIata' => 'CGN', 'codeIcao' => 'EDLC', 'latitude' => 50.8659, 'longitude' => 6.8701],
            ['nom' => 'Düsseldorf', 'ville' => 'Düsseldorf', 'pays' => 'Allemagne', 'codeIata' => 'DUS', 'codeIcao' => 'EDDL', 'latitude' => 51.2895, 'longitude' => 6.7683],
            ['nom' => 'Hamburg Helmut Schmidt', 'ville' => 'Hambourg', 'pays' => 'Allemagne', 'codeIata' => 'HAM', 'codeIcao' => 'EDDH', 'latitude' => 53.6304, 'longitude' => 9.9876],

            // Austrian airports
            ['nom' => 'Vienna International', 'ville' => 'Vienne', 'pays' => 'Autriche', 'codeIata' => 'VIE', 'codeIcao' => 'LOWW', 'latitude' => 48.1103, 'longitude' => 16.5697],

            // Italian airports
            ['nom' => 'Rome Fiumicino', 'ville' => 'Rome', 'pays' => 'Italie', 'codeIata' => 'FCO', 'codeIcao' => 'LIRF', 'latitude' => 41.8045, 'longitude' => 12.2508],
            ['nom' => 'Milan Malpensa', 'ville' => 'Milan', 'pays' => 'Italie', 'codeIata' => 'MXP', 'codeIcao' => 'LIMC', 'latitude' => 45.6306, 'longitude' => 8.7283],
            ['nom' => 'Venice Marco Polo', 'ville' => 'Venise', 'pays' => 'Italie', 'codeIata' => 'VCE', 'codeIcao' => 'LIPZ', 'latitude' => 45.5050, 'longitude' => 12.3517],

            // Spanish airports
            ['nom' => 'Madrid Barajas', 'ville' => 'Madrid', 'pays' => 'Espagne', 'codeIata' => 'MAD', 'codeIcao' => 'LEMD', 'latitude' => 40.4721, 'longitude' => -3.6299],
            ['nom' => 'Barcelona El Prat', 'ville' => 'Barcelone', 'pays' => 'Espagne', 'codeIata' => 'BCN', 'codeIcao' => 'LEBL', 'latitude' => 41.2974, 'longitude' => 2.0833],

            // UK airports
            ['nom' => 'London Heathrow', 'ville' => 'Londres', 'pays' => 'Royaume-Uni', 'codeIata' => 'LHR', 'codeIcao' => 'EGLL', 'latitude' => 51.4700, 'longitude' => -0.4543],
            ['nom' => 'London Gatwick', 'ville' => 'Londres', 'pays' => 'Royaume-Uni', 'codeIata' => 'LGW', 'codeIcao' => 'EGKK', 'latitude' => 51.1537, 'longitude' => -0.1821],

            // Belgian airports
            ['nom' => 'Brussels Zaventem', 'ville' => 'Bruxelles', 'pays' => 'Belgique', 'codeIata' => 'BRU', 'codeIcao' => 'EBBR', 'latitude' => 50.9010, 'longitude' => 4.4846],

            // Netherlands airports
            ['nom' => 'Amsterdam Schiphol', 'ville' => 'Amsterdam', 'pays' => 'Pays-Bas', 'codeIata' => 'AMS', 'codeIcao' => 'EHAM', 'latitude' => 52.3086, 'longitude' => 4.7639],

            // Swiss airports
            ['nom' => 'Geneva Cointrin', 'ville' => 'Genève', 'pays' => 'Suisse', 'codeIata' => 'GVA', 'codeIcao' => 'LSGG', 'latitude' => 46.2383, 'longitude' => 6.1092],
            ['nom' => 'Zurich Airport', 'ville' => 'Zurich', 'pays' => 'Suisse', 'codeIata' => 'ZRH', 'codeIcao' => 'LSZH', 'latitude' => 47.4647, 'longitude' => 8.5492],

            // Prague, Czech Republic
            ['nom' => 'Prague Václav Havel', 'ville' => 'Prague', 'pays' => 'République Tchèque', 'codeIata' => 'PRG', 'codeIcao' => 'LKPR', 'latitude' => 50.1008, 'longitude' => 14.2600],

            // Budapest, Hungary
            ['nom' => 'Budapest Ferenc Liszt', 'ville' => 'Budapest', 'pays' => 'Hongrie', 'codeIata' => 'BUD', 'codeIcao' => 'LHBP', 'latitude' => 47.4261, 'longitude' => 19.2611],
        ];

        foreach ($airports as $data) {
            $airport = new Aeroport();
            $airport->setNom($data['nom']);
            $airport->setVille($data['ville']);
            $airport->setPays($data['pays']);
            $airport->setCodeIata($data['codeIata']);
            $airport->setCodeIcao($data['codeIcao']);
            $airport->setLatitude($data['latitude']);
            $airport->setLongitude($data['longitude']);
            $airport->setType('airport');
            $manager->persist($airport);
        }

        $manager->flush();
    }
}
