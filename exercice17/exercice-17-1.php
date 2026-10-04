<?php
for ($i = 1; $i <= 10; $i++) {
    echo "table de multiplication de $i : <br>";
    for ($j = 0; $j <= 12; $j++) {
        echo "$i x $j = " . ($i * $j) . "<br>";
    }
    echo "<br>";
}