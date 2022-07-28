<?php
//----------------------------------------------------------------------

function counter_glas($name){
    $b=0;
    $ar = array('a','и','о','э','ы','я','ю','е','ё','у');
    $counter_glas = 0;

    foreach ($ar as $value) {
        $pos = strpos($name, $value, $b);
        if ($pos != 0) {
            $counter_glas++;
            $b++;
        }
    }
    return $counter_glas;
}
//----------------------------------------------------------------------




function my_time()
{
    $today = date('d-m-Y');
    $my_birthday = '28-11-1990';
    $arr_today = explode('-', $today);
    $arr_my_birthday = explode('-', $my_birthday);
    $day = $arr_today[0] - $arr_my_birthday[0];
    $month = $arr_today[1] - $arr_my_birthday[1];
    $year = $arr_today[2] - $arr_my_birthday[2];
    $summ_day = ($day) + ($month * 31) + $year * 365;
    echo $summ_day . " дней";
}

my_time();