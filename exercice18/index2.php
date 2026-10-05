<?php
echo "Donnez nous le nombre pour lequel vous voulez calculer le factoriel : ";
$n = readline();
if ($n <0) {
    echo "Le factoriel de ce nombre n'existe pas";
} else {
    if ($n === 0) {
        echo "Le factoriel de ce nombre est 1";
    } else {
        $factoriel = 1;
        $i = 1;
        for ($i = 1; $i <= $n; $i++) {
            $factoriel = $factoriel * $i;
        }
        echo "Le factoriel de ce nombre est " . $factoriel;
    }
}