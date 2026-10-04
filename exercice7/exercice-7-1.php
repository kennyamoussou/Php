<?php
$a = 50;
$b = 20;
$c = 5;
if ($a > $b) {
    $max = $a;
}
if ($b > $max) {
    $max = $b;
}
if ($c > $max) {
    $max = $c;
}

echo "le plus grand est :", $max;
?>