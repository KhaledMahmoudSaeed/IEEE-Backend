<?php
date_default_timezone_set("Africa/Cairo");
$date = "1990-10-01";
$unix = "1970-01-01";
$diff = strtotime($date) - strtotime($unix);
echo "From Epoch Time Till 1990-10-01 Is Approximately " . round($diff / 60 / 60 / 24, 5) . " Days" . "<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately" . round($diff / 31556926, 1) . " Years";