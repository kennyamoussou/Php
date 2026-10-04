<?php
$a = 50;
$b = 20;
$c = 0;
if ($a >= $b && $a >= $c) {
    echo "Le plus grand est : ", $a;
} elseif ($b >= $a && $b >= $c) {
    echo "Le plus grand est : ", $b;
} else {
    echo "Le plus grand est : ", $c;
}
?>