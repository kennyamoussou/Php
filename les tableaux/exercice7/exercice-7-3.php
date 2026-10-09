<?php
$etudiants = ["Jean", "Marie", "Pierre", "Lucie", "Paul", "Sophie", "Julien", "Claire", "Antoine", "Isabelle"];
$p = readline("entrez l'indice de l'étudiant ayant démissionné: ");
foreach ($etudiants as $index => $etudiant) {
    if ($index >= $p) {
        $etudiants[$index] = $etudiants[$index + 1] ?? null;
    }
}
var_dump($etudiants);