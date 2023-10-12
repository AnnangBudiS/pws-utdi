<?php
    $arr_barang = array("PC" => "PC Komputer", 
    "LP" => "Laptop",
    "PR" => "Peripheral", 
    "SP" => "Smart Phone", 
    "IP" => "I-Pad");

    $nama = $_POST['barang'];
    $jenis = $_POST['jenis'];
    $kd = str_pad($_POST['seri'],6 ," 0", STR_PAD_LEFT);
    $seri = $_POST['seri'];
    $merk = $_POST['merk'];
    $pembuat = $_POST['negara'];
    $tgl = $_POST['tgl'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $angka_tanggal = mktime(0,0,0, $bulan, $tgl, $tahun);
    $tanggal = date("l, j F Y", $angka_tanggal);
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $hasil = number_format(($harga * $stok),2 , ",", ".");

?>

<fieldset>
    <h2>Data Barang</h2>
    <pre>
        Kode            : <?php echo "$jenis/$kd/$merk/$pembuat" ?> <br>
        Nama Barang     : <?php echo "$nama" ?> <br>
        Nomor seri      : <?php echo "$seri" ?> <br>
        Merk            : <?php echo "$merk" ?> <br>
        Buatan Dari     : <?php echo "$pembuat" ?> <br>
        Tanggal Buat    : <?php echo "$tanggal" ?> <br>
        Harga           : RP. <?php echo "$harga" ?> <br>
        Jumlah Stok     : <?php echo "$stok" ?> <br>
        Total Harga     : RP. <?php echo "$hasil" ?> <br>
    </pre>
</fieldset>