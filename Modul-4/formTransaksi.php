<!DOCTYPE html>
<html>
<head>
    <title>Form Pembelian Barang</title>
</head>
<body>
    <h2>Form Pembelian Barang</h2>
    <form method="post" action="">
        <!-- Input untuk Barang 1 -->
        <label for="barang1">Barang 1:</label>
        <input type="number" id="barang1" name="jumlah_barang1" min="0"><br>

        <!-- Input untuk Barang 2 -->
        <label for="barang2">Barang 2:</label>
        <input type="number" id="barang2" name="jumlah_barang2" min="0"><br>

        <!-- Input untuk Barang 3 -->
        <label for="barang3">Barang 3:</label>
        <input type="number" id="barang3" name="jumlah_barang3" min="0"><br>

        <input type="submit" value="Hitung Total" name="submit">
    </form>

    <?php
    // Cek apakah form telah disubmit
    if (isset($_POST['submit'])) {
        // Ambil jumlah barang dari inputan
        $jumlah_barang1 = $_POST['jumlah_barang1'];
        $jumlah_barang2 = $_POST['jumlah_barang2'];
        $jumlah_barang3 = $_POST['jumlah_barang3'];

        // Harga per barang
        $harga_barang1 = 10;
        $harga_barang2 = 15;
        $harga_barang3 = 20;

        // Hitung subtotal untuk setiap barang
        $subtotal_barang1 = $jumlah_barang1 * $harga_barang1;
        $subtotal_barang2 = $jumlah_barang2 * $harga_barang2;
        $subtotal_barang3 = $jumlah_barang3 * $harga_barang3;

        // Hitung total pembelian
        $total_pembelian = $subtotal_barang1 + $subtotal_barang2 + $subtotal_barang3;

        // Tampilkan hasilnya
        echo "<h3>Hasil Pembelian</h3>";
        echo "Barang 1: Jumlah = $jumlah_barang1, Subtotal = $subtotal_barang1<br>";
        echo "Barang 2: Jumlah = $jumlah_barang2, Subtotal = $subtotal_barang2<br>";
        echo "Barang 3: Jumlah = $jumlah_barang3, Subtotal = $subtotal_barang3<br>";
        echo "Total Pembelian: $total_pembelian";
    }
    ?>
</body>
</html>
