<?php

declare(strict_types=1);

namespace UniversalRating;

class User
{
    protected $userName = 'jdoe';

    public function echoUserName()
    {
        echo $this->userName;
    }
}
