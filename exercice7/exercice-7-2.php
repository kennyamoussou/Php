<?php
$a = 50;
$b = 20;
$c = 0;
if ($a >= $b) {
    if ($a > $c) {
        echo "le plus grand est : $a";
    } else {
        echo "le plus grand est : $c";
    }
}   else {
    if ($b >= $c) {
        echo "le plus grand est : $b";
    } else {
        echo "le plus grand est : $c";
    }
}
?>