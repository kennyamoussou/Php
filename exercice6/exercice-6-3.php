<?php
$a = 15; 
$b = 0; 
if ($a != 0){
    $x = -$b / $a;
    echo "la solution de l'equation est ", $x;
}   elseif ($b == 0) {
    echo "Tout reel est solution de l'équation";
}   else {
    echo "l'equation n'admet pas de solution";
}
?>