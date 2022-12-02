<?php
ob_start();
include ("koneksi.php");
if (isset($_POST['simpan'])) {
    $id_komunitas=$_POST['id_komunitas'];
    $nama_komunitas=$_POST['nama_komunitas'];
    $jenis_komunitas=$_POST['jenis_komunitas'];
    $alamat=$_POST['alamat'];
    $telepon=$_POST['telepon'];
    $status=$_POST['status'];
}
    mysqli_query($db,"UPDATE komunitas_ikm SET nama_komunitas='$nama_komunitas', jenis_komunitas='$jenis_komunitas', alamat='$alamat', telepon='$telepon', status='$status' WHERE id_komunitas='$id_komunitas'");

    header("location:dataKomunitas.php?pesan=berhasil");
?>
	