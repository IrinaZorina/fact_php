<?php
$path = "zd3data.txt";
$open = fopen($path, "r");
$read = fread($open, filesize($path));

$read_arr = explode(',', $read);

print_r($read_arr[0]);
echo '<br>';
print_r($read_arr[1]);
