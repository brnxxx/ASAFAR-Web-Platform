<?php

namespace App\Entity;

use App\Repository\AeroportRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AeroportRepository::class)]
#[ORM\Table(name: 'aeroport')]
class Aeroport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer', name: 'id')]
    private int $id = 0;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private ?string $ident = null;

    #[ORM\Column(type: 'string', length: 255)]
    private string $nom = '';

    #[ORM\Column(type: 'string', length: 150, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private ?string $pays = null;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private ?string $codeIata = null;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private ?string $codeIcao = null;

    #[ORM\Column(type: 'float', options: ['default' => 0])]
    private float $latitude = 0;

    #[ORM\Column(type: 'float', options: ['default' => 0])]
    private float $longitude = 0;

    #[ORM\Column(type: 'integer', nullable: true, options: ['default' => 0])]
    private ?int $altitude = 0;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private ?string $type = null;

    public function getId(): ?int
    {
        return $this->id ?: null;
    }

    public function getIdent(): ?string
    {
        return $this->ident;
    }

    public function setIdent(?string $ident): static
    {
        $this->ident = $ident;

        return $this;
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

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): static
    {
        $this->pays = $pays;

        return $this;
    }

    public function getCodeIata(): ?string
    {
        return $this->codeIata;
    }

    public function setCodeIata(?string $codeIata): static
    {
        $this->codeIata = $codeIata;

        return $this;
    }

    public function getCodeIcao(): ?string
    {
        return $this->codeIcao;
    }

    public function setCodeIcao(?string $codeIcao): static
    {
        $this->codeIcao = $codeIcao;

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

    public function getAltitude(): ?int
    {
        return $this->altitude;
    }

    public function setAltitude(?int $altitude): static
    {
        $this->altitude = $altitude;

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

    public function __toString(): string
    {
        return sprintf('%s (%s)', $this->nom, $this->codeIata ?? 'N/A');
    }
}
