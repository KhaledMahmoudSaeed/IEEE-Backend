<?php
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;
echo "<pre>";
print_r(array_pad($chars,count($chars)+count($chars),$char[$zero]));
echo "</pre>";