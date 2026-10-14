<?php

if (isset($_POST['nom'], $_POST['prenom'], $_POST['groupe']) && 
    trim($_POST['nom']) !== '' && 
    trim($_POST['prenom']) !== '' && 
    trim($_POST['groupe']) !== '') {

   
    $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8');
    $prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES, 'UTF-8');
    $groupe = htmlspecialchars($_POST['groupe'], ENT_QUOTES, 'UTF-8');

    echo "<h1>Bienvenue, $prenom $nom !</h1>";
    echo "<p>Vous appartenez au groupe : $groupe</p>";
} else {
    echo "<p>Veuillez remplir tous les champs du formulaire.</p>";
}
?>