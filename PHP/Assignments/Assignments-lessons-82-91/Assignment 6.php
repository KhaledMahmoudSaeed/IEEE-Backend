<?php
$zero = fopen("zero.txt", "r");

$num = mb_strlen("Hello Elzero Web\n\rSchool", "8bit");

echo fread($zero, $num);
echo "<br>";
rewind($zero);
echo fgets($zero);
echo fgets($zero);
rewind($zero);
echo "<br>";
echo file_get_contents("zero.txt", false, NULL, 0, $num);
echo "<br>";

for ($i = 1; $i <= $num; $i++) {
    echo fgetc($zero);
}

fclose($zero);
