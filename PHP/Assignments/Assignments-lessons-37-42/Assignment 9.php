<?php
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for (; $help_num < count($nums); $help_num++) {
    if ($help_num == 5)
        break;
    echo $names[$nums[$help_num]] . "<br>";
}