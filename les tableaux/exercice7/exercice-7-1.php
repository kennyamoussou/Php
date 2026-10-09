<?php
$etudiants = ['Awa', 'Paul', 'Koffi', 'Marie', 'Yao', 'Sarah', 'Moussa', 'Fatou', 'Eric', 'Linda'];
$k = (int) readline("Indice de l'étudiant démissionnaire ");
for ($i = $k; $i < count($etudiants) - 1; $i++) {
    $etudiants[$i] = $etudiants[$i + 1];
}
$etudiants[count($etudiants) - 1] = null;
var_dump($etudiants);