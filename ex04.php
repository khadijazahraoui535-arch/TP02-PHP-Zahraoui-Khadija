<?php
$v1 = 42;
$v2 = "42";
$v3 = 15.8;
$v4 = true;
$v5 = false;
$v6 = null;

echo "<pre>";
var_dump($v1, $v2, $v3, $v4, $v5, $v6);
echo "</pre>";

$v2_int = (int)$v2; 
$v3_int = (int)$v3; 
$v1_str = (string)$v1; 

echo "<p>Conversion de \"42\" en entier : ";
var_dump($v2_int);
echo "</p>";

echo "<p>Conversion de \"15.8\" en entier : ";
var_dump($v3_int);
echo "</p>";

echo "<p>Conversion de 42 en chaîne : ";
var_dump($v1_str);
echo "</p>";

echo "<p>Affichage de true avec echo : " . $v1_str . " (bool true s'affiche '1')</p>"; // true affiche 1
echo "<p>Affichage de false avec echo : " . $v5 . " (bool false s'affiche sous forme de chaîne vide)</p>"; // false n'affiche rien

echo "<pre>";
echo "var_dump(true) : "; var_dump($v4);
echo "var_dump(false) : "; var_dump($v5);
echo "</pre>";

$b1 = (bool)0;
$b2 = (bool)"0";
$b3 = (bool)"PHP";
$b4 = (bool)[];

echo "<pre>";
var_dump($b1, $b2, $b3, $b4);
echo "</pre>";
?>