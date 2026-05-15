<?php

namespace App\Entity;

use App\Repository\TransportRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[ORM\Entity(repositoryClass: TransportRepository::class)]
#[ORM\Table(name: 'transport')]
#[Assert\Callback('validateTransportRules')]
class Transport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer', name: 'id_transport')]
    private int $idTransport = 0;

    #[ORM\Column(type: 'string', length: 150)]
    #[Assert\NotBlank(message: 'Le nom du transport est obligatoire.')]
    #[Assert\Length(
        min: 3,
        max: 150,
        minMessage: 'Le nom doit contenir au moins {{ limit }} caracteres.',
        maxMessage: 'Le nom ne doit pas depasser {{ limit }} caracteres.'
    )]
    private string $nom = '';

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\NotBlank(message: 'Le type de transport est obligatoire.')]
    #[Assert\Choice(
        choices: ['AVION', 'VOITURE'],
        message: 'Le type doit etre AVION ou VOITURE.'
    )]
    private string $type = '';

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    #[Assert\NotBlank(message: 'Le prix est obligatoire.')]
    #[Assert\Regex(
        pattern: '/^\d+(?:[\.,]\d{1,2})?$/',
        message: 'Le prix doit etre un nombre valide avec 2 decimales maximum.'
    )]
    private string $prix = '';

    #[ORM\Column(type: 'text', nullable: true)]
    #[Assert\Length(
        max: 500,
        maxMessage: 'La description ne doit pas depasser {{ limit }} caracteres.'
    )]
    private ?string $description = null;

    #[ORM\Column(type: 'datetime_immutable', name: 'date_creation')]
    #[Assert\NotNull(message: 'La date de creation est obligatoire.')]
    private \DateTimeImmutable $dateCreation;

    #[ORM\Column(type: 'float', options: ['default' => 0])]
    #[Assert\Range(
        min: -90,
        max: 90,
        notInRangeMessage: 'La latitude doit etre comprise entre {{ min }} et {{ max }}.'
    )]
    private float $latitude = 0;

    #[ORM\Column(type: 'float', options: ['default' => 0])]
    #[Assert\Range(
        min: -180,
        max: 180,
        notInRangeMessage: 'La longitude doit etre comprise entre {{ min }} et {{ max }}.'
    )]
    private float $longitude = 0;

    #[ORM\Column(type: 'string', length: 50, nullable: true, name: 'idUser')]
    #[Assert\Length(
        max: 50,
        maxMessage: 'L identifiant utilisateur ne doit pas depasser {{ limit }} caracteres.'
    )]
    private ?string $idUser = null;

    #[ORM\ManyToOne(targetEntity: Aeroport::class)]
    #[ORM\JoinColumn(name: 'aeroport_depart_id', referencedColumnName: 'id', onDelete: 'SET NULL', nullable: true)]
    private ?Aeroport $aeroportDepart = null;

    #[ORM\ManyToOne(targetEntity: Aeroport::class)]
    #[ORM\JoinColumn(name: 'aeroport_destination_id', referencedColumnName: 'id', onDelete: 'SET NULL', nullable: true)]
    private ?Aeroport $aeroportDestination = null;

    #[ORM\ManyToOne(targetEntity: Aeroport::class)]
    #[ORM\JoinColumn(name: 'aeroport_prise_en_charge_id', referencedColumnName: 'id', onDelete: 'SET NULL', nullable: true)]
    private ?Aeroport $aeroportPriseEnCharge = null;

    /** @var Collection<int, Reservation> */
    #[ORM\OneToMany(mappedBy: 'transport', targetEntity: Reservation::class)]
    private Collection $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getIdTransport(): ?int
    {
        return $this->idTransport ?: null;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = trim($nom);

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = strtoupper(trim($type));

        return $this;
    }

    public function getPrix(): string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = trim(str_replace(',', '.', $prix));

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $description = $description !== null ? trim($description) : null;
        $this->description = $description === '' ? null : $description;

        return $this;
    }

    public function getDateCreation(): \DateTimeImmutable
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeImmutable $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getIdUser(): ?string
    {
        return $this->idUser;
    }

    public function setIdUser(?string $idUser): static
    {
        $idUser = $idUser !== null ? trim($idUser) : null;
        $this->idUser = $idUser === '' ? null : $idUser;

        return $this;
    }

    public function getAeroportDepart(): ?Aeroport
    {
        return $this->aeroportDepart;
    }

    public function setAeroportDepart(?Aeroport $aeroportDepart): static
    {
        $this->aeroportDepart = $aeroportDepart;

        return $this;
    }

    public function getAeroportDestination(): ?Aeroport
    {
        return $this->aeroportDestination;
    }

    public function setAeroportDestination(?Aeroport $aeroportDestination): static
    {
        $this->aeroportDestination = $aeroportDestination;

        return $this;
    }

    public function getAeroportPriseEnCharge(): ?Aeroport
    {
        return $this->aeroportPriseEnCharge;
    }

    public function setAeroportPriseEnCharge(?Aeroport $aeroportPriseEnCharge): static
    {
        $this->aeroportPriseEnCharge = $aeroportPriseEnCharge;

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): static
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setTransport($this);
        }
        return $this;
    }

    public function removeReservation(Reservation $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            if ($reservation->getTransport() === $this) {
                $reservation->setTransport(null);
            }
        }
        return $this;
    }

    public function validateTransportRules(ExecutionContextInterface $context): void
    {
        $type = strtoupper(trim((string) $this->type));

        $priceRaw = str_replace(',', '.', (string) $this->prix);
        if ($priceRaw === '' || !is_numeric($priceRaw) || (float) $priceRaw <= 0) {
            $context->buildViolation('Le prix doit etre strictement superieur a 0.')
                ->atPath('prix')
                ->addViolation();
        }

        if ($type === 'AVION') {
            if ($this->aeroportDepart === null) {
                $context->buildViolation('Un aeroport de depart est obligatoire pour un transport AVION.')
                    ->atPath('aeroportDepart')
                    ->addViolation();
            }

            if ($this->aeroportDestination === null) {
                $context->buildViolation('Un aeroport de destination est obligatoire pour un transport AVION.')
                    ->atPath('aeroportDestination')
                    ->addViolation();
            }

            if (
                $this->aeroportDepart !== null
                && $this->aeroportDestination !== null
                && $this->aeroportDepart->getId() === $this->aeroportDestination->getId()
            ) {
                $context->buildViolation('Les aeroports de depart et destination doivent etre differents.')
                    ->atPath('aeroportDestination')
                    ->addViolation();
            }

            if ($this->aeroportPriseEnCharge !== null) {
                $context->buildViolation('Le point de prise en charge doit etre vide pour un transport AVION.')
                    ->atPath('aeroportPriseEnCharge')
                    ->addViolation();
            }

            return;
        }

        if ($type === 'VOITURE') {
            if ($this->aeroportPriseEnCharge === null) {
                $context->buildViolation('Un point de prise en charge est obligatoire pour un transport VOITURE.')
                    ->atPath('aeroportPriseEnCharge')
                    ->addViolation();
            }

            if ($this->aeroportDepart !== null) {
                $context->buildViolation('L aeroport de depart doit etre vide pour un transport VOITURE.')
                    ->atPath('aeroportDepart')
                    ->addViolation();
            }

            if ($this->aeroportDestination !== null) {
                $context->buildViolation('L aeroport de destination doit etre vide pour un transport VOITURE.')
                    ->atPath('aeroportDestination')
                    ->addViolation();
            }
        }
    }
}
