<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categories = [
            [
                'nom' => 'Luxe',
                'description' => 'Hébergements haut de gamme avec services premium'
            ],
            [
                'nom' => 'Budget',
                'description' => 'Hébergements économiques et accessibles'
            ],
            [
                'nom' => 'Confort',
                'description' => 'Hébergements avec un bon rapport qualité-prix'
            ],
            [
                'nom' => 'Récréatif',
                'description' => 'Hébergements tournés vers divertissement et loisirs'
            ],
            [
                'nom' => 'Affaires',
                'description' => 'Hébergements pour voyages professionnels'
            ],
            [
                'nom' => 'Maison d\'Hôtes',
                'description' => 'Petits hébergements familiaux et authentiques'
            ],
            [
                'nom' => 'Resort',
                'description' => 'Complexes touristiques tout compris'
            ],
            [
                'nom' => 'Boutique',
                'description' => 'Petits hôtels de charme personnalisés'
            ]
        ];

        foreach ($categories as $data) {
            $categorie = new Categorie();
            $categorie->setNom($data['nom']);
            $categorie->setDescription($data['description']);
            $manager->persist($categorie);
        }

        $manager->flush();
    }
}
