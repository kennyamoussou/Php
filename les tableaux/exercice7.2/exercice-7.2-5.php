<!-- <?php
$noms = ["Awa", "Bill", "Mamadou", "Bakary", "Bill", "Kiko", "Lassina", "Mamadou", "Pierre", "Esther"];
$taille = 10;

$nomASupprimer = readline("Entrez le nom de l'étudiant à supprimer : ");

$trouver = true;

while ($trouver) {
    $trouver = false;
    $position = -1;

    foreach ($noms as $cle => $nom) {
        if (strtolower($nom ?? '') === strtolower($nomASupprimer)) {
            $trouver = true;
            $position = $cle;
            break;
        }
    }

    if ($position !== -1) {
        for ($i = $position; $i < $taille - 1; $i++) {
            $noms[$i] = $noms[$i + 1];
        }
        $noms[$taille - 1] = " ";
    }
}
var_dump($noms);
?>