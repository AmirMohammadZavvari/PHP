<?php
$students = [
    [ '#id'  =>  1000 , 'firstAndLastname' => 'امیرزواری'    , 'grades' => ['reiazi' => 14, 'farsi' => 16, 'shimi' => 18]],
    [ '#id'  =>  1001 , 'firstAndLastname' => 'مرتضی هاونگی' , 'grades' => ['reiazi' => 17, 'farsi' => 19, 'shimi' => 15]],
    [ '#id'  =>  1002 , 'firstAndLastname' => 'رضارضایی'     , 'grades' => ['reiazi' => 12, 'farsi' => 13, 'shimi' => 20]],
    [ '#id'  =>  1003 , 'firstAndLastname' => 'علی زارع'     , 'grades' => ['reiazi' => 10, 'farsi' => 11, 'shimi' => 14]],
    [ '#id'  =>  1004 , 'firstAndLastname' => 'حجت ایوبی'    , 'grades' => ['reiazi' => 19, 'farsi' => 17, 'shimi' => 16]],
    [ '#id'  =>  1005 , 'firstAndLastname' => 'اصغر اکبری'   , 'grades' => ['reiazi' => 13, 'farsi' => 15, 'shimi' => 12]],
    [ '#id'  =>  1006 , 'firstAndLastname' => 'یگانه غلامی'   , 'grades' => ['reiazi' => 16, 'farsi' => 14, 'shimi' => 19]],
    [ '#id'  =>  1007 , 'firstAndLastname' => 'یسنا جلالی'    , 'grades' => ['reiazi' => 17, 'farsi' => 10, 'shimi' => 11]],
    [ '#id'  =>  1008 , 'firstAndLastname' => 'یاسین رمضانی' , 'grades' => ['reiazi' => 15, 'farsi' => 18, 'shimi' => 17]],
    [ '#id'  =>  1009 , 'firstAndLastname' => 'مصطفی پورکرم' , 'grades' => ['reiazi' => 20, 'farsi' => 12, 'shimi' => 13]]
];

$cont = 1;
foreach ($students as $student) {
    // مقدار اولیه متغیر مجموع را صفر قرار می‌دهیم
    $sum = 0;
    // نمره را به متغیر مجموع اضافه می‌کنیم
    foreach ($student['grades'] as $grade) {
        $sum += $grade/3;
    }
    
    echo 
    "<div style ='direction: rtl; font-family: cursive;padding: 5px; margin: 10px 100px;'>" .
        $cont . ') ' .
        "دانشجو با شناسۀ " . 
        "{" . $student['#id'] . "}" .
        " با نام ونام خانوادگی: " . 
        "<b>" . 
        $student['firstAndLastname'] . 
        "</b>" .
        " دارای معدل، " . '<<'. $sum .'>> '. "است.". "<br>" .
    "</div>";
    $cont++;
}
?>

