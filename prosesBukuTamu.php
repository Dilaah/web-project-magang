<?php  
ob_start();
include ("koneksi.php");

$nama_pemilik=$_POST['nama_pemilik'];
$nama_merek=$_POST['nama_merek'];
$jenis_produk=$_POST['jenis_produk'];
$telepon=$_POST['telepon'];
$tanggal=$_POST['tanggal'];
$keperluan=$_POST['keperluan'];

mysqli_query($db,"INSERT INTO data_kunjungan values('','$nama_pemilik','$nama_merek','$jenis_produk','$telepon','$tanggal','$keperluan')");

header("location:login.php?notif=berhasil");
?>