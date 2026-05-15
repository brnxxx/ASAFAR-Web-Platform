<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
#[ORM\Table(name: 'reclamation')]
class Reclamation
{
    // 🔥 NOUVEAUX CHAMPS (NE TOUCHENT PAS L’EXISTANT)

#[ORM\Column(name: 'targetType', type: 'string', length: 50, nullable: true)]
private ?string $targetType = null;
/** @var Collection<int, ReponseReclamation> */
#[ORM\OneToMany(mappedBy: 'reclamation', targetEntity: ReponseReclamation::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
private Collection $reponses;

#[ORM\Column(name: 'targetId', type: 'integer', nullable: true)]
private ?int $targetId = null;
public function __construct()
{
    $this->reponses = new ArrayCollection();
}
// ── GETTERS / SETTERS ─────────────────

public function getTargetType(): ?string
{
    return $this->targetType;
}

public function setTargetType(?string $type): self
{
    $this->targetType = $type;
    return $this;
}

public function getTargetId(): ?int
{
    return $this->targetId;
}

public function setTargetId(?int $id): self
{
    $this->targetId = $id;
    return $this;
}
  #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idReclamation', type: 'integer')]
    /** @phpstan-ignore property.unusedType */
    private ?int $idReclamation = null;

    #[ORM\Column(name: 'sujet', type: 'string', length: 100)]
    private string $sujet;

    #[ORM\Column(name: 'description', type: 'text')]
    private string $description;

    #[ORM\Column(name: 'typeReclamation', type: 'string',
        enumType: null, columnDefinition: "ENUM('TRANSPORT','LOISIR','HEBERGEMENT') NOT NULL")]
    private string $typeReclamation;

    #[ORM\Column(name: 'dateReclamation', type: 'date')]
    private \DateTimeInterface $dateReclamation;

    #[ORM\Column(name: 'statut', type: 'string',
        columnDefinition: "ENUM('EN_ATTENTE','TRAITEE','REFUSEE') NOT NULL DEFAULT 'EN_ATTENTE'")]
    private string $statut = 'EN_ATTENTE';

    #[ORM\Column(name: 'reponseAdmin', type: 'text', nullable: true)]
    private ?string $reponseAdmin = null;

    #[ORM\Column(name: 'idUser', type: 'integer')]
    private int $idUser;
#[ORM\Column(nullable: true)]
private ?bool $satisfait = null;


    #[ORM\Column(name: 'idReservation', type: 'integer', nullable: true)]
    private ?int $idReservation = null;

    #[ORM\Column(name: 'priorite', type: 'string',
        columnDefinition: "ENUM('FAIBLE','NORMAL','URGENT') DEFAULT 'NORMAL'")]
    private string $priorite = 'NORMAL';

    // ── Getters / Setters ──────────────────────────────────────────────

    public function getIdReclamation(): ?int { return $this->idReclamation; }

    public function getSujet(): string { return $this->sujet; }
    public function setSujet(string $sujet): self { $this->sujet = $sujet; return $this; }

    public function getDescription(): string { return $this->description; }
    public function setDescription(string $description): self { $this->description = $description; return $this; }

    public function getTypeReclamation(): string { return $this->typeReclamation; }
    public function setTypeReclamation(string $type): self { $this->typeReclamation = $type; return $this; }

    public function getDateReclamation(): \DateTimeInterface { return $this->dateReclamation; }
    public function setDateReclamation(\DateTimeInterface $date): self { $this->dateReclamation = $date; return $this; }

    public function getStatut(): string { return $this->statut; }
    public function setStatut(string $statut): self { $this->statut = $statut; return $this; }

    public function getReponseAdmin(): ?string { return $this->reponseAdmin; }
    public function setReponseAdmin(?string $rep): self { $this->reponseAdmin = $rep; return $this; }

    public function getIdUser(): int { return $this->idUser; }
    public function setIdUser(int $id): self { $this->idUser = $id; return $this; }

    public function getIdReservation(): ?int { return $this->idReservation; }
    public function setIdReservation(?int $id): self { $this->idReservation = $id; return $this; }

    public function getPriorite(): string { return $this->priorite; }
    public function setPriorite(string $p): self { $this->priorite = $p; return $this; }
    // Dans src/Entity/Reclamation.php
// Propriété non mappée — temporaire pour l'affichage admin
private ?object $session = null;

public function getSession(): ?object 
{ 
    return $this->session; 
}

public function setSession(?object $s): self 
{ 
    $this->session = $s; 
    return $this; 
}
public function getSatisfait(): ?bool { return $this->satisfait; }
public function setSatisfait(?bool $satisfait): self {
    $this->satisfait = $satisfait;
    return $this;
}

/** @return Collection<int, ReponseReclamation> */
public function getReponses(): Collection { return $this->reponses; }

public function addReponse(ReponseReclamation $reponse): self
{
    if (!$this->reponses->contains($reponse)) {
        $this->reponses->add($reponse);
        $reponse->setReclamation($this);
    }
    return $this;
}

public function removeReponse(ReponseReclamation $reponse): self
{
    $this->reponses->removeElement($reponse);
    return $this;
}

}