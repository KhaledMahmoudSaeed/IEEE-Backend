<?php
function greeting($name,$gender=" "){
    if($gender=="Male"){
        echo" Hallo , Mr $name <br>";
    }
    elseif($gender=="Female"){
        echo" Hallo , Ms $name <br>";
    }
    else{
        echo" Hallo , $name <br>";
    }

}
echo greeting("Osama", "Male"); 
echo greeting("Eman", "Female"); 
echo greeting("Sameh");