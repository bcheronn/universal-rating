<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use UniversalRating\User;

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
