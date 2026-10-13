<?php
echo "<h3>Partie 1 : Nombres pairs</h3>";
$i = 0;
while ($i <= 20) {
    if ($i == 10) {
        echo "<b>$i</b> ";
    } else {
        echo "$i ";
    }
    $i += 2;
}


echo "<h3>Partie 2 : Comparaison while vs do-while</h3>";

$compteur = 5;
$executions_while = 0;
while ($compteur < 5) {
    $executions_while++;
    $compteur++;
}
echo "Exécutions de la boucle while : $executions_while<br>";

$compteur = 5;
$executions_dowhile = 0;
do {
    $executions_dowhile++;
    $compteur++;
} while ($compteur < 5);
echo "Exécutions de la boucle do-while : $executions_dowhile<br>";


echo "<h3>Partie 3 : Boucle avec continue et break</h3>";
for ($n = 1; $n <= 20; $n++) {
    
    if ($n >= 16) {
        break;
    }
    
    if ($n % 3 == 0) {
        continue;
    }
    echo "$n ";
}
?>