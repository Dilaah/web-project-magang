<?php  
ob_start();
include ("koneksi.php");

$nama_komunitas=$_POST['nama_komunitas'];
$jenis_komunitas=$_POST['jenis_komunitas'];
$alamat=$_POST['alamat'];
$telepon=$_POST['telepon'];
$status=$_POST['status'];

mysqli_query($db,"INSERT INTO komunitas_ikm values('','$nama_komunitas','$jenis_komunitas','$alamat','$telepon','$status')");

header('location:dataKomunitas.php?pesan=berhasil');
?>