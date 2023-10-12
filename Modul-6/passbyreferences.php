<?php 
$nilai_pertama = fn($x) => $x += 200;
$nilai_kedua = fn( $x) => $x += 200;

$nilai_awal = 100;
$nilai_pertama($nilai_awal);
echo "Nilai Akhir Function Pertama : $nilai_awal <br>";
$nilai_kedua($nilai_awal);
echo "Nilai akhir Function Kedua : $nilai_awal <br>";

?>