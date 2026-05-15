<?php

namespace App\Entity;

use App\Repository\QuizSessionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizSessionRepository::class)]
#[ORM\Table(name: 'quiz_session')]
class QuizSession
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    /** @phpstan-ignore property.unusedType */
    private ?int $id = null;

    #[ORM\Column(type: 'integer')]
    private int $score = 0;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'idUser', nullable: false, onDelete: 'CASCADE')]
    private ?User $user = null;

    #[ORM\Column(name: 'created_at', type: 'datetime', nullable: false)]
    private \DateTimeInterface $createdAt;  // ✅

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $played = false;

    public function __construct()
    {
        $this->createdAt = new \DateTime();  // ✅
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

    public function getCreatedAt(): \DateTimeInterface  // ✅
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function isPlayed(): bool
    {
        return $this->played;
    }

    public function setPlayed(bool $played): self
    {
        $this->played = $played;
        return $this;
    }

    public function getScore(): int { return $this->score; }
    public function setScore(int $score): self
    {
        $this->score = $score;
        return $this;
    }
}