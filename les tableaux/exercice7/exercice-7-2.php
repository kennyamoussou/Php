<?php
$etudiants = ["Jean", "Marie", "Pierre", "Lucie", "Paul", "Sophie", "Julien", "Claire", "Antoine", "Isabelle"];
$p = readline("entrez l'indice de l'étudiant ayant démissionné: ");
while ($i < count($etudiants) - 1) {
    $etudiants[$i] = $etudiants[$i + 1];
    $i++;
} 
$etudiants[count($etudiants) - 1] = null;
var_dump($etudiants);