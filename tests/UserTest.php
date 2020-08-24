<?php

declare(strict_types=1);

namespace UniversalRating\Tests;

use UniversalRating\User;
use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function testClassUserExists(): void
    {
        $this->assertInstanceOf(
            User::class,
            new User
        );
    }

    public function testUserHasAName(): void
    {
        $this->assertClassHasAttribute("userName", User::class, "Class user has no user name");
    }
}
