<?php
            #if(!empty($_SESSION['login'])){
            #    header("Location: http://localhost/_cv/login-php/website.php");
            #}
            error_reporting(0);
            
            require_once("base.php");
            $login = $_POST['login'];

            $zapytanielogin = "SELECT `login`, `haslo`, `email`FROM `uzytkownik` WHERE `login`='$login' or `email`='$login';";
            $wynik = mysqli_query($polaczenie, $zapytanielogin);
            $odpowiedz = mysqli_fetch_row($wynik);

            if(!empty($login)){
                if($login == $odpowiedz[0] or $login == $odpowiedz[2]){
                    if(password_verify($_POST['password'], $odpowiedz[1])){
                        $_SESSION['login'] = $login;
                        header('Location: http://localhost/_cv/login-php/website.php');
                    }
                    else{
                        echo "złe hasło";
                    }
                }
                else{
                    echo "zły login bądź email";
                }
            }
            else{
                echo "pola puste";
            }
            mysqli_close($polaczenie);
        ?>