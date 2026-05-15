<?php

namespace App\Tests\Service;

use App\Entity\Reservation;
use App\Service\ReservationManager;
use PHPUnit\Framework\TestCase;

class ReservationManagerTest extends TestCase
{
    public function testValidReservation()
    {
        $reservation = new Reservation();
        $reservation->setNbAdultes(2);
        $reservation->setNbEnfants(1);
        $reservation->setNbBebes(1);

        $manager = new ReservationManager();

        $this->assertTrue($manager->validate($reservation));
        $this->assertEquals(4, $reservation->getNbPersonnes());
        $this->assertEquals('EN_ATTENTE', $reservation->getStatut());
    }

    public function testReservationWithoutAdult()
    {
        $this->expectException(\InvalidArgumentException::class);

        $reservation = new Reservation();
        $reservation->setNbAdultes(0);
        $reservation->setNbEnfants(2);
        $reservation->setNbBebes(1);

        (new ReservationManager())->validate($reservation);
    }

    public function testInvalidParticipants()
    {
        $this->expectException(\InvalidArgumentException::class);

        $reservation = new Reservation();
        $reservation->setNbAdultes(0);
        $reservation->setNbEnfants(0);
        $reservation->setNbBebes(0);

        (new ReservationManager())->validate($reservation);
    }
}