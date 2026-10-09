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
foreach ($prenoms as $value) {
    if ((strtolower($prenom)) === (strtolower($value))) {
        $compteur++;
    }
}
echo "Le prénom apparaît $compteur fois dans le tableau.";