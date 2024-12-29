<?php
$budget = 10000; 
$achats = 20000; 


if ($budget >= $achats) {
    echo "Votre budget de " . $budget. " FCFA est suffisant pour payer vos achats de " .$achats. " FCFA.";
} else {
    $manque = $achats - $budget;
    echo "Votre budget est issufisant pour payer vos achats, il vous manques une somme de " .$manque. " FCFA";
}
?>
