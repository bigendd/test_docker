<?php
include 'database.php';

try {
    $query = $cnx->query("SELECT nom, prenom, age FROM users");

    while ($user = $query->fetch(PDO::FETCH_ASSOC)) {
        echo "Nom : " . htmlspecialchars($user['nom']) . "<br>";
        echo "Prénom : " . htmlspecialchars($user['prenom']) . "<br>";
        echo "Âge : " . htmlspecialchars($user['age']) . "<br><br>";
    }
} catch (PDOException $e) {
    echo "Erreur lors de la récupération des données : " . $e->getMessage();
}


