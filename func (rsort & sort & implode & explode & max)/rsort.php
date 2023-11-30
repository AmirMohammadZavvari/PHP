<?php
    // Sort in descending order 
    /*
    $array = array(10, 5, 8, 3, 7, 9, 6, 4, 2, 1);
    sort($array); 
    print_r($array);
    */ 
    // function override(rsort) ↓↓ 

    $my_arrey = array(7, 5, 8, 3, 10, 9, 6, 4, 2, 1); 
    for ($i = 0; $i < count($my_arrey) - 1; $i++) { 
        for ($j = $i + 1; $j < count($my_arrey); $j++) { 
            if ($my_arrey[$i] < $my_arrey[$j]) { 
                $temp = $my_arrey[$i]; 
                $my_arrey[$i] = $my_arrey[$j]; 
                $my_arrey[$j] = $temp; 
            }
        }
    }
    print_r($my_arrey);
?>