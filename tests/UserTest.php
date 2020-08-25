<?php

declare(strict_types=1);

namespace UniversalRating\Tests;

use UniversalRating\User;
use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function testEchoUserEmail(): void
    {
        $user = new User;
        $this->expectOutputString("john@doe.com" . PHP_EOL);
        $user->echoEmail();
    }

    public function testClassUserExists(): void
    {
        $this->assertInstanceOf(
            User::class,
            new User,
            "User class cannot be instantiated"
        );
    }

    public function testUserHasAName(): void
    {
        $this->assertClassHasAttribute("userName", User::class, "User class has no user name");
        $user = new User("James SMITH");
        $this->assertIsString($user->getUserName(), "User name is not a string");
    }
}
