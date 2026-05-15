<?php

namespace App\Tests;

use App\Entity\Post;
use App\Entity\Commentaire;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    public function testCreatePost(): void
    {
        $post = new Post();
        $post->setTitre('First Post');
        $post->setType('NEWS');
        $post->setContenu('This is my first post');
        $post->setStatus('PUBLISHED');

        $this->assertSame('First Post', $post->getTitre());
        $this->assertSame('NEWS', $post->getType());
        $this->assertSame('This is my first post', $post->getContenu());
        $this->assertSame('PUBLISHED', $post->getStatus());
    }

    public function testPostDates(): void
    {
        $now = new \DateTimeImmutable('now');
        $post = new Post();
        $post->setCreatedAt($now);
        $post->setUpdatedAt($now);

        $this->assertEquals($now, $post->getCreatedAt());
        $this->assertEquals($now, $post->getUpdatedAt());
    }

    public function testPostWithCommentaires(): void
    {
        $post = new Post();
        $post->setTitre('Post with comments');

        $c1 = new Commentaire();
        $c1->setContenu('First comment');
        $post->addCommentaire($c1);

        $c2 = new Commentaire();
        $c2->setContenu('Second comment');
        $post->addCommentaire($c2);

        $this->assertCount(2, $post->getCommentaires());
    }
}
