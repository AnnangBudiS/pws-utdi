File Proses 
<hr>

<?php 
$jurusan = $_POST['jurusan'];
switch ($jurusan) {
    case "TI" : 
        echo "jurusan anda Teknik Informatika <br/>";
        
        case "SI":
            echo "Jurusan anda Sistem Informatika <br/>";
            
            case "MI": 
                echo "Jurusan anda Manajemen Informatika <br/>";
                
                case "TK":
                    echo "Jusursan anda Teknik Komputer <br/>";
                    
                    case "KA":
                        echo "Jurusan anda Komputer Akuntansi <br/>";
                    
                        default:
                        echo "Jurusan Tidak ada <br/>";
}

$nilai = $_POST["angka"];

echo "Nilai Anda = " . $nilai . "<br/>";

if($nilai > 100 ) {
    echo "Nilai Kelebihan";
}elseif($nilai > 70 ) {
    echo "Selamat Anda Lulus Ujian";
}elseif($nilai >= 40 ) {
    echo "Anda harus ujian lagi";
}else{
    echo "Maaf, gagal" ;
}
?>