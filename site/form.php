<?php
include 'database.php';

if (isset($_POST['monNom']) && isset($_POST['monPrenom']) && isset($_POST['monAge'])) {
    try {

        $insert = $cnx->prepare("INSERT INTO users (nom, prenom, age) VALUES (:nom, :prenom, :age)");

        $insert->bindParam(':nom', $_POST['monNom']);
        $insert->bindParam(':prenom', $_POST['monPrenom']);
        $insert->bindParam(':age', $_POST['monAge']);

        
        if ($insert->execute()) {
            header("Location: index.php");        
              } else {
            echo "Erreur lors de l'enregistrement des données.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "Veuillez remplir tous les champs.";
}

