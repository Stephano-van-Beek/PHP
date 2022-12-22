<?php

$array=[6,7,8,2,5,8,98,62,69];

for($i=0; $i<count($array); $i++){
    echo $array[$i]. " ";
}

echo "<hr>";

foreach($array as $elem){
    echo $elem." ";
}


?>