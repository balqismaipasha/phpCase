<?php

$var1 = "JOHN";
$var2 = "SMITH";

$a = str_split($var1);
$b = str_split($var2);

//for ($i=0;$i<9; $i++)
//{
//    $a1 = array_merge($a[$i],$b[$i]);
//}

$result = array_merge($a[0], $a[1]);



echo "<pre>";
print_r($a);
print_r($b);
print_r($result);

?>