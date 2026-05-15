<?php

namespace App\Entity;

use App\Repository\PaiementRepository;
use Doctrine\ORM\Mapping as ORM;
  use App\Entity\Reservation;

#[ORM\Entity(repositoryClass: PaiementRepository::class)]
#[ORM\Table(name: 'paiement')]
class Paiement
{
#[ORM\Id]
#[ORM\GeneratedValue]
#[ORM\Column(name: 'id_paiement', type: 'integer')]
// @phpstan-ignore-next-line
private ?int $idPaiement = null;

#[ORM\ManyToOne(targetEntity: Reservation::class)]
#[ORM\JoinColumn(name: 'id_reservation', referencedColumnName: 'idReservation', nullable: true)]
private ?Reservation $reservation = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $montant = null;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private ?string $methode = null;

    #[ORM\Column(type: 'string', length: 30, nullable: true)]
    private ?string $statut = null;

    #[ORM\Column(name: 'date_paiement', type: 'datetime', nullable: true, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeInterface $datePaiement = null;

    #[ORM\Column(type: 'float', nullable: true, options: ['default' => 0])]
    private ?float $reduction = 0;

    #[ORM\Column(name: 'stripe_payment_id', type: 'string', length: 255, nullable: true)]
    private ?string $stripePaymentId = null;

    // ───── Getters & Setters ─────

    public function getIdPaiement(): ?int
    {
        return $this->idPaiement;
    }

public function getReservation(): ?Reservation
{
    return $this->reservation;
}

public function setReservation(?Reservation $reservation): self
{
    $this->reservation = $reservation;
    return $this;
}

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(?float $montant): self
    {
        $this->montant = $montant;
        return $this;
    }

    public function getMethode(): ?string
    {
        return $this->methode;
    }

    public function setMethode(?string $methode): self
    {
        $this->methode = $methode;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public function getDatePaiement(): ?\DateTimeInterface
    {
        return $this->datePaiement;
    }

    public function setDatePaiement(?\DateTimeInterface $datePaiement): self
    {
        $this->datePaiement = $datePaiement;
        return $this;
    }

    public function getReduction(): ?float
    {
        return $this->reduction;
    }

    public function setReduction(?float $reduction): self
    {
        $this->reduction = $reduction;
        return $this;
    }

    public function getStripePaymentId(): ?string
    {
        return $this->stripePaymentId;
    }

    public function setStripePaymentId(?string $stripePaymentId): self
    {
        $this->stripePaymentId = $stripePaymentId;
        return $this;
    }
}