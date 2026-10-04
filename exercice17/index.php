<?php
$i = 0;

while ($i <= 10) {
   $j = 0;
   echo "table de multiplication de $i : <br>";
   while ($j <= 12) {
       echo "$i x $j = " . ($i * $j) . "<br>";
       $j++;
   }
   echo "<br>";
   $i++;
}