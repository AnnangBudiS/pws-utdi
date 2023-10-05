<form action="#" method="post">
    Nominal Rp. <input type="text" name="nominal" /> <br>
    <input type="submit" value="SUBMIT"/>
</form>

<?php 
$nominal = $_POST['nominal'];
$format = number_format($nominal,2,",".".");
echo "Format Nominal : RP. $format";
 ?>
