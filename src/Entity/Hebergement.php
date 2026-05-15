<?php

namespace App\Entity;

use App\Repository\HebergementRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\CategorieHebergement;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: HebergementRepository::class)]
#[ORM\Table(name: 'hebergement')]
class Hebergement
{
    // ...existing code...
    /**
     * Retourne la "qualité" pour l'IA (ici la note moyenne, ou 1 si null)
     */
    public function getQualite(): float
    {
        return $this->getNoteMoyenne() !== null ? (float)$this->getNoteMoyenne() : 1.0;
    }

    /**
     * Retourne le prix pour l'IA (prixParNuit en float, ou 1 si null)
     */
    public function getPrix(): float
    {
        return $this->getPrixParNuit() !== null ? (float)$this->getPrixParNuit() : 1.0;
    }
    // ...existing code...
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer', name: 'idHebergement')]
    private int $idHebergement = 0;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\NotBlank(message: 'Le nom ne doit pas être vide')]
    #[Assert\Length(min: 3, minMessage: 'Le nom doit contenir au moins 3 caractères', max: 50, maxMessage: 'Le nom ne doit pas dépasser 50 caractères')]
    private string $nom = '';

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    #[Assert\Choice(choices: ['HOTEL', 'MAISON', 'APPARTEMENT'], message: 'Le type doit être HOTEL, MAISON ou APPARTEMENT')]
    private ?string $type = null;

    #[ORM\Column(type: 'string', length: 100)]
    #[Assert\NotBlank(message: 'La localisation ne doit pas être vide')]
    #[Assert\Length(min: 3, minMessage: 'La localisation doit contenir au moins 3 caractères', max: 100, maxMessage: 'La localisation ne doit pas dépasser 100 caractères')]
    private string $localisation = '';

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: 'La description ne doit pas être vide')]
    #[Assert\Length(min: 10, minMessage: 'La description doit contenir au moins 10 caractères', max: 1000, maxMessage: 'La description ne doit pas dépasser 1000 caractères')]
    private string $description = '';

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2, nullable: true, name: 'prixParNuit')]
    #[Assert\PositiveOrZero(message: 'Le prix par nuit doit être positif')]
    private ?string $prixParNuit = null;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    #[Assert\Choice(choices: ['DISPONIBLE', 'INDISPONIBLE'], message: 'La disponibilité doit être DISPONIBLE ou INDISPONIBLE')]
    private ?string $disponibilite = null;

    #[ORM\Column(type: 'decimal', precision: 2, scale: 1, nullable: true, name: 'noteMoyenne')]
    #[Assert\Range(min: 0, max: 5, notInRangeMessage: 'La note moyenne doit être entre 0 et 5')]
    private ?string $noteMoyenne = null;

    #[ORM\Column(type: 'integer', nullable: true, name: 'idUser')]
    private ?int $idUser = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true, name: 'imagePath')]
    private ?string $imagePath = null;

    /** @var list<string>|null */
    #[ORM\Column(type: 'json', nullable: true, name: 'galleryImages')]
    private ?array $galleryImages = null;

    #[ORM\Column(type: 'float', nullable: true)]
    #[Assert\Range(min: -90, max: 90, notInRangeMessage: 'La latitude doit être entre -90 et 90')]
    private ?float $latitude = null;

    #[ORM\Column(type: 'float', nullable: true)]
    #[Assert\Range(min: -180, max: 180, notInRangeMessage: 'La longitude doit être entre -180 et 180')]
    private ?float $longitude = null;

    #[ORM\ManyToOne(targetEntity: CategorieHebergement::class, inversedBy: 'hebergements')]
    #[ORM\JoinColumn(name: 'idCategorie', referencedColumnName: 'idCategorie', nullable: true, onDelete: 'SET NULL')]
    private ?CategorieHebergement $categorieHebergement = null;

    /** @var Collection<int, Reservation> */
    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'hebergement')]
    private Collection $reservations;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $nbNotes = 0;


    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getIdHebergement(): ?int
    {
        return $this->idHebergement ?: null;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getLocalisation(): string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrixParNuit(): ?string
    {
        return $this->prixParNuit;
    }

    public function setPrixParNuit(?string $prixParNuit): static
    {
        $this->prixParNuit = $prixParNuit;

        return $this;
    }

    public function getDisponibilite(): ?string
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(?string $disponibilite): static
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getNoteMoyenne(): ?string
    {
        return $this->noteMoyenne;
    }

    public function setNoteMoyenne(?string $noteMoyenne): static
    {
        $this->noteMoyenne = $noteMoyenne;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(?string $imagePath): static
    {
        $this->imagePath = $imagePath;

        return $this;
    }

    /** @return list<string>|null */
    public function getGalleryImages(): ?array
    {
        return $this->galleryImages;
    }

    /** @param list<string>|null $galleryImages */
    public function setGalleryImages(?array $galleryImages): static
    {
        $this->galleryImages = $galleryImages;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getCategorieHebergement(): ?CategorieHebergement
    {
        return $this->categorieHebergement;
    }

    public function setCategorieHebergement(?CategorieHebergement $categorieHebergement): static
    {
        $this->categorieHebergement = $categorieHebergement;

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
            $reservation->setHebergement($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            if ($reservation->getHebergement() === $this) {
                $reservation->setHebergement(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->nom;
    }

    public function getNbNotes(): ?int
{
    return $this->nbNotes;
}

public function setNbNotes(?int $nbNotes): static
{
    $this->nbNotes = $nbNotes;
    return $this;
}
}
