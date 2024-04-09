<?php
$mix = [1, 2, "A", "B", "C", 3, 4];

$num_numbers = 0;
$num_letters = 0;
for ($i = 0; $i <= count($mix) - 1; $i++) {
    if ($mix[$i] >= 65) {
        $num_letters++;

        continue;
    } else {
        echo $mix[$i] . "<br>";
        $num_numbers++;
    }
}
echo $num_numbers . " Numbers Printed<br>";
echo $num_letters . " Letters Ignored";