<?php 
$awal = $_POST["awal"];
$akhir = $_POST["akhir"];
$lanjutkan = $_POST["lanjut"];
for ($i=$awal ; $i<=$akhir; $i++){
    echo "<br /> for ke $i.";
    if($i == $lanjutkan) {
        continue;
    }
    echo "<br /> for $i.";
}
?>