<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <h2>Formulaire d'inscription</h2>
    <form action="form.php" method="post">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="monNom" required><br><br>

        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="monPrenom" required><br><br>

        <label for="age">Age :</label><br>
        <input type="number" id="age" name="monAge" required><br><br>

        <input type="submit" value="Enregistrer">
    </form>

    <form action="users.php" method="get">
        <input type="submit" value="Afficher tous les utilisateurs">
    </form>
</body>
</html>
