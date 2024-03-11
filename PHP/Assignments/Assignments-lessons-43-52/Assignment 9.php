<?php
echo" Anonymous Function";
    echo"<br>";
    $greet=function($d){
    echo "Greetings";};
    echo $greet("Osama");

echo"<br>";

echo"Arrow Function";
    echo"<br>";
    $greets=fn($d)=>"Greetings";
    echo $greet("Osama");
        
        