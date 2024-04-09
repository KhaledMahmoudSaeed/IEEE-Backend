<?php
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);

echo current($names) . "<br>";
end($names);
echo current($names) . "<br>";

reset($names);
echo current($names) . "<br>";
end($names);
prev($names);

echo current($names) . "<br>";