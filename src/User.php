<?php

declare(strict_types=1);

namespace UniversalRating;

class User
{
    private $email = 'john@doe.com';
    private $userName;

    public function __construct($userName = "John Doe")
    {
        $this->userName = $userName;
    }

    // Echo user mail (used for autoload testing)
    public function echoEmail(): void
    {
        echo $this->email, PHP_EOL;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }
}
