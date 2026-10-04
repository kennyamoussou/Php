<?php
$a = 10;
$b = 12;

$diff = $a - $b;

if ($diff < 0) {
    $valeur_absolue = -$diff;
} elseif ($diff > 0) {
    $valeur_absolue = $diff;
} else {
    $valeur_absolue = 0;
}
echo "La valeur absolue est : ", $valeur_absolue;
?>