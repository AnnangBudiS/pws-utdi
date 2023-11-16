<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "sewabuku";

try {
    $koneksi = new mysqli($host, $user, $pass);

    if ($koneksi->connect_error) {
        throw new Exception("Gagal Koneksi: " . $koneksi->connect_error);
    }

    $sqlCreateDB = "CREATE DATABASE IF NOT EXISTS $database";
    if ($koneksi->query($sqlCreateDB) === TRUE) {
        echo "Database berhasil dibuat atau dipilih: $database<br>";
    } else {
        throw new Exception("Gagal membuat atau memilih database: " . $koneksi->error);
    }

    $koneksi->select_db($database);
    $sqlTableBuku = "CREATE TABLE IF NOT EXISTS buku (
        idbuku INT AUTO_INCREMENT PRIMARY KEY,
        kode VARCHAR(30) NOT NULL,
        judul VARCHAR(50) NOT NULL,
        pengarang VARCHAR(30) NOT NULL,
        penerbit VARCHAR(20) NOT NULL,
        stok INT NOT NULL DEFAULT 0,
        KEY(judul)
    )";

    if ($koneksi->query($sqlTableBuku) === TRUE) {
        echo "Tabel 'buku' berhasil dibuat atau sudah ada.<br>";
    } else {
        throw new Exception("Gagal membuat atau mengakses tabel 'buku': " . $koneksi->error);
    }

    $koneksi->close();
} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>
