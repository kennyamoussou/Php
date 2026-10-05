<?php
$a = (int)readline("Entrez un nombre entier : ");
$b = (int)readline("Entrez un nombre entier : ");
while ($b != 0) {
    $r = $a % $b;
    $a = $b;
    $b = $r;
}
echo "Le PGCD est : $a\n";