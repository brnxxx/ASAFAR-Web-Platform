<?php

namespace App\Entity;
use Symfony\Component\Serializer\Annotation\Ignore;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'utilisateur')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "idUser", type: "integer")]
    private int $id = 0;

    /**
     * Get the user ID (for compatibility)
     */
    public function getIdUser(): int
    {
        return $this->id;
    }

    /** @var Collection<int, Excursion> */
#[ORM\ManyToMany(targetEntity: Excursion::class, inversedBy: 'likedByUsers')]
#[ORM\JoinTable(name: 'user_favorite_excursions',
    joinColumns: [new ORM\JoinColumn(name: 'user_id', referencedColumnName: 'idUser')],
    inverseJoinColumns: [new ORM\JoinColumn(name: 'excursion_id', referencedColumnName: 'idExcursion')]
)]
private Collection $favoriteExcursions;
// Ajouter la propriété après $commentaires
/** @var Collection<int, Post> */
#[ORM\OneToMany(
    mappedBy: 'user',
    targetEntity: Post::class,
    cascade: ['persist', 'remove'],
    orphanRemoval: true
)]
private Collection $posts;



// Ajouter les méthodes :
/** @return Collection<int, Post> */
public function getPosts(): Collection
{
    return $this->posts;
}

public function addPost(Post $post): static
{
    if (!$this->posts->contains($post)) {
        $this->posts->add($post);
        $post->setUser($this);
    }
    return $this;
}

public function removePost(Post $post): static
{
    if ($this->posts->removeElement($post)) {
        if ($post->getUser() === $this) {
            $post->setUser(null);
        }
    }
    return $this;
}
    #[ORM\Column(name: "nom", type: "string", length: 100)]
    #[Assert\NotBlank(message: "Le nom est obligatoire")]
    #[Assert\Length(min: 3, minMessage: "Le nom doit contenir au moins 2 caractères")]
    private string $nom;

    #[ORM\Column(name: "prenom", type: "string", length: 100)]
    #[Assert\NotBlank(message: "Le prénom est obligatoire")]
    #[Assert\Length(min: 3, minMessage: "Le prénom doit contenir au moins 2 caractères")]
    private string $prenom;

    #[ORM\Column(name: "email", type: "string", length: 180)]
    #[Assert\NotBlank(message: "Email obligatoire")]
    #[Assert\Email(message: "Email invalide")]
    private string $email;

    #[ORM\Column(name: "motDePasse", type: "string", length: 255)]
    #[Ignore]
    private string $password;

    #[ORM\Column(name: "telephone", type: "string", length: 20, nullable: true)]
    #[Assert\Regex(
        pattern: "/^[0-9]{8}$/",
        message: "Le numéro doit contenir 8 chiffres"
    )]
    private ?string $telephone = null;

    #[ORM\Column(name: "role", type: "string", length: 50)]
    private string $role;

    #[ORM\Column(name: "dateInscription", type: "date", nullable: true)]
    private ?\DateTimeInterface $dateInscription = null;

    #[ORM\Column(name: "statut", type: "string", length: 20, nullable: true)]
    private ?string $statut = null;

    #[ORM\Column(name: "image", type: "string", length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(name: "dateCreation", type: "date", nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name: "trustScore", type: "integer", nullable: true)]
    private ?int $trustScore = null;

    #[ORM\Column(name: "trustLevel", type: "string", length: 50, nullable: true)]
    private ?string $trustLevel = null;

    /** @var Collection<int, Commentaire> */
#[ORM\OneToMany(
    mappedBy: 'user',
    targetEntity: Commentaire::class
)]
private Collection $commentaires;


    /** @var Collection<int, PromoCode> */
    #[ORM\OneToMany(
        mappedBy: 'user',
        targetEntity: PromoCode::class,
        cascade: ['persist', 'remove'],  // ✅
        orphanRemoval: true
    )]
    private Collection $promoCodes;

    /** @var Collection<int, WheelSpin> */
    #[ORM\OneToMany(
        mappedBy: 'user',
        targetEntity: WheelSpin::class,
        cascade: ['persist', 'remove'],  // ✅
        orphanRemoval: true
    )]
    private Collection $wheelSpins;

    #[ORM\Column(type: 'integer')]
    private int $fidelityPoints = 0;

    #[ORM\Column(type: 'boolean')]
    private bool $hasPlayedWheel = false;

    public function __construct()
    {
        $this->posts = new ArrayCollection();
        $this->favoriteExcursions = new ArrayCollection();
        $this->commentaires = new ArrayCollection();
        $this->promoCodes = new ArrayCollection();
        $this->wheelSpins = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id ?: null;
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

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;
        return $this;
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->dateInscription;
    }

    public function setDateInscription(?\DateTimeInterface $dateInscription): static
    {
        $this->dateInscription = $dateInscription;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): static
    {
        $this->statut = $statut;
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

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    public function getTrustScore(): ?int
    {
        return $this->trustScore;
    }

    public function setTrustScore(?int $trustScore): static
    {
        $this->trustScore = $trustScore;
        return $this;
    }

    public function getTrustLevel(): ?string
    {
        return $this->trustLevel;
    }

    public function setTrustLevel(?string $trustLevel): static
    {
        $this->trustLevel = $trustLevel;
        return $this;
    }

    /** @return non-empty-string */
    public function getUserIdentifier(): string
    {
        if (!$this->email) {
            throw new \LogicException('User email must not be empty');
        }
        return $this->email;
    }

    public function getRoles(): array
    {
        return ['ROLE_' . strtoupper($this->role)];
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(#[\SensitiveParameter] string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function eraseCredentials(): void
    {
    }

    // ===================== COLLECTIONS GETTERS/ADDERS/REMOVERS =====================

    /** @return Collection<int, Excursion> */
    public function getFavoriteExcursions(): Collection
    {
        return $this->favoriteExcursions;
    }

    public function addFavoriteExcursion(Excursion $excursion): static
    {
        if (!$this->favoriteExcursions->contains($excursion)) {
            $this->favoriteExcursions->add($excursion);
        }
        return $this;
    }

    public function removeFavoriteExcursion(Excursion $excursion): static
    {
        $this->favoriteExcursions->removeElement($excursion);
        return $this;
    }

    /** @return Collection<int, Commentaire> */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): static
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires->add($commentaire);
            $commentaire->setUser($this);
        }
        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): static
    {
        if ($this->commentaires->removeElement($commentaire)) {
            if ($commentaire->getUser() === $this) {
                $commentaire->setUser(null);
            }
        }
        return $this;
    }


    /** @return Collection<int, PromoCode> */
    public function getPromoCodes(): Collection
    {
        return $this->promoCodes;
    }

    public function addPromoCode(PromoCode $promoCode): static
    {
        if (!$this->promoCodes->contains($promoCode)) {
            $this->promoCodes->add($promoCode);
            $promoCode->setUser($this);
        }
        return $this;
    }

    public function removePromoCode(PromoCode $promoCode): static
    {
        $this->promoCodes->removeElement($promoCode);
        return $this;
    }

    /** @return Collection<int, WheelSpin> */
    public function getWheelSpins(): Collection
    {
        return $this->wheelSpins;
    }

    public function addWheelSpin(WheelSpin $wheelSpin): static
    {
        if (!$this->wheelSpins->contains($wheelSpin)) {
            $this->wheelSpins->add($wheelSpin);
            $wheelSpin->setUser($this);
        }
        return $this;
    }

    public function removeWheelSpin(WheelSpin $wheelSpin): static
    {
        $this->wheelSpins->removeElement($wheelSpin);
        return $this;
    }


    public function getFidelityPoints(): int
    {
        return $this->fidelityPoints;
    }

    public function setFidelityPoints(int $fidelityPoints): static
    {
        $this->fidelityPoints = $fidelityPoints;
        return $this;
    }

    public function isHasPlayedWheel(): bool
    {
        return $this->hasPlayedWheel;
    }

    public function setHasPlayedWheel(bool $hasPlayedWheel): static
    {
        $this->hasPlayedWheel = $hasPlayedWheel;
        return $this;
    }
}