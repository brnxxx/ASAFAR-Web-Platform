<?php

namespace App\Entity;

use App\Repository\CategorieHebergementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CategorieHebergementRepository::class)]
#[ORM\Table(name: 'categorie_hebergement')]
class CategorieHebergement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer', name: 'idCategorie')]
    private int $idCategorie = 0;

    #[ORM\Column(type: 'string', length: 100)]
    #[Assert\NotBlank(message: 'Le nom de la categorie ne doit pas etre vide')]
    #[Assert\Length(min: 3, minMessage: 'Le nom de la categorie doit contenir au moins 3 caracteres', max: 100, maxMessage: 'Le nom de la categorie ne doit pas depasser 100 caracteres')]
    #[Assert\Regex(
        pattern: "/^[\\p{L}\\s''-]+$/u",
        message: 'Le nom de la categorie ne doit contenir que des lettres, espaces et tirets'
    )]
    private string $nom = '';

    #[ORM\Column(type: 'text', nullable: true)]
    #[Assert\Length(max: 1000, maxMessage: 'La description ne doit pas depasser 1000 caracteres')]
    private ?string $description = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true, name: 'imagePath')]
    private ?string $imagePath = null;

    /** @var Collection<int, Hebergement> */
    #[ORM\OneToMany(targetEntity: Hebergement::class, mappedBy: 'categorieHebergement', cascade: ['persist'])]
    private Collection $hebergements;

    public function __construct()
    {
        $this->hebergements = new ArrayCollection();
    }

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie ?: null;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
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

    /**
     * @return Collection<int, Hebergement>
     */
    public function getHebergements(): Collection
    {
        return $this->hebergements;
    }

    public function addHebergement(Hebergement $hebergement): static
    {
        if (!$this->hebergements->contains($hebergement)) {
            $this->hebergements->add($hebergement);
            $hebergement->setCategorieHebergement($this);
        }
        return $this;
    }

    public function removeHebergement(Hebergement $hebergement): static
    {
        if ($this->hebergements->removeElement($hebergement)) {
            if ($hebergement->getCategorieHebergement() === $this) {
                $hebergement->setCategorieHebergement(null);
            }
        }
        return $this;
    }

    public function __toString(): string
    {
        return $this->nom;
    }
}
