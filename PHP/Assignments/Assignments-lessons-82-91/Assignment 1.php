<?php

echo round(disk_total_space("C:") / 1024 / 1024 / 1024 / 1024, 2) . " Terabyte";
echo "<br>";
echo round(disk_total_space("D:") / 1024 / 1024 / 1024 / 1024, 2) . " Terabyte";