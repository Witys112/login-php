<?php
    session_start();

    unset($_SESSION['login']);

    session_destroy();

    header('Location: http://localhost/_cv/login-php/index.php');


?>