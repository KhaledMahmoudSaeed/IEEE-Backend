<?php
function calculate($num1,$num2,$op="+"){
    if($op=="subtract" || $op=="s"){
       return $num1-=$num2;
    }
    elseif($op=="add" || $op=="a"){
        return $num1+=$num2;
     }
     elseif($op=="multiply" || $op=="m"){
        return $num1*=$num2;
     }
     elseif($op==NULL){
        return $num1+=$num2;
     }
     else{
        echo "There no operator like this in math ,bro";
     }
}
echo calculate(10, 20); 
echo "<br>";
echo calculate(10, 20, "a"); 
echo "<br>";
echo calculate(10, 20, "s"); 
echo "<br>";
echo calculate(10, 20, "subtract"); 
echo "<br>";
echo calculate(10, 20, "multiply"); 
echo "<br>";
echo calculate(10, 20, "m");
echo "<br>";