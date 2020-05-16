<?php
//penulisan array 

$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$gabungan = [100, "teks", true];

//memenggil array

//versi debugging atau cara progammer
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

//versi user
echo $gabungan[0];
?>