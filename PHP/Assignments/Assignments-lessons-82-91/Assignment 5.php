<?php
echo "<pre>";
print_r(pathinfo(__FILE__, PATHINFO_BASENAME));
echo "</pre>";
echo basename(__FILE__);
echo "<br>";
$current = pathinfo(__FILE__, PATHINFO_FILENAME) . "." . pathinfo(__FILE__, PATHINFO_EXTENSION);
echo $current;
echo "<br>";
echo basename($_SERVER["REQUEST_URI"]);
echo "<br>";
echo basename($_SERVER['PHP_SELF']);
echo "<br>";
echo basename($_SERVER["SCRIPT_FILENAME"]);
echo "<br>";
echo basename($_SERVER['SCRIPT_NAME']);