<?php

declare(strict_types=1);

namespace UniversalRating\Tests;

use UniversalRating\Rating;
use PHPUnit\Framework\TestCase;

final class RatingTest extends TestCase
{
    public function testClassRatingExists(): void
    {
        $this->assertInstanceOf(
            Rating::class,
            new Rating,
            "Rating class cannot be instantiated"
        );
    }
}
