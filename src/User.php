<?php

declare(strict_types=1);

namespace UniversalRating;

class User
{
    private $email = 'john@doe.com';
    private $userName = "John Doe";

    public function echoEmail()
    {
        echo $this->email, PHP_EOL;
    }
}
