<?php
$somme = 0;
$nombre = (int) readline("Entrez un nombre : ");
for ($i=1; $i <= 10; $i++) {
    echo "entrez le nombre $i : ";
    $nombre = (int) readline();
    $somme += $nombre;
}
echo "La somme est : $somme";