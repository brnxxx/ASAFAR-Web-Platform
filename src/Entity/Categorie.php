<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
#[ORM\Table(name: 'categorie')]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    /** @phpstan-ignore property.unusedType */
    private ?int $id = null;

    #[ORM\Column(name: 'nom', length: 255)]
    private string $nom;

    #[ORM\Column(name: 'description', type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\Column(name: 'image', length: 255, nullable: true)]
    private ?string $image = null;

    /** @var Collection<int, Excursion> */
    #[ORM\OneToMany(
        mappedBy: 'categorie',
        targetEntity: Excursion::class,
        cascade: ['persist']
    )]
    private Collection $excursions;

    public function __construct()
    {
        $this->excursions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
        return $this;
    }

    /** @return Collection<int, Excursion> */
    public function getExcursions(): Collection
    {
        return $this->excursions;
    }

    public function addExcursion(Excursion $excursion): static
    {
        if (!$this->excursions->contains($excursion)) {
            $this->excursions->add($excursion);
            $excursion->setCategorie($this);
        }

        return $this;
    }

    public function removeExcursion(Excursion $excursion): static
    {
        if ($this->excursions->removeElement($excursion)) {
            if ($excursion->getCategorie() === $this) {
                $excursion->setCategorie(null);
            }
        }

        return $this;
    }
}