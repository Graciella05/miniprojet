<?php

    session_start();
    require_once('Controller/Registercontrol.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement de notes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> <br> <br>

    <form action="" method="post">
    <p><center><strong>Enregistrement des notes des élèves</strong></center></p> <br> <br> <br>
    <center><button type="submit" name="envoyer">Enregistrer les notes</button></center>
    </form>
   
</body>
</html>