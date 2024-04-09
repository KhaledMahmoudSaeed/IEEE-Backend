<?php
$a = "Elzero";
$b = "Web";
$c = "School";

$d = $a . " " . $b . " " . $c . " ";// or $d="$a $b $c";
echo $d;
echo '<br>';


$d = $a . " ";
$d .= $b . " ";
$d .= $c;
echo $d;
echo '<br>';


$d = $a . " ";
$d .= "{$b} {$c}";
echo $d;
echo '<br>';


$arry = [1 => $a, 2 => $b, 3 => $c];
$d = "{$arry[1]} {$arry[2]} {$arry[3]}  ";
echo $d;
echo '<br>';


$arry1 = [1 => $a];
$arry2 = [2 => $b];
$arry3 = [3 => $c];
$d = "{$arry1[1]} {$arry2[2]} {$arry3[3]}  ";
echo $d;
echo '<br>';


$d = implode(' ', array($a, $b, $c));
echo $d;
echo '<br>';
/*echo '<br>'; 
echo"{$a} {$b} {$c}";
echo '<br>'; */
