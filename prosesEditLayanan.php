<?php
ob_start();
include ("koneksi.php");

if (isset($_POST['simpan'])) {
    $id_layanan = $_POST['id_layanan'];
    
    $file_name = $_FILES['gambar']['name'];
    $file_tmp =$_FILES['gambar']['tmp_name'];
          
    $judul_layanan=$_POST['judul_layanan'];
    $isi1=$_POST['isi1'];
    $isi2=$_POST['isi2'];
    $isi3=$_POST['isi3'];
}
if ($file_name) {
        unlink('img'.$fotolama);
        move_uploaded_file($file_tmp,'img/'.$file_name);
        mysqli_query($db,"UPDATE layanan SET gambar='$file_name', judul_layanan='$judul_layanan', isi1='$isi1', isi2='$isi2', isi3='$isi3' WHERE id_layanan='$id_layanan'");
    }else{
        mysqli_query($db,"UPDATE layanan SET judul_layanan='$judul_layanan', isi1='$isi1', isi2='$isi2', isi3='$isi3' WHERE id_layanan='$id_layanan'");
    }

    header("location:dataLayanan.php?pesan=berhasil");
?>
    