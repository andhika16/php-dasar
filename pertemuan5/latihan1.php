<?php
// cara membuat array
// array variable yang mempunyai banyak nilai
$hari = ['senin','selasa','rabu',"jum'at",'sabtu'];
$bulan = ['janurai','februari','maret','april'];

// menampilkan array tapi tampilan ini khusus untuk debugging
print_r($bulan);
echo "<br>";
var_dump($hari);

// menampilkan elemen pada array
echo "<br>";
echo $hari[0];
echo "<br>";
echo $bulan[2];
// cara menambah array 
$hari[]= "minggu";



?>