<?php

$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); 
var_dump($c > $a); 
var_dump($a <= $b); 
var_dump($b >= $a); 
var_dump($a !== $c); 
var_dump($a <> $c); 
var_dump(gettype($a)== gettype($b)); 
var_dump(gettype($a) === gettype($b)); 
var_dump(gettype((float) $a) != gettype($b)); 