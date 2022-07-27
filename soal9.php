<?php
$numbers=array(12,23,45,20,5,6,34,17,9,56);

for($i=0; $i<=count($numbers) ; $i++)
{
    if ($numbers[$i]%2 != 0 ){
        unset($numbers[$i]);
    }
}

echo "<pre>";
print_r($numbers);
?>