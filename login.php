<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>

    <link rel="stylesheet" type="text/css"  href="font.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <form action="login.php" method="post">
        login:
        <input type="text" name="login"><br>
        haslo:
        <input type="password" name="password">

        <input type="submit" value="zaloguj">
    </form> 
        <?php
            require_once("base.php");
            $login = $_POST['login'];

            $zapytanie = "SELECT `login`, `haslo`FROM `uzytkownik` WHERE `login`='$login';";
            $wynik = mysqli_query($polaczenie, $zapytanie);
            $odpowiedz = mysqli_fetch_row($wynik);

            if(!empty($login)){
                if($login == $odpowiedz[0]){
                    if(password_verify($_POST['password'], $odpowiedz[1])){
                        echo "udało się !";
                    }
                    else{
                        echo "złe hasło";
                    }
                }
                else{
                    echo "zły login";
                }
            }
            else{
                echo "pola puste";
            }
            
        ?>

<form action="register.php" method="post">
        <input type="submit" value="do rejestracji">
    </form>
</body>
</html>