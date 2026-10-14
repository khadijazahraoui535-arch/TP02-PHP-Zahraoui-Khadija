<?php

if (isset($_GET['nom'], $_GET['prenom'], $_GET['groupe']) && 
    trim($_GET['nom']) !== '' && 
    trim($_GET['prenom']) !== '' && 
    trim($_GET['groupe']) !== '') {

   
    $nom = htmlspecialchars($_GET['nom'], ENT_QUOTES, 'UTF-8');
    $prenom = htmlspecialchars($_GET['prenom'], ENT_QUOTES, 'UTF-8');
    $groupe = htmlspecialchars($_GET['groupe'], ENT_QUOTES, 'UTF-8');

    echo "<h1>Bienvenue, $prenom $nom !</h1>";
    echo "<p>Vous appartenez au groupe : $groupe</p>";
} else {
    echo "<p>Veuillez remplir tous les champs du formulaire.</p>";
}
?>