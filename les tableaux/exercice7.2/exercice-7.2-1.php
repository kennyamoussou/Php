<?php
$etudiants = ['Awa', 'Paul', 'Koffi', 'Marie', 'Yao', 'Sarah', 'Moussa', 'Fatou', 'Eric', 'Linda'];
$k = (int) readline("Indice de l'étudiant démissionnaire ");
$position = -1;
for ($i = 0; $i < count($etudiants); $i++) {
    if (strtolower($etudiants[$i]) == strtolower($k)) {
        $position = $i;
        break;
    }
}
if ($position === -1) {
    echo "L'étudiant $k n'a pas été trouvé dans la liste.\n";
} else {
    for ($i = $position; $i < count($etudiants) - 1; $i++) {
        $etudiants[$i] = $etudiants[$i + 1];
    }
    $etudiants[10] = " ";
}