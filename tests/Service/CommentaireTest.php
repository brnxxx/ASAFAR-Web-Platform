<?php

namespace App\Tests;

use App\Entity\Commentaire;
use App\Entity\Post;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class CommentaireTest extends TestCase
{
    public function testCreateCommentaire(): void
    {
        $c = new Commentaire();
        $c->setContenu('Great post!');
        $c->setCreatedAt(new \DateTimeImmutable('now'));

        $this->assertSame('Great post!', $c->getContenu());
        $this->assertInstanceOf(\DateTimeInterface::class, $c->getCreatedAt());
    }

    public function testCommentaireWithPost(): void
    {
        $post = new Post();
        $post->setTitre('My Post');

        $c = new Commentaire();
        $c->setPost($post);
        $c->setContenu('Comment on post');

        $this->assertSame($post, $c->getPost());
        $this->assertSame('Comment on post', $c->getContenu());
    }

    public function testCommentaireWithUser(): void
    {
        $user = new User();
        $user->setNom('John');
        $user->setEmail('john@example.com');

        $c = new Commentaire();
        $c->setUser($user);

        $this->assertSame($user, $c->getUser());
    }
}
