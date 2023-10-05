<h1>Hitung Transaksi</h1>
<hr>
<?php 
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

for($i = 1; $i<=3; $i++ ) {
    echo "No : ".$i."<br>";
    echo "Nama Barang : ".$nama[$i]."<br>";
    echo "Jumlah : ".$jumlah[$i]."<br>";
    echo "Total : ". $total[$i] = $jumlah[$i] * $harga[$i]."<br><hr>"; 
   
}
$subTotal = array_sum($total);
echo "Jumlah Total : " .$subTotal. "<br><hr>";
?>
