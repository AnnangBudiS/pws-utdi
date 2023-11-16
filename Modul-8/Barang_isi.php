<h2>:: ISI BARANG ::</h2>
<form action="Barang_simpan.php" method="post" enctype="multipart/form-data"> 
    <table border="1">
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><input type="text" name="harga"></td>
        </tr>
        <tr>
            <td>Stock Barang</td>
            <td><input type="text" name="stock"></td>
        </tr>
        <tr>
            <td>Gambar [max= 1.5MB]</td>
            <td><input type="file" name="gambar"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Simpan" name="proses"/>
                <input type="reset" value="Reset" name="reset"> 
            </td>
        </tr>
    </table>
</form>