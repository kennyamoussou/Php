<?php
$a = (float) readline("Veuillez entrer un réel : ");
$b = (float) readline("Veuillez entrer un réel : ");

if ($a > $b) {
    echo $a, " est le plus grand";
}

if ($b > $a) {
    echo $b, " est le plus grand";
}

if ($a == $b) {
    echo "Il n'y a pas de plus grand";
}
?>