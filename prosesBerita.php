<?php  
ob_start();
include ("koneksi.php");

	$file_name = $_FILES['fotoberita']['name'];
	$file_tmp =$_FILES['fotoberita']['tmp_name'];
	move_uploaded_file($file_tmp,'img/'.$file_name);

	$judul=$_POST['judul'];
	$isi=$_POST['isi'];
	$tanggal=$_POST['tanggal'];

mysqli_query($db,"INSERT INTO berita values('','$file_name','$judul','$isi','$tanggal')");

header('location:dataBerita.php?pesan=berhasil');
?>