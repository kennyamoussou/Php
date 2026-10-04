<?php
$couleurs = 'NOIR';
$couleurs = strtolower ($couleurs);

switch ($couleurs) {
    case 'rouge':
        echo "Veuillez vous arrêrez";
        break;
    case 'orange':
        echo "Veuillez Ralentir";
        break;
    case 'vert':
        echo "Veuillez passez";
        break;
    
    default:
        echo "commande inconnu";
        break;
}