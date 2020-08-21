<?php

declare(strict_types=1);

namespace UniversalRating;

class User
{
    private $email = 'john@doe.com';

    public function echoEmail()
    {
        echo $this->email;
    }
}
