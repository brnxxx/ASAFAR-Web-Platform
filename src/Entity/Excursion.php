<?php

namespace App\Entity;

use App\Repository\ExcursionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Rating;

#[ORM\Entity(repositoryClass: ExcursionRepository::class)]
#[ORM\Table(name: 'excursion')]
class Excursion
{
    // ===================== ID =====================
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idExcursion', type: 'integer')]
    // @phpstan-ignore-next-line
    private ?int $idExcursion = null;

    // ===================== RUNTIME-ONLY (not persisted) =====================
    /** @var mixed */
    public mixed $prixData = null;

    /** @var array<string, mixed>|null */
    public ?array $weather = null;

    // ===================== INFOS PRINCIPALES =====================
    #[ORM\Column(length: 150, nullable: false)]
    #[Assert\NotBlank(message: "Le titre est obligatoire")]
    #[Assert\Length(min: 3)]
    #[Assert\Regex(pattern: "/^[^<>]*$/", message: "HTML interdit")]
    private string $titre = '';  // ✅

    #[ORM\Column(type: Types::TEXT, nullable: false)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 15)]
    #[Assert\Regex(pattern: "/^[^<>]*$/", message: "HTML interdit")]
    private string $description = '';  // ✅

    #[ORM\Column(length: 100, nullable: false)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3)]
    #[Assert\Regex(pattern: "/^[^<>]*$/", message: "HTML interdit")]
    private string $lieu = '';  // ✅

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: false)]
    #[Assert\NotNull]
    #[Assert\GreaterThan("today")]
    private \DateTimeInterface $date;  // ✅

    #[ORM\Column(type: 'integer', nullable: false)]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private int $duree = 0;  // ✅

    // ===================== PLACES =====================
    #[ORM\Column(name: 'nombrePlacesDisponibles', type: 'integer', nullable: false)]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private int $nombrePlacesDisponibles = 0;  // ✅

    // ===================== PRIX =====================
    #[ORM\Column(name: 'prix_adulte', type: 'float', nullable: false)]
    #[Assert\NotBlank]
    #[Assert\GreaterThanOrEqual(0)]
    private float $prixAdulte = 0.0;  // ✅

    #[ORM\Column(name: 'prix_enfant', type: 'float', nullable: false)]
    #[Assert\NotBlank]
    #[Assert\GreaterThanOrEqual(0)]
    private float $prixEnfant = 0.0;  // ✅

    #[ORM\Column(name: 'prix_bebe', type: 'float', nullable: false)]
    #[Assert\NotBlank]
    #[Assert\GreaterThanOrEqual(0)]
    private float $prixBebe = 0.0;  // ✅

    // ===================== AUTRES =====================
    #[ORM\Column(name: 'image_url', length: 500, nullable: true)]
    private ?string $imageUrl = null;

    #[ORM\Column(length: 20, nullable: true, options: ['default' => 'OUTDOOR'])]
    private ?string $type = 'OUTDOOR';

    // ===================== RELATIONS =====================
    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy: 'excursions')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull]
    private ?Categorie $categorie = null;

    /** @var Collection<int, Rating> */
    #[ORM\OneToMany(mappedBy: 'excursion', targetEntity: Rating::class)]
    private Collection $ratings;

    // ===================== MAP =====================
    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $latitude = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $longitude = null;

    // ===================== CONSTRUCT =====================
    public function __construct()
    {
        $this->ratings = new ArrayCollection();
    }

    // ===================== GETTERS =====================
    public function getIdExcursion(): ?int { return $this->idExcursion; }
    public function getTitre(): string { return $this->titre; }
    public function getDescription(): string { return $this->description; }
    public function getLieu(): string { return $this->lieu; }
    public function getDate(): \DateTimeInterface { return $this->date; }
    public function getDuree(): int { return $this->duree; }
    public function getNombrePlacesDisponibles(): int { return $this->nombrePlacesDisponibles; }
    public function getPrixAdulte(): float { return $this->prixAdulte; }
    public function getPrixEnfant(): float { return $this->prixEnfant; }
    public function getPrixBebe(): float { return $this->prixBebe; }
    public function getImageUrl(): ?string { return $this->imageUrl; }
    public function getType(): ?string { return $this->type; }
    public function getCategorie(): ?Categorie { return $this->categorie; }
    public function getLatitude(): ?float { return $this->latitude; }
    public function getLongitude(): ?float { return $this->longitude; }

    /** @return Collection<int, Rating> */
    public function getRatings(): Collection { return $this->ratings; }

    // ===================== SETTERS =====================
    public function setTitre(string $v): static { $this->titre = $v; return $this; }
    public function setDescription(string $v): static { $this->description = $v; return $this; }
    public function setLieu(string $v): static { $this->lieu = $v; return $this; }
    public function setDate(\DateTimeInterface $v): static { $this->date = $v; return $this; }
    public function setDuree(int $v): static { $this->duree = $v; return $this; }
    public function setNombrePlacesDisponibles(int $v): static { $this->nombrePlacesDisponibles = $v; return $this; }
    public function setPrixAdulte(float $v): static { $this->prixAdulte = $v; return $this; }
    public function setPrixEnfant(float $v): static { $this->prixEnfant = $v; return $this; }
    public function setPrixBebe(float $v): static { $this->prixBebe = $v; return $this; }
    public function setImageUrl(?string $v): static { $this->imageUrl = $v; return $this; }
    public function setType(?string $v): static { $this->type = $v; return $this; }
    public function setCategorie(?Categorie $v): static { $this->categorie = $v; return $this; }
    public function setLatitude(?float $v): static { $this->latitude = $v; return $this; }
    public function setLongitude(?float $v): static { $this->longitude = $v; return $this; }
}