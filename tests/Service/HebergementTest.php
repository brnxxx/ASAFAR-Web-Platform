<?php

namespace App\Tests;

use App\Entity\Hebergement;
use PHPUnit\Framework\TestCase;

class HebergementTest extends TestCase
{
    public function testCreateHebergement(): void
    {
        $h = new Hebergement();
        $h->setNom('Riad Tunis');
        $h->setType('HOTEL');
        $h->setLocalisation('Tunis');
        $h->setDescription('Beautiful riad in medina');

        $this->assertSame('Riad Tunis', $h->getNom());
        $this->assertSame('HOTEL', $h->getType());
        $this->assertSame('Tunis', $h->getLocalisation());
    }

    public function testHebergementPrice(): void
    {
        $h = new Hebergement();
        $h->setPrixParNuit('99.99');
        $h->setDisponibilite('DISPONIBLE');

        $this->assertSame('99.99', $h->getPrixParNuit());
        $this->assertSame('DISPONIBLE', $h->getDisponibilite());
    }

    public function testHebergementRating(): void
    {
        $h = new Hebergement();
        $h->setNoteMoyenne('4.5');
        $h->setNbNotes(25);

        $this->assertSame('4.5', $h->getNoteMoyenne());
        $this->assertSame(25, $h->getNbNotes());
    }
}
