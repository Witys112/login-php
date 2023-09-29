<?php
        require_once("base.php");

        $email = $_POST['email'];
        $login = strtolower($_POST['login']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $wynik = "SELECT `login` FROM `uzytkownik` WHERE `login`='$login'";
        $szukanieloginu1 = mysqli_query($polaczenie, $wynik);
        $szukanieloginu = mysqli_fetch_row($szukanieloginu1);
        $register = "INSERT INTO `uzytkownik`(`login`, `haslo`, `email`) VALUES ('$login','$password','$email');";

        if(!empty($login) and !empty($_POST['password']) and !empty($email)){
            if(strlen($login) <=15){
                if($szukanieloginu[0] != $login){ #loginuzyty
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ #email
                        if(strlen($_POST['password']) >=6){ #hasło
                            mysqli_query($polaczenie, $register);
                            header('Location: http://localhost/_cv/login-php/website.php');
                            }   
                        else{
                            echo "za krótkie hasło";
                        } #hasło
                    }
                    else{
                        echo "zły email";
                        }#email
                }
                else{
                    echo "login uzyty";
                    }#loginuzyty
                }
            else{
                echo "za długi login";
                }
            
        }
        else{
            echo "puste pole";
            }
        
        mysqli_close($polaczenie);
        exit();
    ?>