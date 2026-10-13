<?php

echo "<section>";
$nombre = 7;
echo "<h3>Table de multiplication de $nombre</h3>";
for ($i = 1; $i <= 10; $i++) {
    $resultat = $nombre * $i;
    echo "$nombre &times; $i = $resultat<br>";
}
echo "</section>";

echo "<section>";
echo "<h3>Pyramide d'étoiles</h3>";
echo "<pre>"; 
for ($ligne = 1; $ligne <= 6; $ligne++) {
    for ($j = 1; $j <= $ligne; $j++) {
        echo "*";
    }
    echo "\n";
}
echo "</pre>";
echo "</section>";
?>