<?php
    require_once('../Database/connect.php');
    class Eleve {
        private $db;
        public $id;
        public $nom;
        public $prenom;
    
        public function __construct() {
            $this->db = new Database();
        }
    
        public function ajouterEleve($nom, $prenom) {
            $query = 'INSERT INTO eleve (nom, prenom) VALUES (:nom, :prenom)';
            $stmt = $this->db->conn->prepare($query);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            return $stmt->execute();
        }
    
        public function getEleves() {
            $query = 'SELECT * FROM eleve';
            $stmt = $this->db->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>