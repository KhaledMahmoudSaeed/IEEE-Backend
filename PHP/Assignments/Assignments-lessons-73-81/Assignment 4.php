<?php
$arry_values = filter_list();
$arry_keys = [];
for ($i = 0; $i <= 20; $i++) {
    array_push($arry_keys, filter_id($arry_values[$i]));
}
$req_array = array_combine($arry_keys, $arry_values);
echo "<pre>";
print_r($req_array);
echo "</pre>";

