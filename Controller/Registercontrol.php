<?php
    require_once('./index.php');

    if(isset($_POST['envoyer'])){
            echo"Il semble y avoir une erreur veuillez recommencer.";
        
    } else{
        header('location: home.php');
    }

?>