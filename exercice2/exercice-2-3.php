<?php
$annee = 2005;
$age = 2026 - $annee;

if ($age < 10) {
    echo "Cet enfant a moins de 10 ans";
}  elseif ($age > 10) {
    echo "Cet enfant a plus de 10 ans";
}   else {
    echo 'Cet enfant a 10 ans';
}
?>