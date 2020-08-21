<?php

declare(strict_types=1);

namespace UniversalRating\Tests;

use UniversalRating\User;
use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function testUserClass(): void
    {
        $user = new User;

        $this->assertInstanceOf(
            User::class,
            $user
        );
    }
}
