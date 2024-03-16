<?php

$title = "E&z\$r0 W\$b Sch00&";

$replacements = ["&z\$r0" => "l","\$" => "e","Sch00&" => "School",];

$title = str_replace(array_keys($replacements), array_values($replacements), $title);

echo $title;

$replacements_count = count($replacements);
echo "<br>";
echo  $replacements_count;