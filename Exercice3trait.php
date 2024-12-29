<?php

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$adresse = htmlspecialchars($_POST['adresse']);
$ville = htmlspecialchars($_POST['ville']);
$codePostal = htmlspecialchars($_POST['code_postal']);


echo "<h2>Données du client</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Champ</th><th>Valeur</th></tr>";
echo "<tr><td>Nom</td><td>$nom</td></tr>";
echo "<tr><td>Prénom</td><td>$prenom</td></tr>";
echo "<tr><td>Adresse</td><td>$adresse</td></tr>";
echo "<tr><td>Ville</td><td>$ville</td></tr>";
echo "<tr><td>Code Postal</td><td>$codePostal</td></tr>";
echo "</table>";
?>
