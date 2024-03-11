<?php
function check_status($a, $b, $c) {
$person=[$a,$b,$c];
$name;
$age;
$state;
for($i=0;$i<3;$i++){
    if(is_string($person[$i])){
        $name=$person[$i];
    }
    elseif(is_int($person[$i])){
        $age=$person[$i];
    }
    elseif(is_bool($person[$i] )){
        $state=$person[$i];
    }}
    if($state){
        echo"Hello $name, Your Age Is $age, You Are Available For Hire";
    }
    else{
        echo"Hello $name, Your Age Is $age, You Are Not Available For Hire";
    }
}

echo check_status("Osama", 38, true); 
echo"<br>";
echo check_status(38, "Osama", true); 
echo"<br>";
echo check_status(true, 38, "Osama"); 
echo"<br>";
echo check_status(false, "Osama", 38); 



