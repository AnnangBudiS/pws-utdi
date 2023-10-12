<?php

$judul = fn() => "<h2>Praktikum Pemrograman Web !</h2>";
$garis = fn() => "================================ <br>";
$mhs = fn($nim, $nama, $semester) => "NIM : $nim <br>"."Nama : $nama <br>"."Semester : $semester"; 

echo $judul();
echo $garis();
echo $mhs("223310002", "Annang Budi S", "3");

?>
