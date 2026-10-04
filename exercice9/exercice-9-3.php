<?php

$a = 5;
$b = 10;
$c = 12;

$choix = 3;
switch ($choix) {
    case 1:
        $resultat = $a + $b + $c;
        echo "La somme est : $resultat";
        break;

    case 2:
        $resultat = $a * $b * $c;
        echo "Le produit est : $resultat";
        break;

    case 3:
        $resultat = ($a + $b + $c) / 3;
        echo "La moyenne est : $resultat";
        break;

    case 4:
        $resultat = $a;
        if ($b < $resultat) {
            $resultat = $b;
        }
        if ($c < $resultat) {
            $resultat = $c;
        }
        echo "Le minimum est : $resultat";
        break;

    default:
        echo "Choix invalide : entrez un numéro entre 1 et 4";
    
}
?>