<?php

namespace App\Entity;

use App\Repository\PostLikeRepository;
use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostLikeRepository::class)]
#[ORM\Table(name: 'post_like')]
#[ORM\UniqueConstraint(name: 'uq_like', columns: ['post_id', 'user_key'])]
class PostLike
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer', options: ['unsigned' => true])]
    private int $id = 0;

    #[ORM\ManyToOne(targetEntity: Post::class, inversedBy: 'postLikes')]
    #[ORM\JoinColumn(name: 'post_id', referencedColumnName: 'id', nullable: false, onDelete: 'CASCADE')]
    private ?Post $post = null;

    #[ORM\Column(name: 'user_key', length: 100)]
    private string $userKey = '';

    #[ORM\Column(name: 'created_at', type: Types::DATETIME_IMMUTABLE)]
    private DateTimeImmutable $createdAt;

    public function getId(): ?int
    {
        return $this->id ?: null;
    }

    public function getPost(): ?Post
    {
        return $this->post;
    }

    public function setPost(?Post $post): static
    {
        $this->post = $post;
        return $this;
    }

    public function getUserKey(): string
    {
        return $this->userKey;
    }

    public function setUserKey(string $userKey): static
    {
        $this->userKey = $userKey;
        return $this;
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}