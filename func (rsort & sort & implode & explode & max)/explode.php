<?php
    /*
    $str = "Hello world I am Bing";
    $array = explode(" ", $str);
    var_dump( $array);
    */
    //function override(explode) ↓↓ 

    $saw = "hi mr farzin";
    $array_saw = array();
    $check = "";

    for ($i = 0; $i < strlen($saw); $i++) {    //strlen()  => بازبینی نوشته 
        if ($saw[$i] == " ") {
            array_push($array_saw, $check);
            $check = "";
        }else {
            $check .= $saw[$i];
        }
    }
    array_push($array_saw, $check);
    var_dump( $array_saw);
?>