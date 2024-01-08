<?php

    require_once('../Controller/ElementControl.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement de notes</title>
</head>
<body>

<form action="" method="POST">
        <p>Entrer le nom de l'élève :  <input type="text" name="nom" id=""></p>
        <p>Entrer le prénom de l'élève :  <input type="text" name="prenom" id=""></p>
        <p>Entrer la première note de l'élève : <input type="number" name="note1" id=""></p>
        <p>Entrer la deuxième note de l'élève : <input type="number" name="note2" id=""></p>
        <p><button type="submit" name='validate' >Envoyer</button></p>
    </form>
    
</body>
</html>