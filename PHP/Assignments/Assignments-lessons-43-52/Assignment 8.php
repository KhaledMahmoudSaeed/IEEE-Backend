<?php
$message = "Hello";

${$message} = function($name) use ($message) {
    return $message . " " . $name;
};

echo ${$message}("Osama"); // Hello Osama
