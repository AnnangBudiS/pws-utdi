<h1>Transaksi</h1>
<hr>
<form action="hitungTransaksi.php" method='post'>
<?php
    for($i=1; $i<=3; $i++) {
        echo "No : ".$i."<br>";
        echo "Nama Barang : <input type='text' name='nama[$i]' /> <br>"; 
        echo "Jumlah : <input type='text' name='jumlah[$i]' /> <br>";
        echo "Harga : <input type='text' name='harga[$i]' /> <br><hr> ";
    }
?>
<input type="submit" value="Hitung">
<input type="reset" value="Batal">
</form>
