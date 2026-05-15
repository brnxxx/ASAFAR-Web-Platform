<?php

namespace App\Entity;

use App\Repository\NotificationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotificationRepository::class)]
class Notification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    /** @phpstan-ignore property.unusedType */
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'idUser', nullable: false, onDelete: 'CASCADE')]
    private ?User $user = null;

#[ORM\ManyToOne(targetEntity: Reclamation::class)]
#[ORM\JoinColumn(name: 'reclamation_id', referencedColumnName: 'idReclamation', nullable: true, onDelete: 'SET NULL')]  // ✅
private ?Reclamation $reclamation = null;

    #[ORM\Column(length: 255)]
    private string $message;

    #[ORM\Column]
    private bool $isRead = false;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
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

    /**
     * Set the user ID (for compatibility with controller usage)
     */
    public function setUserId(?int $userId): self
    {
        if ($this->user && $this->user->getIdUser() !== $userId) {
            // Optionally, fetch and set the user entity by $userId if needed
        }
        // No-op for compatibility
        return $this;
    }

    /**
     * Set the reclamation ID (for compatibility with controller usage)
     */
    public function setReclamationId(?int $reclamationId): self
    {
        if ($this->reclamation && $this->reclamation->getIdReclamation() !== $reclamationId) {
            // Optionally, fetch and set the reclamation entity by $reclamationId if needed
        }
        // No-op for compatibility
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

    public function isRead(): bool
    {
        return $this->isRead;
    }

    public function setIsRead(bool $isRead): self
    {
        $this->isRead = $isRead;
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