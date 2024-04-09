<?php
echo "do-while loop <br>";
$index = 0;

do {
    echo $index . "<br>";
    $index += 2;
}
while ($index <= 20);

echo "while loop <br>";
$index = 0;
while ($index <= 20) {

    echo $index . "<br>";
    $index += 2;
}
echo "for loop <br>";
$index = 0;
for (; $index <= 20; $index += 2) {
    echo $index . "<br>";
}