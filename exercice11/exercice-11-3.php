<?php
$compteur = 0;

$nom = readline("Entrez votre nom (ZZZZ pour arrêter) : ");

foreach (range(0, 4) as $i) {
    if ($nom != "ZZZZ") {
        $compteur++;
        $nom = readline("Entrez votre nom (ZZZZ pour arrêter) : ");
    } else {
        break;
    }
}
echo "Bravo vous avez trouvé 'ZZZZ' au bout de  : $compteur tentatives.";
?>