<?php 
$arr_barang = array("PC" => "PC Komputer", 
"LP" => "Laptop",
"PR" => "Peripheral", 
"SP" => "Smart Phone",
 "IP" => "I-Pad");

?>

<form action="printDataBarang.php" method="post">
    <fieldset>
        <h2>Data Barang</h2>
        <hr>
        Nama Barang <br>
        <input type="text" name="barang"> <br>
        Jenis <br>
        <select name="jenis">
        <?php
            foreach($arr_barang as $kode => $jenis_barang) {
                echo "<option value='$kode'>$jenis_barang</option>";
            };  
         ?>
        </select> <br>
        Nomor Seri <br>
        <input type="text" name='seri' /> <br>
        Merk <br>
        <input type="text" name='merk'> <br>
        Negara Pembuat <br>
        <input type="text" name='negara' />
        <fieldset>
            <legend>Tanggal Pembuatan</legend>
            Tgl
            <select name="tangal">
                <?php
                    for($hari = 1; $hari <= 31; $hari++) {
                        $hari_tgl = str_pad($hari, 2, '0', STR_PAD_LEFT);
                        echo "<option value='$hari'>$hari_tgl</option>";
                    };
                ?>
            </select>
            Bulan 
            <select value='bulan'>
            <?php 
            for($bulan = 1 ; $bulan<=12; $bulan++){
                $bln  = str_pad($bulan, 2, '0', STR_PAD_LEFT);
                echo "<option value='$bln'>$bln</option>";
            };
            ?>
            </select>
            Tahun
            <select name="tahun">
                <?php 
                $current_years = date("Y");
                $start_years = $current_years-20;
                $end_years = $current_years;
                for($years = $end_years; $years >= $start_years; $years--) {
                    echo "<option value='$years'>$years</option>";
                };
                ?>
            </select>
        </fieldset>
        Harga Barang <br>
        Rp. <input type="text" name="harga" /> <br>
        Jumlah Stok <br>
        <input type="text" name="stok"> <br>
        <hr>
        <input type="submit" value="SUBMIT" />
        <input type="reset" value="RESET" />
    </fieldset>
</form>
