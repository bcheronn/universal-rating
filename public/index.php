<?php

require '../vendor/autoload.php';

use UniversalRating\User;

echo "Universal Rating</br>";

$user = new User;
$user->echoUserName();
