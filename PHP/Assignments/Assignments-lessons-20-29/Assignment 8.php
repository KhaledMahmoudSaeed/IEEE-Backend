<?php
$a = @$b or die("Custom Error");


$f =(@file("Not_A_File")) or die("Custom Error");

(@include("Not_A_File")) or die("Custom Error");