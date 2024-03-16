<?php
$nums = [10, 100, -20, 50, 30];

$i=0;
while(@$nums[$i]){
    $i++;
}
$max=0;
// // first solution
// for($j=0;$j<$i;$j++){
//     if($max <=$nums[$j]){
//         $max=$nums[$j];
//     }
// }

// // second solution
foreach($nums as $num){
    if($max <=$num){
    $max=$num;
    }
}

echo $max;