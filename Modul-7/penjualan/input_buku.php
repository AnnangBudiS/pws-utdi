<fieldset>
<h2>INPUT BUKU</h2>
<hr>
<form action="buku_controller.php" method='post'>
    <pre>
        Kode        <input type="text" name='kode'> <br>
        Judul Buku  <input type="text" name='judul'/> <br>
        Pengarang   <input type="text" name='pengarang'/><br> 
        Penerbit    <input type="text" name='penerbit'> <br>
        Jumlah Stok <input type="text" name='stok'>

    </pre>
    <hr>
    <button type='submit'>Simpan</button>
    <button type='reset'>Reset</button>
</form>
</fieldset>