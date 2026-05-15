<?php

namespace App\Tests\Service;

use App\Entity\User;
use App\Service\UserManager;
use PHPUnit\Framework\TestCase;

class UserManagerTest extends TestCase
{
    public function testValidUser()
    {
        $user = new User();
        $user->setEmail('test@gmail.com');
        $user->setPassword('password123');

        $manager = new UserManager();

        $this->assertTrue($manager->validate($user));
    }

    public function testInvalidEmail()
    {
        $this->expectException(\InvalidArgumentException::class);

        $user = new User();
        $user->setEmail('bad-email');
        $user->setPassword('password123');

        (new UserManager())->validate($user);
    }

    public function testShortPassword()
    {
        $this->expectException(\InvalidArgumentException::class);

        $user = new User();
        $user->setEmail('test@gmail.com');
        $user->setPassword('123');

        (new UserManager())->validate($user);
    }
}