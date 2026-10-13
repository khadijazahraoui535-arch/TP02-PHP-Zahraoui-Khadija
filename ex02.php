<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>
<?php
$nom = "Zahraoui";
$prenom = "Khadija";
$age = 20;
$formation = "Developpement Web";
$phrase = "Je m'appelle" . $prenom . " " . $nom . ",j'ai " . $age . " ans et je suis en formation " . $formation . ".";
$phrase .= "J'apprends PHP.";
echo $phrase . "<br><br>";
$note = 12;
$Note = 16;
echo "Valeur de \$note :" . $note ."<br>";
echo "Valeur de \$Note :" . $Note ."<br>";
?>
</body>
</html>
