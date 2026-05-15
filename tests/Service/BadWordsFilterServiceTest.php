<?php

namespace App\Tests\Service;

use App\Service\BadWordsFilterService;
use PHPUnit\Framework\TestCase;

class BadWordsFilterServiceTest extends TestCase
{
    public function testCommentWithoutBadWordsIsAllowed(): void
    {
        $service = new BadWordsFilterService();

        $result = $service->analyze('Très belle publication');

        $this->assertTrue($result['allowed']);
        $this->assertSame([], $result['matchedWords']);
        $this->assertSame('Très belle publication', $result['cleanedText']);
    }

    public function testCommentWithBadWordIsBlocked(): void
    {
        $service = new BadWordsFilterService();

        $result = $service->analyze('You are stupid');

        $this->assertFalse($result['allowed']);
        $this->assertContains('stupid', $result['matchedWords']);
    }

    public function testCommentWithFrenchBadWordIsBlocked(): void
    {
        $service = new BadWordsFilterService();

        $result = $service->analyze('Espèce de crétin');

        $this->assertFalse($result['allowed']);
        $this->assertContains('crétin', $result['matchedWords']);
    }

    public function testEmptyCommentIsAllowed(): void
    {
        $service = new BadWordsFilterService();

        $result = $service->analyze('');

        $this->assertTrue($result['allowed']);
        $this->assertSame([], $result['matchedWords']);
    }
}