<?php
$tab1 = [2, 0, 10, 20, 35];
$tab2 = [5, -5, 8, -2, -15];
$tab3 = [];

foreach ($tab1 as $i => $tab1Value) {
    $tab3[] = $tab1Value + $tab2[$i];
}
print_r($tab3);