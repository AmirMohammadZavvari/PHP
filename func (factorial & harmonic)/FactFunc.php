<?php
    function factorial($number) { 
        if ($number == 0 || $number == 1) { 
            return 1; 
        } else { 
            return $number * factorial($number - 1); 
        }
    }
    $number = 5; 
    $f = factorial($number);
    echo "<h1>" . "factorial (" . $number . ") = "  . $f . "</h1>";
?>
