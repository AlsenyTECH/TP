<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adresse Client</title>
</head>
<body>
    <h2>Adresse Client</h2>
    <form action="Exercice3trait.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br><br>
        
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br><br>
        
        <label for="adresse">Adresse :</label>
        <input type="text" name="adresse" id="adresse" required><br><br>
        
        <label for="ville">Ville :</label>
        <input type="text" name="ville" id="ville" required><br><br>
        
        <label for="code_postal">Code postal :</label>
        <input type="text" name="code_postal" id="code_postal" required><br><br>
        
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
