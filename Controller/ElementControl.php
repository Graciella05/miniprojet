<?php
require_once('./Database/connect.php');
require_once('./Model/Eleve.php');
require_once('./Model/Note.php');

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
            echo 'Enregistrement effectué avec succès !';
  
    } else{
        echo 'Veuillez renseigner tout les champs !!';
    }
}

 ?> 