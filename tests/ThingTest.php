<?php

declare(strict_types=1);

namespace UniversalRating\Tests;

use UniversalRating\Thing;
use PHPUnit\Framework\TestCase;

final class ThingTest extends TestCase
{
    public function testClassThingExists(): void
    {
        $this->assertInstanceOf(
            Thing::class,
            new Thing,
            "Thing class cannot be instantiated"
        );
    }
}
