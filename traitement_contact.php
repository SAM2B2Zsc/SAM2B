<?php

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Envoie un e-mail avec les données
    $to = "samueldesousamartins@gmail.com"; // Remplacez cela par votre adresse e-mail
    $sujet = "Nouveau message depuis le formulaire de contact";
    $contenu = "Nom: $nom\n";
    $contenu .= "Email: $email\n";
    $contenu .= "Message:\n$message\n";

    // En-têtes pour l'e-mail
    $headers = "From: $nom <$email>";

    // Envoi de l'e-mail
    if (mail($to, $sujet, $contenu, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Désolé, une erreur s'est produite lors de l'envoi de votre message.";
    }
}

?>