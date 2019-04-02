<?php

function concatenate_n_string($arr) {
    
    $length_array = array_map('strlen', $arr);
    $max_length=max($length_array);
    $maxindex = array_search($max_length, $length_array);
    $maxelement=$arr[$maxindex];
    
    for($i=0; $i<strlen($maxelement); $i++){
        for($j=0; $j<count($arr); $j++){
            $temp=str_split($arr[$j]);
            if(array_key_exists($i, $temp)){
                echo $arr[$j][$i];
            }
        }
    }

}

$inp1 = ['first', 'second', 'thirdstring'];
echo concatenate_n_string($inp1);
echo "<br>";
$inp2 = ['one', 'two'];
echo concatenate_n_string($inp2);

?>