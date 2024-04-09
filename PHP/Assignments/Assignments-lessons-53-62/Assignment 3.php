<?php
$str = 'aAa';
$num = 3;
$char = "_";

echo str_repeat(substr_replace(strtolower($str), "_", 3, 0), $num);