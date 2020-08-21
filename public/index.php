<?php

declare(strict_types=1);

require '../vendor/autoload.php';

use UniversalRating\User;

$user = new User;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Universal Rating</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body class="text-light bg-dark container">
    <header>
        <nav class="navbar sticky-top navbar-expand navbar-dark">
            <a class="navbar-brand" href="#">Universal Rating</a>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#">Home</a>
                <a class="nav-item nav-link" href="#">Sign In</a>
                <a class="nav-item nav-link" href="#">Rate Anything</a>
            </div>
        </nav>
    </header>
    <main>
        Logged user: <?= $user->echoEmail() ?>
    </main>
</body>

</html>