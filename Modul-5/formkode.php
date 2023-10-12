<form action="#" method="post">
    <fieldset>
        <legend>Kode Barang</legend>
        Kode Depan (Jenis) <br>
        <select name="jenis">
            <option value="">-Pilih-</option>
            <option value="C">Celana</option>
            <option value="K">Kaos</option>
            <option value="H">Hem</option>
        </select> <br>
        Kode Tengah (Nomor Seri) <br>
        <input type="text" name="nomor_seri">
        <br>
        Kode Belakang (Merk) <br>
        <input type="text" name="merk">
    </fieldset>
    <input type="submit" value="BUAT KODE">
</form>

<?php
if(isset($_POST['jenis']) && isset($_POST['nomor_seri']) && isset($_POST['merk'])) {
    $jenis = $_POST['jenis'];
    $nomor_seri = str_pad($_POST['nomor_seri'], 6, "0", STR_PAD_LEFT);
    $merk = $_POST['merk'];
    $kode = "$jenis-$nomor_seri-$merk";
    echo "Kode Barang: $kode";
}
?>

