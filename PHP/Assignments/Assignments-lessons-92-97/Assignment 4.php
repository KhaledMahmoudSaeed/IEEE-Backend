<?php
date_default_timezone_set("Africa/Cairo");
$date = date_create("1990-10-01");
$unix = date_create("1970-01-01");
$diff = date_diff($date, $unix);

echo "From Epoch Time Till 1990-10-01 Is Approximately " . $diff->days . " Days" . "<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately " . round($diff->days / 30 / 12, 0) . " Years";
