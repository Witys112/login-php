<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="indexphp.css">

    <!-- FONTY -->
    <link rel="stylesheet" type="text/css" href="font.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>welcome!</title>
</head>
<body>
    <div class="choice">
            
        <b>zaloguj się</b>
        <form method="post" action="login.php">
            <input type="submit" value="Login!" id="przycisk">
        </form>
        <hr>
        <b>zarejestruj się</b>
        <form method="post" action="register.php">
            <input type="submit" value="Register!" id="przycisk">
        </form>

    </div>

    <div class="kolopomarancz"></div>
    <div class="kolofiolet"></div>
    <div class="koloczarny"></div>

</body>
</html>