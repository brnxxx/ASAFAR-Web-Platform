<?php

namespace App\Tests\Service;

use App\Entity\Reclamation;
use App\Service\ReclamationManager;
use PHPUnit\Framework\TestCase;

class ReclamationManagerTest extends TestCase
{
    public function testValidReclamation()
    {
        $r = new Reclamation();
        $r->setSujet('Probleme paiement');
        $r->setDescription('Impossible de payer ma reservation');
        $r->setTypeReclamation('LOISIR');
        $r->setIdUser(1);
        $r->setDateReclamation(new \DateTime());

        $manager = new ReclamationManager();

        $this->assertTrue($manager->validate($r));
        $this->assertEquals('NORMAL', $r->getPriorite());
    }

    public function testUrgentReclamation()
    {
        $r = new Reclamation();
        $r->setSujet('URGENT');
        $r->setDescription('urgent problème réservation');
        $r->setTypeReclamation('LOISIR');
        $r->setIdUser(1);
        $r->setDateReclamation(new \DateTime());

        (new ReclamationManager())->validate($r);

        $this->assertEquals('URGENT', $r->getPriorite());
    }

    public function testEmptySujet()
    {
        $this->expectException(\InvalidArgumentException::class);

        $r = new Reclamation();
        $r->setSujet('');
        $r->setDescription('Description correcte');
        $r->setTypeReclamation('LOISIR');
        $r->setIdUser(1);
        $r->setDateReclamation(new \DateTime());

        (new ReclamationManager())->validate($r);
    }

    public function testShortDescription()
    {
        $this->expectException(\InvalidArgumentException::class);

        $r = new Reclamation();
        $r->setSujet('Bug');
        $r->setDescription('court');
        $r->setTypeReclamation('LOISIR');
        $r->setIdUser(1);
        $r->setDateReclamation(new \DateTime());

        (new ReclamationManager())->validate($r);
    }
}