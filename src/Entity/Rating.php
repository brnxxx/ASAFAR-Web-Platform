<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Rating
{
#[ORM\Id]
#[ORM\GeneratedValue]
#[ORM\Column]
// @phpstan-ignore-next-line
private ?int $id = null;

    #[ORM\Column]
    private int $value;

    // 🔥 CORRECTION ICI
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: "user_id", referencedColumnName: "idUser", nullable: false)]
    private ?User $user = null;

    // 🔥 CORRECTION ICI
    #[ORM\ManyToOne(targetEntity: Excursion::class, inversedBy: 'ratings')]
    #[ORM\JoinColumn(name: "excursion_id", referencedColumnName: "idExcursion", nullable: false)]
    private ?Excursion $excursion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;
        return $this;
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

    public function getExcursion(): ?Excursion
    {
        return $this->excursion;
    }

    public function setExcursion(?Excursion $excursion): self
    {
        $this->excursion = $excursion;
        return $this;
    }
}