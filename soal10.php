<?php

$tgl1 = strtotime("2000-07-01");
$tgl2 = strtotime("2001-07-01");

$jarak = $tgl2 - $tgl1;

$hari = $jarak / 60 / 60 / 24;
echo $hari . " hari";

?>
