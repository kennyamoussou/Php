<?php
$somme = 0;
while ($somme < 100) {
    $nombre = (int)readline("veuillez entrer un nombre : ");
    $somme += $nombre;
}
echo "La somme est : $somme";
