<?php

namespace App\Tests\Service;

use App\Entity\Excursion;
use App\Service\ExcursionManager;
use PHPUnit\Framework\TestCase;

class ExcursionManagerTest extends TestCase
{
    public function testValidExcursion()
    {
        $excursion = new Excursion();
        $excursion->setTitre('Voyage Djerba');
        $excursion->setPrixAdulte(250);
        $excursion->setNombrePlacesDisponibles(20);
        $excursion->setDate(new \DateTime('+10 days'));

        $manager = new ExcursionManager();

        $this->assertTrue($manager->validate($excursion));
    }

    public function testExcursionWithoutTitle()
    {
        $this->expectException(\InvalidArgumentException::class);

        $excursion = new Excursion();
        $excursion->setPrixAdulte(250);
        $excursion->setNombrePlacesDisponibles(20);
        $excursion->setDate(new \DateTime('+10 days'));

        $manager = new ExcursionManager();
        $manager->validate($excursion);
    }

    public function testExcursionWithNegativePrice()
    {
        $this->expectException(\InvalidArgumentException::class);

        $excursion = new Excursion();
        $excursion->setTitre('Voyage');
        $excursion->setPrixAdulte(-50);
        $excursion->setNombrePlacesDisponibles(20);
        $excursion->setDate(new \DateTime('+10 days'));

        $manager = new ExcursionManager();
        $manager->validate($excursion);
    }

    public function testExcursionWithPastDate()
    {
        $this->expectException(\InvalidArgumentException::class);

        $excursion = new Excursion();
        $excursion->setTitre('Voyage');
        $excursion->setPrixAdulte(200);
        $excursion->setNombrePlacesDisponibles(20);
        $excursion->setDate(new \DateTime('-2 days'));

        $manager = new ExcursionManager();
        $manager->validate($excursion);
    }
}