<?php
$nums = [10, 100, -20, 50, 30];

$i = 0;
while (@$nums[$i]) {
    $i++;
}
$min = 0;
// // first solution
for ($j = 0; $j < $i; $j++) {
    if ($min >= $nums[$j]) {
        $min = $nums[$j];
    }
}

// // // second solution
// foreach($nums as $num){
//     if($min >=$num){
//     $min=$num;
//     }
// }

echo $min;