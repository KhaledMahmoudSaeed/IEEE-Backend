<?php
$zero = fopen("zero.txt", "r+");
$num = mb_strlen("Hello ", "8bit");
fseek($zero, $num);
echo fwrite($zero, "Elzero Web");
fseek($zero, $num);
echo "<br>";
echo fgets($zero);
echo fgets($zero);

