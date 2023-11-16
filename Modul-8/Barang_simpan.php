<?php
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];

    $foto = $_FILES['gambar']['name'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    $size = $_FILES['gambar']['size'];
    $type = $_FILES['gambar']['type'];

    $maxsize = 15000000;
    $allowedTypes = array("image/jpeg", "image/png", "image/pjpeg");

    $dirFoto = "pict";
    if (!is_dir($dirFoto)) {
        mkdir($dirFoto);
    }

    $fileTujuanFoto = $dirFoto . "/" . $foto;

    $dirThumb = 'thumb';
    if (!is_dir($dirThumb)) {
        mkdir($dirThumb);
    }

    $fileTujuanThumb = $dirThumb . "/t" . $foto;

    $validation = true;

    if (empty(trim($nama))) {
        echo "Nama Barang Harus Diisi! <br>";
        $validation = false;
    }

    if (empty(trim($harga))) {
        echo "Harga Harus Diisi! <br>";
        $validation = false;
    }

    if (empty(trim($stock))) {
        echo "Stock Harus Diisi! <br>";
        $validation = false;
    }

    if (!$validation) {
        echo "Masih Ada kesalahan, silahkan perbaiki! <br>";
        echo "<input type='button' value='Kembali' onClick='self.history.back()'>";
        exit;
    }

    include "Connection.php";

    try {
        // Membuat objek koneksi
        $conn = new mysqli($host, $user, $pass, $database);

        // Mengecek koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $sql = "INSERT INTO barang(nama, harga, stock, foto) VALUES ('$nama', '$harga', '$stock', '$foto')";

        // Menjalankan query
        if ($conn->query($sql) === TRUE) {
            echo "Berhasil menyimpan data";
        } else {
            echo "Gagal menyimpan, silahkan diulangi! <br/>";
            echo $conn->error;
            echo "<br> <input type='button' value='kembali' onClick='self.history.back()' />";
        }

        if ($size > 0) {
            if (!move_uploaded_file($tmpName, $fileTujuanFoto)) {
                echo "Gagal upload Gambar ...<br>";
                echo "<a href='barang_tampil.php'>Daftar Barang</a>";
                exit;
            } else {
                buat_thumbnail($fileTujuanFoto, $fileTujuanThumb);
            }
        }

        // Menutup koneksi
        $conn->close();
    } catch (Exception $e) {
        echo "Terjadi Kesalahan" . $e->getMessage();
    }

    echo "<br>File Sudah di upload. </br>";

    function buat_thumbnail($file_src, $file_dst)
    {
        // menghapus jika thumbnail sebelumnya sudah ada
        list($w_src, $h_src, $type) = getimagesize($file_src);

        switch ($type) {
            case IMAGETYPE_GIF:
                $img_src = imagecreatefromgif($file_src);
                break;
            case IMAGETYPE_JPEG:
                $img_src = imagecreatefromjpeg($file_src);
                break;
            case IMAGETYPE_PNG:
                $img_src = imagecreatefrompng($file_src);
                break;
        }

        $thumb = 100;
        if ($w_src > $h_src) {
            $w_dst = $thumb; // untuk landscape
            $h_dst = round($thumb / $w_src * $h_src);
        } else {
            $w_dst = round($thumb / $h_src * $w_src); // untuk portrait
            $h_dst = $thumb;
        }

        $img_dst = imagecreatetruecolor($w_dst, $h_dst); //resample

        imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $w_dst, $h_dst, $w_src, $h_src); //simpan thumbnails
        // bersihkan memori
        imagedestroy($img_src);
        imagedestroy($img_dst);
    }
?>


<a href="Barang_tampil.php">DAFTAR BARANG</a>