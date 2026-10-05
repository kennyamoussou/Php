<?php
$a = (int) readline("Entrez a : ");
$b = (int) readline("Entrez b : ");

$pgcd = 1;

for ($i = 1; $i <= $a; $i++) {
    if ($a % $i == 0 && $b % $i == 0) {
        $pgcd = $i;
    }
}

echo "Le PGCD de $a et $b est : $pgcd";