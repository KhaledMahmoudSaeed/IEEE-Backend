<?php
date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get() . "<br>";
$date = date_create("2005-10-02 00:00:00");
$new_date = date_add($date, date_interval_create_from_date_string("15 hour 15 min 15 sec"));
echo date_format($new_date, " Y,  F,  l 'dS'  H:i:s");