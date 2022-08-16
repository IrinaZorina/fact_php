<?php

function timePage ($h1, $h2){
    $h=date('H');
    if ($h > $h1 && $h < $h2){
        echo '<img class="img-php" src="images/sun.png">';
    } else {
        echo '<img class="img-php" src="images/moon.png">';
    }
}
function timeBack ($h1, $h2){
    $h=date('H');
    if ($h > $h1 && $h < $h2){
        $gridBack="#fffdd0";
        $ftrClr="#fffdd0";
        $fontColor="black";
    } else {
        $gridBack="#3b444b";
        $ftrClr="#3b444b";
        $fontColor="white";
    }
    echo '<section class="grid2" style="background-color:'.$gridBack.'; color: '.$fontColor.'">';
}
?>
