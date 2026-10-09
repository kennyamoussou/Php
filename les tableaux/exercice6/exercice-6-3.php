<?php
$prenoms = ['Marie', 'Paul', 'Awa', 'Koffi', 'Aminata',
    'Jean', 'Fatou', 'Yao', 'Sarah', 'Moussa',
    'Marie', 'Ibrahim', 'Aya', 'Kouame', 'Nadia',
    'Jean', 'Salif', 'Yao', 'Rachel', 'Moussa',
    'Awa', 'Paul', 'Marie', 'Koffi', 'Mariam',
    'David', 'Fatou', 'Eric', 'Sarah', 'Issa',
    'Aminata', 'Jean', 'Linda', 'Kevin', 'Awa',
    'Rose', 'Junior', 'Aya', 'Nadia', 'Grace',
    'Olivier', 'Estelle', 'Hamidou', 'Brice', 'Clarisse',
    'Alassane', 'Esther', 'Daniel', 'Mireille', 'Samuel'];
$prenom = trim(readline("Veuillez saisir un prénom : "));
$i=0;
$compteur = 0;

while ($i < 50) {
    if ((strtolower($prenoms[$i])) == (strtolower($prenom))) {
        $compteur++;
    }
    $i++;
}
echo "Le prénom apparaît $compteur fois dans le tableau.";