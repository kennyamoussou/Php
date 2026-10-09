<?php
$chanteurs = [ 'Johnny Hallyday', 'Davido', 'Soprano', 'Taylor swift', 'Wizkid' ,'Central cee', 'Lil Nas X', 'Kendrick', 'Drake', 'Eminem', 'Ninho', 'Booba', 'Aya Nakamura', 'Niska', 'Jul', 'Damso', 'MHD', 'Gims', 'Nekfeu', 'Lomepal'];
$nom = readline("Veuillez entrer le nom d'un chanteur : ");
$i = 0;
$trouve = false;
while ($i < 20 && !$trouve) {
    if (strtolower($chanteurs[$i]) == strtolower($nom)) {
        $trouve = true;
    }
    $i++;
}
if ($trouve) {
    echo "Le chanteur a été trouvé dans la liste.";
} else {
    echo "Le chanteur n'a pas été trouvé dans la liste.";
}