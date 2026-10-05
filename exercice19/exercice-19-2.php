<?php
$a = (int)readline("Entrez le nombre a : ");
$b = (int)readline("Entrez le nombre b : ");
for ($i = 1; $i <= min($a, $b); $i++) {
    if ($a % $i == 0 && $b % $i == 0) {
        $pgcd = $i;
    }
}
echo "Le PGCD est : $pgcd\n";