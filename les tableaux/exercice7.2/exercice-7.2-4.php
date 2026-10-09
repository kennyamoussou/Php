<?php
$etudiants = ["Awa", "Bill", "Mamadou", "Bakary", "Bill", "Kiko", "Lassina", "Mamadou", "Pierre", "Esther"];
$nom = readline("Entrez le nom de l'étudiant à supprimer : ");
$pos = 0;
for ($i = 0; $i < count($etudiants); $i++) {
    $etudiant = $etudiants[$i];
    if (strtolower($etudiant) != strtolower($nom)) {
        $etudiants[$pos] = $etudiant;
        $pos++;
    }
}

for ($i = 0; $i < count($etudiants); $i++) {
    if ($i >= $pos) {
        $etudiants[$i] = " ";
    }
}

print_r($etudiants);

?>