<?php
    /*
    $array = array('hi', 'mr', 'farzin');
    echo implode(' ' ,$array)
    */
    //function override(implode) ↓↓

    function my_implode($separator, $my_array) {
        $string = '';
        for ($i = 0; $i < count($my_array); $i++) {
            $string .= $my_array[$i];
            
            //Do not add the separator after the element
            if ($i < count($my_array) - 1) {
            $string .= $separator;
            }
        }
        return $string;
    }
    $my_array = array('hi', 'mr', 'farzin');
    $string = my_implode(' ', $my_array);
    echo '<h1>' . $string . '</h1>';
?>