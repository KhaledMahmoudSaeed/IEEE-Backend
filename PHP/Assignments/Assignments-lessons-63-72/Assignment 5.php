<?php
$nums = [5, 10, 20, 5, 30, 40];

$filtered_nums = array_filter($nums, fn($num) => $num != 5);


$total = array_sum($filtered_nums);

echo $total;