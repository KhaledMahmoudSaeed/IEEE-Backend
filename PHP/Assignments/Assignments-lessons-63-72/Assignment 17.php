<?php
$nums = [1, 2, 3, 4, 5, 6];

function shuffleArray($array) {
for ($i =0 ; $i <count($array); $i++) {
    $random_index = mt_rand(0, $i); 
    $temp = $array[$i];
    $array[$i] = $array[$random_index];
    $array[$random_index] = $temp;
}
return $array;
}

echo "<pre>";
print_r(shuffleArray($nums));
echo "</pre>";