<?php
$nums = [10, 20, 30];
echo array_reduce($nums, fn($num1, $num2) => $num1 + $num2);
echo "<br>";

echo array_sum($nums);