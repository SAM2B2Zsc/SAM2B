<?php
    // Database connection
    $pdo = require '../connect.php';

    // Retrieve image data from database
    $stmt = $pdo->prepare('SELECT libelle FROM images WHERE id = 1');
    $stmt->execute();
    $images = $stmt->fetchColumn();

    // Output image
    if ($images) {
        // Set appropriate headers
        header('Content-Type: image/png'); // Adjust content type based on image type
        header('Content-Disposition: attachment; filename="cv samuel.png"'); // Force download with original filename

        // Output image data
        echo $images;
        exit();
    } else {
        echo "Image not found.";
    }
?>
