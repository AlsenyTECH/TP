<?php
$TB=[
    "DIALLO" => [
        "Prenom" => " Alseny",
        "Ville" =>" Conakry",
        "Age" =>" 24 ans"],

    "DIAW" => [
        "Prenom" => " Mame Abdou",
        "Ville" =>" IPM",
        "Age" =>" 45 ans"
    ],

    'NDIAYE' => [
        "Prenom" => " Yaye Fatou",
        "Ville" =>" Dakar",
        "Age" =>" 22 ans"],
        
];

foreach($TB as $list => $db){
    echo $list ."\n";
    echo $db["Prenom"], $db["Ville"], $db["Age"]."\n";
}

?>