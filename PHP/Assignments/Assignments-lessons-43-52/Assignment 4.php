<?php
function sum_all(...$nums)
{
    $mult = 1;
    foreach ($nums as $num) {
        if (is_string($num)) {
            continue;
        } elseif (is_float($num)) {
            $mult *= (int) $num;
        } else {
            $mult *= $num;
        }
    }

    return $mult;
}

echo sum_all(10, 20);
echo "<br>";
echo sum_all("A", 10, 30);
echo "<br>";
echo sum_all(100.5, 10, "B");