<?php

//first 
echo time() . "<br>";

//second
list($microseconds, $seconds) = explode(' ', microtime());
$currentUnixTimestamp = (int) $seconds;
echo $currentUnixTimestamp . "<br>";

//third
$currentUnixTimestamp = $_SERVER['REQUEST_TIME'];
echo $currentUnixTimestamp . "<br>";

//this code get time too but not exacatly
// $diff = date_diff(date_create(), date_create("1970/01/01 00:00:00"));
// echo $diff->days * 24 * 60 * 60 . "<br>";