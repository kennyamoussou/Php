<?php
$chanteurs = [ 'Johnny Hallyday', 'Davido', 'Soprano', 'Taylor swift', 'Wizkid' ,'Central cee', 'Lil Nas X', 'Kendrick', 'Drake', 'Eminem', 'Ninho', 'Booba', 'Aya Nakamura', 'Niska', 'Jul', 'Damso', 'MHD', 'Gims', 'Nekfeu', 'Lomepal'];
$nom = readline("Veuillez entrer le nom d'un chanteur : ");
$trouve = false;
foreach ($chanteurs as $value) {
    if (strtolower($value) == strtolower($nom)) {
        $trouve = true;
        break;
    }
}
if ($trouve) {
    echo "Le chanteur a été trouvé dans la liste.";
} else {
    echo "Le chanteur n'a pas été trouvé dans la liste.";
}