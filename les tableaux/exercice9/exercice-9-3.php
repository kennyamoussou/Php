<?php
$notes = [5, -3, 10, 7, 9, 15, 58, 20, 36, 17];

var_dump($notes, count($notes));

for ($i=0; $i < count($notes) - 1 ; $i++) {
   for ($j=$i+1; $j < count($notes); $j++) { 
      if ($notes[$i] > $notes[$j]) {
         $permutte = $notes[$i];
         $notes[$i] = $notes[$j];
         $notes[$j] = $permutte;
      }
   }
}

echo '<pre>';
var_dump($notes);
echo '</pre>';