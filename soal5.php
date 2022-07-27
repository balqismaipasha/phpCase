
<?php

$baris=5;
$k = 1;
for($i=1; $i<=$baris; $i++){
    for($j=0; $j<$i; $j++){
        echo $k++ . " ";
    }
    echo "<br>";
}
?>
