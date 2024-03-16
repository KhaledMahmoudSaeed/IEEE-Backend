<?php
$chars = ["A", "B", "C"];
// array_push($chars,"D");
// $chars[]="D";
// $chars[count($chars)]="D";
$chars=array_merge($chars,["D"]);

echo "<pre>";
print_r($chars);
echo "</pre>";

