<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" type="text/css" href="styllogin.css">

    <!-- FONTY -->
    <link rel="stylesheet" type="text/css"  href="font.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>

    <div class="login">

    <form action="login.php" method="post">
        <b>login/e-mail :</b><br>
        <input type="text" name="login" id="pole"><br>
        <b>hasło :</b><br>
        <input type="password" name="password" id="pole"><br>

        <input type="submit" value="zaloguj" id="przycisk1">        

        
    </form> 
        <?php
            require_once("loginkod.php");
        ?>
        <hr>
    <form action="index.php">
        <input type="submit" value="do menu" id="przycisk2">
    </form>


    </div>
    <div class="kolopomarancz"></div>
    <div class="kolofiolet"></div>
    <div class="koloczarny"></div>


</body>
</html>