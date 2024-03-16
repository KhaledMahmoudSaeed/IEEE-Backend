<?php
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

$count=0;
for($i=0;$i<count($mix);$i++){
    if($mix[$i] < 65 && $mix[$i] %2!=0){
        $mixx[$count]=$mix[$i];
        $count++;
    }
}

echo "<pre>";
print_r($mixx);
echo "</pre>";