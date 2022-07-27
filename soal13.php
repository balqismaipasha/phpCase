<?php

$string = "Lorem ipsum dolor sit amet";
$a = str_split($string);

$output = array_filter($a, function ($cari){
    return $cari == 'm';
}, ARRAY_FILTER_USE_BOTH);

echo "<pre>";
print_r($output);

?>