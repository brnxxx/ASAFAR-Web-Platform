<?php

namespace App\Tests;

use App\Entity\Transport;
use PHPUnit\Framework\TestCase;

class TransportTest extends TestCase
{
    public function testCreateTransport(): void
    {
        $transport = new Transport();
        $transport->setNom('Flight Paris to Tunis');
        $transport->setType('AVION');
        $transport->setPrix('250.50');

        $this->assertSame('Flight Paris to Tunis', $transport->getNom());
        $this->assertSame('AVION', $transport->getType());
        $this->assertSame('250.50', $transport->getPrix());
    }

    public function testTransportCoordinates(): void
    {
        $transport = new Transport();
        $transport->setLatitude(36.8065);
        $transport->setLongitude(10.1815);

        $this->assertEqualsWithDelta(36.8065, $transport->getLatitude(), 0.0001);
        $this->assertEqualsWithDelta(10.1815, $transport->getLongitude(), 0.0001);
    }

    public function testTransportTypeNormalization(): void
    {
        $transport = new Transport();
        $transport->setType('voiture');

        $this->assertSame('VOITURE', $transport->getType());
    }
}
