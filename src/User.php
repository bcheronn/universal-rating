<?php

class User
{
    protected $userName = 'jdoe';

    public function echoUserName()
    {
        echo $this->userName;
    }
}
