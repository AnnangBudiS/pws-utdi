<?php 
 $jumlah = fn($bil1, $bil2) => $bil1 + $bil2;
 $kurang = fn($bil1, $bil2) => $bil1 - $bil2;
 $bagi = fn($bil1, $bil2) => $bil1 / $bil2;
 $kali = fn($bil1, $bil2) => $bil1 * $bil2;
 
 if ($_POST["hitung"] == "JUMLAH") {
     $hasil = $jumlah($_POST["bil1"], $_POST["bil2"]);
     echo "Hasil Jumlah : $hasil";
 }
 if ($_POST["hitung"] == "KURANG") {
     $hasil = $kurang($_POST["bil1"], $_POST["bil2"]);
     echo "Hasil Kurang : $hasil";
 }
 if ($_POST["hitung"] == "BAGI") {
    $hasil = $bagi($_POST["bil1"], $_POST["bil2"]);
    echo "Hasil Bagi : $hasil";
}

if ($_POST["hitung"] == "KALI") {
    $hasil = $kali($_POST["bil1"], $_POST["bil2"]);
    echo "Hasil Kali : $hasil";
}
?>