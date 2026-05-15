<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
#[ORM\Table(name: 'reservation')]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idReservation', type: 'integer')]
    // @phpstan-ignore-next-line
    private ?int $idReservation = null;

   
    #[ORM\Column(name: 'dateReservation', type: 'datetime', nullable: false)]
    private \DateTimeInterface $dateReservation;  // ✅

    #[ORM\Column(name: 'typeReservation', type: 'string', length: 50, nullable: false)]
    private string $typeReservation = '';  // ✅

    #[ORM\Column(name: 'montantTotal', type: 'integer', nullable: false)]
    private int $montantTotal = 0;  // ✅

    #[ORM\Column(name: 'statut', type: 'string', length: 50, nullable: false)]
    private string $statut = '';  // ✅

    #[ORM\Column(name: 'idUser', type: 'integer', nullable: false)]
    private int $idUser = 0;  // ✅

    #[ORM\Column(name: 'idExcursion', type: 'integer', nullable: true)]
    private ?int $idExcursion = null;

    #[ORM\Column(name: 'idHebergement', type: 'integer', nullable: true)]
    private ?int $idHebergement = null;

    #[ORM\ManyToOne(targetEntity: Hebergement::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'idHebergement', referencedColumnName: 'idHebergement', nullable: true, onDelete: 'SET NULL')]
    private ?Hebergement $hebergement = null;

    #[ORM\Column(name: 'id_transport', type: 'integer', nullable: true)]
    private ?int $idTransport = null;

    #[ORM\ManyToOne(targetEntity: Transport::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'id_transport', referencedColumnName: 'id_transport', nullable: true, onDelete: 'SET NULL')]
    private ?Transport $transport = null;

    #[ORM\Column(name: 'nb_adultes', type: 'integer')]
    private int $nbAdultes = 0;

    #[ORM\Column(name: 'nb_enfants', type: 'integer')]
    private int $nbEnfants = 0;

    #[ORM\Column(name: 'nb_bebes', type: 'integer')]
    private int $nbBebes = 0;

    #[ORM\Column(name: 'dateExcursion', type: 'date', nullable: true)]
    private ?\DateTimeInterface $dateExcursion = null;

    #[ORM\Column(name: 'nbPersonnes', type: 'integer', nullable: true)]
    private ?int $nbPersonnes = null;

    #[ORM\Column(name: 'dateDepart', type: 'date', nullable: true)]
    private ?\DateTimeInterface $dateDepart = null;

    #[ORM\Column(name: 'dateArrivee', type: 'date', nullable: true)]
    private ?\DateTimeInterface $dateArrivee = null;

    #[ORM\Column(name: 'codePromo', type: 'string', length: 50, nullable: true)]
    private ?string $codePromo = null;

    #[ORM\Column(name: 'reductionPromo', type: 'integer', nullable: true)]
    private ?int $reductionPromo = 0;

    public function __construct()
    {
        $this->dateReservation = new \DateTime();  // ✅
    }

    public function getIdReservation(): ?int { return $this->idReservation; }

    public function getDateReservation(): \DateTimeInterface { return $this->dateReservation; }  // ✅
    public function setDateReservation(\DateTimeInterface $date): self { $this->dateReservation = $date; return $this; }  // ✅

    public function getTypeReservation(): string { return $this->typeReservation; }  // ✅
    public function setTypeReservation(string $type): self { $this->typeReservation = $type; return $this; }  // ✅

    public function getMontantTotal(): int { return $this->montantTotal; }  // ✅
    public function setMontantTotal(int $total): self { $this->montantTotal = $total; return $this; }  // ✅

        /**
         * Get the total price for the reservation (for compatibility)
         */
        public function getPrixTotal(): int
        {
            // If montantTotal is the total price, return it
            return $this->montantTotal;
        }

    public function getStatut(): string { return $this->statut; }  // ✅
    public function setStatut(string $statut): self { $this->statut = $statut; return $this; }  // ✅

    public function getIdUser(): int { return $this->idUser; }  // ✅
    public function setIdUser(int $idUser): self { $this->idUser = $idUser; return $this; }  // ✅

    public function getIdExcursion(): ?int { return $this->idExcursion; }
    public function setIdExcursion(?int $idExcursion): self { $this->idExcursion = $idExcursion; return $this; }

    public function getIdHebergement(): ?int { return $this->idHebergement; }
    public function setIdHebergement(?int $idHebergement): self { $this->idHebergement = $idHebergement; return $this; }

    public function getIdTransport(): ?int { return $this->idTransport; }
    public function setIdTransport(?int $idTransport): self { $this->idTransport = $idTransport; return $this; }

    public function getTransport(): ?Transport { return $this->transport; }
    public function setTransport(?Transport $transport): static { $this->transport = $transport; return $this; }

    public function getNbAdultes(): int { return $this->nbAdultes; }
    public function setNbAdultes(int $nbAdultes): self { $this->nbAdultes = $nbAdultes; return $this; }

    public function getNbEnfants(): int { return $this->nbEnfants; }
    public function setNbEnfants(int $nbEnfants): self { $this->nbEnfants = $nbEnfants; return $this; }

    public function getNbBebes(): int { return $this->nbBebes; }
    public function setNbBebes(int $nbBebes): self { $this->nbBebes = $nbBebes; return $this; }

    public function getDateExcursion(): ?\DateTimeInterface { return $this->dateExcursion; }
    public function setDateExcursion(?\DateTimeInterface $dateExcursion): self { $this->dateExcursion = $dateExcursion; return $this; }

    public function getNbPersonnes(): ?int { return $this->nbPersonnes; }
    public function setNbPersonnes(?int $nbPersonnes): self { $this->nbPersonnes = $nbPersonnes; return $this; }

    public function getDateDepart(): ?\DateTimeInterface { return $this->dateDepart; }
    public function setDateDepart(?\DateTimeInterface $dateDepart): self { $this->dateDepart = $dateDepart; return $this; }

    public function getDateArrivee(): ?\DateTimeInterface { return $this->dateArrivee; }
    public function setDateArrivee(?\DateTimeInterface $dateArrivee): self { $this->dateArrivee = $dateArrivee; return $this; }

    public function getCodePromo(): ?string { return $this->codePromo; }
    public function setCodePromo(?string $codePromo): self { $this->codePromo = $codePromo; return $this; }

    public function getReductionPromo(): ?int { return $this->reductionPromo; }
    public function setReductionPromo(?int $reductionPromo): self { $this->reductionPromo = $reductionPromo; return $this; }

    public function getHebergement(): ?Hebergement { return $this->hebergement; }
    public function setHebergement(?Hebergement $hebergement): static { $this->hebergement = $hebergement; return $this; }

  }