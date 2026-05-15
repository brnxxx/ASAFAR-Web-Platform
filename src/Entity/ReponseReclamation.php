<?php

namespace App\Entity;

use App\Repository\ReponseReclamationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReponseReclamationRepository::class)]
class ReponseReclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    /** @phpstan-ignore property.unusedType */
    private ?int $id = null;

#[ORM\ManyToOne(targetEntity: Reclamation::class, inversedBy: 'reponses')]
#[ORM\JoinColumn(name: 'reclamation_id', referencedColumnName: 'idReclamation', nullable: false, onDelete: 'CASCADE')]  // ✅
private ?Reclamation $reclamation = null;

    #[ORM\Column(type: 'text')]
    private string $message;

    #[ORM\Column(nullable: true)]
    private ?bool $satisfait = null;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime(); // 🔥 auto
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReclamation(): ?Reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(?Reclamation $reclamation): self
    {
        $this->reclamation = $reclamation;
        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function getSatisfait(): ?bool
    {
        return $this->satisfait;
    }

    public function setSatisfait(?bool $satisfait): self
    {
        $this->satisfait = $satisfait;
        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}