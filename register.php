<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
</head>
<body>
    <form action="register.php" method="post">
        login:
        <input type="text" name="login">
        hasło:
        <input type="password" name="password">
        <input type="submit" value="zarejestruj">
    </form>
    <?php
        require_once("base.php");

        $login = $_POST['login'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $zapytanie = "INSERT INTO `uzytkownik`(`login`, `haslo`) VALUES ('$login','$password');";
        mysqli_query($polaczenie ,$zapytanie);
        mysqli_close($polaczenie);

    ?>
    <form action="login.php" method="post">
        <input type="submit" value="do logowania">
    </form>
</body>
</html>