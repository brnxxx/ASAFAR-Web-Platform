<?php

namespace App\Entity;

use App\Repository\ReclamationWhatsAppSessionRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Reclamation;
#[ORM\Entity(repositoryClass: ReclamationWhatsAppSessionRepository::class)]
#[ORM\Table(name: 'reclamation_whatsapp_session')]
class ReclamationWhatsAppSession
{
    public const STEP_AWAITING_PROBLEM = 'awaiting_problem';

#[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    /** @phpstan-ignore property.unusedType */
    private ?int $id = null;

#[ORM\ManyToOne(targetEntity: Reclamation::class)]
#[ORM\JoinColumn(name: 'reclamation_id', referencedColumnName: 'idReclamation', nullable: false, onDelete: 'CASCADE')]
private ?Reclamation $reclamation = null;

#[ORM\Column(length: 30, nullable: false)]  // ✅
private string $phone = '';  // ✅

// Getter mis à jour :
   #[ORM\Column(length: 50)]
    private string $step = self::STEP_AWAITING_PROBLEM;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $collectedData = null;

    #[ORM\Column(nullable: true)]
    private ?bool $coherent = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $reason = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $analysisSummary = null;

    #[ORM\Column]
    private int $turn = 0;

    #[ORM\Column(name: 'is_active')]
    private bool $isActive = true;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $endType = null;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $createdAt;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $updatedAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    // ================== GETTERS / SETTERS ==================

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
public function getReclamationId(): ?int
{
    return $this->reclamation?->getIdReclamation();
}
public function getPhone(): string { return $this->phone; } 

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function getStep(): string
    {
        return $this->step;
    }

    public function setStep(string $step): self
    {
        $this->step = $step;
        $this->updatedAt = new \DateTime();
        return $this;
    }

    public function getCollectedData(): ?string
    {
        return $this->collectedData;
    }

    public function setCollectedData(?string $collectedData): self
    {
        $this->collectedData = $collectedData;
        return $this;
    }

    public function getCoherent(): ?bool
    {
        return $this->coherent;
    }

    public function setCoherent(?bool $coherent): self
    {
        $this->coherent = $coherent;
        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    public function getAnalysisSummary(): ?string
    {
        return $this->analysisSummary;
    }

    public function setAnalysisSummary(?string $analysisSummary): self
    {
        $this->analysisSummary = $analysisSummary;
        return $this;
    }

    public function getTurn(): int
    {
        return $this->turn;
    }

    public function setTurn(int $turn): self
    {
        $this->turn = $turn;
        return $this;
    }

    public function incrementTurn(): self
    {
        $this->turn++;
        return $this;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;
        $this->updatedAt = new \DateTime();
        return $this;
    }

    public function getEndType(): ?string
    {
        return $this->endType;
    }

    public function setEndType(?string $endType): self
    {
        $this->endType = $endType;
        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTimeInterface
    {
        return $this->updatedAt;
    }
    public function setUpdatedAt(\DateTimeInterface $date): self
{
    $this->updatedAt = $date;
    return $this;
}
}