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
        $userName = $user->getUserName();
        $this->assertIsString($userName, "User name is not a string");
        $this->assertNotEquals("James STRING", $userName, "User name is not equal to unexpected");
        $this->assertEquals("James SMITH", $userName, "User name is not equal to expected");
    }

    public function testEmailIsValid(): void
    {
        $this->assertClassHasAttribute("email", User::class, "User class has no email");
        $user = new User;
        $user->setEmail("james@smith.org");
    }
}
