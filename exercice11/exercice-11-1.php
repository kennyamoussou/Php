<?php
$compteur = 0;

$nom = readline("Entrez votre nom (ZZZZ pour arrêter) : ");

while ($nom != "ZZZZ") {
    $compteur++;
    $nom = readline("Entrez votre nom (ZZZZ pour arrêter) : ");
}
echo "Bravo vous avez trouvé 'ZZZZ' au bout de  : $compteur tentatives.";
?>