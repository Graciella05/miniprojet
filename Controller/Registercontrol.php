<?php
    require_once('./index.php');

    if(isset($_POST['envoyer'])){
        header('location: home.php');
        
    } else{
        //echo"Il semble y avoir une erreur veuillez recommencer.";
    }

?>