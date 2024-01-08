<?php
    require_once('../Database/connect.php');
    class Note extends Database {
        public function ajouterNote($eleveId, $note1, $note2) {
            $query = 'INSERT INTO note (eleve_id, note1, note2) VALUES (:eleve_id, :note1, :note2)';
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':eleve_id', $eleveId);
            $stmt->bindParam(':note1', $note1);
            $stmt->bindParam(':note2', $note2);
            return $stmt->execute();
        }
    
        public function getNotes() {
            $query = 'SELECT * FROM note ' ;
            $AllNotes = $this->conn->prepare($query);
            $AllNotes->execute();
            return $AllNotes->fetchAll();
        }
    }

   
?>