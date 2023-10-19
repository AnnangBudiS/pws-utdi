<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "toko_ol";

$kon = mysqli_connect($host, $user, $pass);
if(!$kon) {
    die ("connection failed");
};

$hasil = mysqli_select_db($kon, $database);
if(!$hasil) {
    $hasil = mysqli_query($kon, "CREATE DATABASE $database");
    if(!$hasil) {
        die ("Create database failed");
    }
    else {
        $hasil = mysqli_select_db($kon, $database);
        if(!$hasil) {
            die ("database connection failed");
        };
    };
};

$sqlTableBarang = "create table if not exists barang (
    idbarang int auto_increment not null primary key,
    nama varchar(40) not null,
    harga int not null default 0,
    stok int not null default 0,
    foto varchar(70) not null default '',
    KEY(nama)
)";

mysqli_query ($kon, $sqlTableBarang) or die("Failed Create Table Barang");

?>
