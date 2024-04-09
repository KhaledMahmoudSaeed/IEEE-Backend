<?php
$num_one = 23;
$num_two = 5;
$op = "/";

switch ($op) {
    case "+":
        echo 28;
        break;

    case "-":
        echo 18;
        break;

    case "/":
        echo (int) (23 / 5);
        echo '<br>';
        echo 23 % 5;
        break;

    case "*":
        echo 115;
        break;

    default:
        echo "Unknown Operation";

}