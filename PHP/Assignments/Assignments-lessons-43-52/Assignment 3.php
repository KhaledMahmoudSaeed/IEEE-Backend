<?php
function sum_all(...$nums)
{
    $sum = 0;
    foreach ($nums as $num) {
        if ($num == 5) {
            continue;
        } else {
            if ($num == 10) {
                $sum += 20;
            } else {
                $sum = $sum + $num;
            }
        }
    }
    return $sum;
}

echo sum_all(10, 12, 5, 6, 6, 10);
echo "<br>";
echo sum_all(5, 10, 5, 10);