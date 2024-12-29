<?php
// Déclaration du tableau
$articles = [
    "Accer 6200" => [0.18, 871.60, 11],
    "TOSHIBA 4002" => [0.18, 1039.78, 8],
    "PAPIER A4" => [0.18, 7.34, 214],
];

// Générer une structure HTML
echo "<table border='1'>";
echo "<tr>
        <th>Article</th>
        <th>Prix Unitaire (HTVA)</th>
        <th>Quantité Vendue</th>
        <th>TVA (%)</th>
        <th>Total (TTC)</th>
      </tr>";

// Parcourir les articles
$TotalVentes = 0;
foreach ($articles as $nom => $details) {
    $tva = $details[0];
    $prixUnitaire = $details[1];
    $quantite = $details[2];
    $totalTTC = $prixUnitaire * $quantite * (1 + $tva);
    $TotalVentes += $totalTTC;
    echo "<tr>
            <td>$nom</td>
            <td>$prixUnitaire FCFA</td>
            <td>$quantite</td>
            <td>" . ($tva * 100) . "%</td>
            <td>" . number_format($totalTTC, 2, ',', ' ') . " FCFA</td>
          </tr>";
}

echo "<tr>
        <td colspan='4' style='text-align: right; font-weight: bold;'>Total des ventes :</td>
        <td>" . number_format($TotalVentes, 2, ',', ' ') . " FCFA</td>
      </tr>";

echo "</table>";





//Monsieur j'ai fais les calculs du prix unitaire sur papier pour ne pas surcharger le code.
//pour connaitre le prix unitaire on fait juste prix TVAC diviser par (1+0,18). 0,18 represente les (18%) du tva.
//j'ai aussi mit les scripts css dans le code HTML parce que j'en avait besoin juste pour bien aaficher la ligne des toatle ventes  car sans cela je ne trouve pas une autre methode pour affichage correct
?>

