<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($i = 1; $i <= count($mix) - 1; $i++) {
    if ($mix[$i] >= 65) {
        continue;
    } else {
        echo $mix[$i] . "<br>";
    }
}