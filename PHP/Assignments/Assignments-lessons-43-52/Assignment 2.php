<?php
function get_arguments1(){
    
  
    foreach(func_get_args() as $var){
       echo$var." ";
        
    }

}
function get_arguments2(...$nums){
    foreach($nums as $var)
    echo $var." ";
}

echo get_arguments1("Hello", "Elzero", "Web", "School");
echo "<br>";
echo get_arguments2("I", "Love", "PHP"); 