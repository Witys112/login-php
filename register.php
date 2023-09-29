<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>

    <!-- FONTY -->
    <link rel="stylesheet" type="text/css"  href="font.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <form action="register.php" method="post">
        login:
        <input type="text" name="login"><br>
        e-mail:
        <input type="text" name="email"><br>
        hasło:
        <input type="password" name="password"><br>
        <input type="submit" value="zarejestruj">
    </form>
    <?php
        require_once("registerkod.php");
    ?>
</body>
</html>