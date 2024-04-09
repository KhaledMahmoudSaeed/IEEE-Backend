<?php
$message = "Hello";
$$message = fn($d) => "Hello" . " " . $d;

echo $Hello("Osama"); // Hello Osama