<?php
if(isset($_POST['hitung'])){
    $no_plat = $_POST['no_plat'];
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $jam_masuk = $_POST['jam_masuk'];
    $jam_keluar = $_POST['jam_keluar'];

    // Menghitung selisih waktu (dalam jam)
    $masuk = strtotime($jam_masuk);
    $keluar = strtotime($jam_keluar);
    $selisih = ($keluar - $masuk) / 3600; // 1 jam = 3600 detik

    // Menentukan tarif berdasarkan jenis kendaraan
    $tarif_pertama = 0;
    $tarif_berikutnya = 0;

    switch($jenis_kendaraan){
        case 'mobil':
            $tarif_pertama = 7000;
            $tarif_berikutnya = 3000;
            break;
        case 'motor':
            $tarif_pertama = 5000;
            $tarif_berikutnya = 2000;
            break;
        case 'sepeda':
            $tarif_pertama = 2000;
            $tarif_berikutnya = 500;
            break;
    }

    // Menghitung biaya parkir
    $biaya = $tarif_pertama + ($selisih > 1 ? ceil($selisih - 1) * $tarif_berikutnya : 0);

    // Menampilkan hasil
    echo "<h1>Hasil Perhitungan Biaya Parkir</h1>";
    echo "No Plat: $no_plat<br>";
    echo "Jenis Kendaraan: $jenis_kendaraan<br>";
    echo "Jam Parkir: $jam_masuk s/d $jam_keluar<br>";
    echo "Biaya: Rp. $biaya";
}
?>
