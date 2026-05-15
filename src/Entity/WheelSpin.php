<?php

namespace App\Entity;

use App\Repository\WheelSpinRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WheelSpinRepository::class)]
#[ORM\Table(name: 'wheel_spin')]
class WheelSpin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    /** @phpstan-ignore property.unusedType */
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'wheelSpins')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'idUser', nullable: false, onDelete: 'CASCADE')]
    private ?User $user = null;

    #[ORM\Column(type: 'integer')]
    private int $reward = 0;

    #[ORM\Column(name: 'created_at', type: 'datetime')]
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

    public function setUser(User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getReward(): int
    {
        return $this->reward;
    }

    public function setReward(int $reward): self
    {
        $this->reward = $reward;
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