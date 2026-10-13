<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];


echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Étudiant</th><th>Note</th><th>Validé</th></tr>";

$somme = 0;
$nombreEtudiants = count($notes);
$etudiantsValides = 0;
$meilleureNote = -1;
$meilleurEtudiant = "";

foreach ($notes as $nom => $note) {
 
    $somme += $note;
    
    $statut = ($note >= 10) ? "Validé" : "Non validé";
    if ($note >= 10) {
        $etudiantsValides++;
    }
    

    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }
    
    echo "<tr><td>$nom</td><td>$note</td><td>$statut</td></tr>";
}
echo "</table>";


$moyenneClasse = $somme / $nombreEtudiants;

echo "<p>Somme des notes : $somme</p>";
echo "<p>Moyenne de la classe : $moyenneClasse</p>";

echo "<p>Nombre d'étudiants ayant validé : $etudiantsValides</p>";


echo "<p>Meilleure note : $meilleureNote par $meilleurEtudiant</p>";
?>