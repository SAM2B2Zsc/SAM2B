<?php
$pdo = require('../connect.php');
if(isset($_POST['update-section'])){
    $home_section = $_POST['Accueil'] ?? 0;
    $about_section = $_POST['A propos de moi'] ?? 0;
    $skills_section = $_POST['Compétences'] ?? 0;
    $achievements_section = $_POST['Réalisations'] ?? 0;
    $contact_section = $_POST['contact'] ?? 0;
    $sql = "UPDATE section_control SET ";
    $sql .= "Accueil = $home_section, ";
    $sql .= "A propos de moi = $about_section, ";
    $sql .= "Compétences = $skills_section, ";
    $sql .= "Réalisations = $achievements_section, ";
    $sql .= "contact= $contact_section WHERE id = 1";
    $statement = $pdo->query($sql);
    if($statement) {
        echo "<script> window.location.href='../admin/index.php'; </script>";
    }
}
?>