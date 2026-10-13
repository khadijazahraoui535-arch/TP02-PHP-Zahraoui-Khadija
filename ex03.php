<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<body>
<?php
define("TAUX_TVA" , 20);
define("DEVISE" , "MAD");
$prix_unit_ht = 60;
$quantite = 3;
$frais_livraison = 15
$total_ttc += $frais_livraison ;
echo "<h2>Recapitulatif de la commande</h2>";
echo "Total HT :" . $total_ht . " " . DEVISE . "<br>";
echo "TVA (" . TAUX_TVA . "%) : " . $montant_tva . " " . DEVISE . "<br><br>";
echo "Montant Final (avec livraison de 15 MAD) : " . $total_ttc . " " . DEVISE . "<br><br>";
if (defined("TAUX_TVA")){
    echo "La constante TAUX_TVA existe bien et sa valeur est " . TAUX_TVA . "%."; 
}
?>
</body>
</html>
