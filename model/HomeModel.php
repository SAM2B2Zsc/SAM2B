<?php
 class HomeModel {
     private $pdo;
     // constructeur
     public function __construct(PDO $pdo) {
         $this->pdo = $pdo;
}
     // Méthode pour récupérer les informations de la base home
     public function getInfo() {
         $sql = 'SELECT * FROM home';
         $statement = $this->pdo->query($sql);
         return $statement->fetch(PDO::FETCH_ASSOC);
} }
?>