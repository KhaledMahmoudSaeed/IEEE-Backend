<?php
$nums = [11, 2, 10, 7, 20, 50];

$i=0;
while(@$nums[$i]){
    $i++;
}
$sum=0;
// first solution
for($j=0;$j<$i;$j++){
    $sum+=$nums[$j];
}

// second solution
// foreach($nums as $num){
//     $sum+=$num ;
// }

echo $sum;