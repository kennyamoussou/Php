<?php
echo "Donnez nous le nombre pour lequel vous voulez calculer le factoriel : ";
$n = readline();
if ($n <0) {
    echo "le factoriel de ce nombre n'existe pas";
} else {
    if ($n === 0) {
        echo "le factoriel de ce nombre est 1";
    } else {
        $factoriel = 1;
        $i = 1;
        while ($i <= $n) {
            $factoriel = $factoriel * $i;
            $i++;
        }
        echo "Le factoriel de ce nombre est " . $factoriel;
    }
}