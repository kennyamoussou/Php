<?php
$tab = [5, -3, 10, 7, 9];
for ($passage = 0; $passage < count($tab) - 1; $passage++) {
    for ($i = 0; $i < count($tab) - 1 - $passage; $i++) {
        if ($tab[$i] > $tab[$i + 1]) {
            $temp = $tab[$i];
            $tab[$i] = $tab[$i + 1];
            $tab[$i + 1] = $temp;
            $echange = true;
        }
    }
    if (!$echange) {
        break;
    }
    for ($i = 0; $i < 5; $i++) {
        echo $tab[$i] . " ";
    }
    echo "\n";
}