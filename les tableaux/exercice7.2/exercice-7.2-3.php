<?php
$etudiants = ["Awa", "Bill", "Mamadou", "Bakary", "Bill", "Kiko", "Lassina", "Mamadou", "Pierre", "Esther"];
$nom = readline("Entrez le nom de l'étudiant à supprimer : ");
$pos = 0;
foreach ($etudiants as $etudiant) {
    if (strtolower($etudiant) != strtolower($nom)) {
        $etudiants[$pos] = $etudiant;
        $pos++;
    }
}

foreach ($etudiants as $i => $etudiant) {
    if ($i >= $pos) {
        $etudiants[$i] = ' ';
    }
}

print_r($etudiants);

?>