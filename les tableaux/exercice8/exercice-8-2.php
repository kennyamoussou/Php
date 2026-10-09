<?php
$tab1 = [2, 0, 10, 20, 35];
$tab2 = [5, -5, 8, -2, -15];
$tab3 = [];

$i = 0;
while ($i < 5) {
    $tab3[] = $tab1[$i] + $tab2[$i];
    $i++;
}
print_r($tab3);