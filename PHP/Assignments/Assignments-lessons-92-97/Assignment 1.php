<?php
date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get() . "<br>";
echo date_format($date, "D, d M y -  H:i:s A") . "<br>";
echo date_format($date, "l, d F Y -  H:i:s A") . "<br>";
// $now=date_create();
// echo date_format($now,"l, d F Y -  H:i:s A") . "<br>";
// echo date_format($now,"l, d F Y -  H:i:s A") . "<br>";