<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    $nama_barang = "";
    if(isset($_POST["nama_barang"]))
    $nama_barang = $_POST["nama_barang"];


    include "Connection.php";

    $sql = "SELECT * FROM barang WHERE nama LIKE '%" . $nama_barang ."%' ORDER by idbarang DESC";
    $hasil = mysqli_query($koneksi, $sql);

    if (!$hasil) {
        die("Gagal menjalankan query: " . mysqli_error($koneksi));
    }
?>
<a href="barang_isi.php">INPUT BARANG</a>

&nbsp; &nbsp; &nbsp;
<a href="Barang_cari.php">CARI BARANG</a>

<table border=1>
    <tr>
        <th>Foto</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
        <th>Stok</th>
    </tr>
    <?php 
    while ($row = mysqli_fetch_assoc($hasil)) {
        echo "<tr>";
        echo "<td><a href='pict/{$row['foto']}>
            <img src='thumb/t_{$row['foto']}' width='100' /> </a></td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['harga'] . "</td>";
        echo "<td>" . $row['stock'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
