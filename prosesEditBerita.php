<?php
ob_start();
include ("koneksi.php");

if (isset($_POST['simpan'])) {
    $id_berita=$_POST['id_berita'];
    $fotolama=$_POST['fotolama'];

    $file_name = $_FILES['fotoberita']['name'];
    $file_tmp =$_FILES['fotoberita']['tmp_name'];

    $judul=$_POST['judul'];
    $isi=$_POST['isi'];
    $tanggal=$_POST['tanggal'];

    if ($file_name) {
        unlink('img'.$fotolama);
        move_uploaded_file($file_tmp,'img/'.$file_name);
        mysqli_query($db,"UPDATE berita SET gambar='$file_name', judul='$judul', isi='$isi', tanggal='$tanggal' WHERE id_berita='$id_berita'");
    }else{
        mysqli_query($db,"UPDATE berita SET judul='$judul', isi='$isi', tanggal='$tanggal' WHERE id_berita='$id_berita'");
    }

    header("location:dataBerita.php?pesan=berhasil");
}
?>
    