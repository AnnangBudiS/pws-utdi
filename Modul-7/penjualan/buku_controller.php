<?php
$kode = $_POST['kode'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$stok = $_POST['stok'];

$validation = 'YA';

if (empty(trim($kode))) {
    echo "Kode Buku Harus di isi! <br />";
    $validation = 'TIDAK';
}
if (empty(trim($judul))) {
    echo "Judul Buku Harus di isi! <br />";
    $validation = 'TIDAK';
}
if (empty(trim($pengarang))) {
    echo "Pengarang Buku Harus di isi! <br />";
    $validation = 'TIDAK';
}
if (empty(trim($penerbit))) {
    echo "Penerbit Buku Harus di isi! <br />";
    $validation = 'TIDAK';
}
if (!is_numeric($stok) || $stok < 0) {
    echo "Stok Buku Harus diisi dengan angka positif! <br />";
    $validation = 'TIDAK';
}
if ($validation === 'TIDAK') {
    echo "MASIH ADA KESALAHAN, SILAHKAN PERBAIKI <br />";
    echo "<input type='button' value='kembali' onClick='self.history.back()' />";
    exit;
}

include "koneksi_buku.php";

try {
    $sql = "INSERT INTO buku(kode, judul, pengarang, penerbit, stok) VALUES (
        '$kode', '$judul', '$pengarang', '$penerbit', '$stok'
    )";
    $hasil = mysqli_query($koneksi, $sql);

    if ($hasil) {
        echo "Oke";
    } else {
        echo "Gagal menyimpan, silakan diulang! <br>";
        echo mysqli_error($koneksi);
        echo "<br> <input type='button' value='kembali' onClick='self.history.back()' />";
    }
    
} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>
