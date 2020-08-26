<?php

declare(strict_types=1);

namespace UniversalRating\Tests;

use UniversalRating\Feedback;
use PHPUnit\Framework\TestCase;

final class FeedbackTest extends TestCase
{
    public function testClassFeedbackExists(): void
    {
        $this->assertInstanceOf(
            Feedback::class,
            new Feedback,
            "Feedback class cannot be instantiated"
        );
    }
}
