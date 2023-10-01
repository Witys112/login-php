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

            if(!empty($login) and !empty($_POST['password'])){
                if($login == $odpowiedz[0] or $login == $odpowiedz[2]){
                    if(password_verify($_POST['password'], $odpowiedz[1])){
                        $_SESSION['login'] = $login;
                        header('Location: http://localhost/_cv/login-php/website.php');
                    }
                    else{
                        echo " <b id='blad'>złe hasło</b> ";
                    }
                }
                else{
                    echo "<b id='blad'>zły login bądź email</b>";
                }
            }
            else{ #<b> puste pole </b>
                echo "<b id='blad'> puste pole </b>";
            }
            mysqli_close($polaczenie);
        ?>