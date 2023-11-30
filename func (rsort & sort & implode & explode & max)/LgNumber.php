<?php
    /* 
    $my_array = array(15, 18, 12, 20, 16, 14, 19, 17, 13, 11);
    $max = max($my_array); 
    echo "The maximum grade is " . $max; 
    */
    //function override(max) ↓↓ 

    function max_grade($my_array) { 
        $max = $my_array[0];
        for ($i = 1; $i < count($my_array); $i++) { 
            if ($my_array[$i] > $max) {
                $max = $my_array[$i];
            }
        }
        return $max;
    }

    $my_array = array(15, 18, 12, 20, 16, 14, 19, 17, 13, 11);
    $maxNum = max_grade($my_array);
    echo '<h2 style="display: inline;">' . "maximum grade: " . '</h2>' . '<h1 style = "display: inline; color: rgb(44, 154, 79);" >' . $maxNum . '</h1>'; 
?>