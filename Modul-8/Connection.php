<?php


$host = "localhost";
$user = "root";
$pass = ""; 
$database = "toko_pws";

try {
    $koneksi = new mysqli($host, $user, $pass, $database);

    if ($koneksi->connect_error) {
        throw new Exception("Gagal Koneksi: " . $koneksi->connect_error);
    }
   
    

} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>
