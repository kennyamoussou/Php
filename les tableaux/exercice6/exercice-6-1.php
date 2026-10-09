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
$compteur = 0;

for ($i = 0; $i < 50; $i++) {
    if ((strtolower($prenoms[$i])) == (strtolower($prenom))) {
        $compteur++;
    }
}   
echo "Le prénom apparaît $compteur fois dans le tableau.";