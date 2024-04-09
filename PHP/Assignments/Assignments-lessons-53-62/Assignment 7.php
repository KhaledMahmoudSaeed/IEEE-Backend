<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

$all = implode($chars);
$tr = [1 => NULL, 2 => NULL];
echo ucfirst(strtolower(strtr($all, $tr)));