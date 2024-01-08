<?php
    session_start();

    require_once('Database/connect.php');
    require_once('Model/Eleve.php');
    require_once('Model/Note.php');

    $nombre = $_SESSION['nombre'];

        if(isset($_POST['validate'])){
            if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['note1']) and !empty($_POST['note2'])){

                //récupérer les valeurs du formulaire
                $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $note1 = htmlspecialchars($_POST['note1']);
                $note2 = htmlspecialchars($_POST['note2']);

                $eleve = new Eleve();
                $note = new Note();
        
                // Exemple d'utilisation : ajouter un élève et une note
                $eleve->ajouterEleve($nom, $prenom);
        
                 $eleves = $eleve->getEleves(); 
                // Supposons que le premier élève a été ajouté
                            $eleveId = $eleves[0]['id'];
                        $note->ajouterNote($eleveId, $note1, $note2);
          
            } else{
                echo 'Veuillez renseigner tout les champs !!';
            }

           
            // Afficher la liste des élèves
            /*   {
                $eleveId = $eleves[0]['id'];
                echo $e['prenom'] . ' ' . $e['nom'] . $e['id'] .'<br>';
            }  */

        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement de notes</title>
    <link rel="stylesheet" href="style.css">
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