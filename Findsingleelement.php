<?php

function find_single_element($arr) {

    $unique=[];
    $counter=array_count_values($arr);

    foreach($counter as $number=>$count){
        if($count==1){
            $unique[]=$number;
        }
    }

    for($i=0; $i<count($unique); $i++){
        echo $unique[$i]." ";
    }
    
}

$array = [1, 3, 9, 4, 45, 34, 1, 36, 36, 4, 34, 3, 45, 77];
$element=find_single_element($array);
echo $element;

?>