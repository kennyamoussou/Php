<?php
$tab1 = [2, 0, 10, 20, 35];
$tab2 = [5, -5, 8, -2, -15];
$tab3 = [];

for ($i = 0; $i < 5; $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}
print_r($tab3);