<?php

$a = 5;
$b = 10;
$c = 12;

$choix = 3;

if ($choix == 1) {
    $resultat = $a + $b + $c;
    echo "La somme est : " . $resultat;
}

if ($choix == 2) {
    $resultat = $a * $b * $c;
    echo "Le produit est : " . $resultat;
}

if ($choix == 3) {
    $resultat = ($a + $b + $c) / 3;
    echo "La moyenne est : " . $resultat;
}

if ($choix == 4) {
    $resultat = $a;
    if ($b < $resultat) {
        $resultat = $b;
    }
    if ($c < $resultat) {
        $resultat = $c;
    }
    echo "Le minimum est : " . $resultat;
}

if ($choix < 1 || $choix > 4) {
    echo "Choix invalide : entrez un numéro entre 1 et 4";
}
?>