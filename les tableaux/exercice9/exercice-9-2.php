<?php
$tab = [5, -3, 10, 7, 9];
for ($passage = 0; $passage < count($tab) - 1; $passage++) {
    while (true) {
        $echange = false;
        while ($i < count($tab) - 1 - $passage) {
            if ($tab[$i] > $tab[$i + 1]) {
                $temp = $tab[$i];
                $tab[$i] = $tab[$i + 1];
                $tab[$i + 1] = $temp;
                $echange = true;
            }
            $i++;
        }
    }
    echo "\n";
}