<?php

 $name = "а б";
$name_arr = explode(э$name);
$count_name = count($name_arr);


$i = 0;
//$ar = array('a', 'e', 'и', 'о', 'э', 'ы', 'я', 'ю', 'е', 'ё');
$ar = array('о');

//$str = 'строка в которой искать';
foreach ($name_arr as $value) {
    if (in_array($value, $ar)) {
        $i++;// делаем что-то с гласной
    }
}
echo $i;

