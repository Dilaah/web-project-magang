<?php  
ob_start();
include ("koneksi.php");

	$file_name = $_FILES['gambar']['name'];
	$file_tmp =$_FILES['gambar']['tmp_name'];
      
	move_uploaded_file($file_tmp,"img/".$file_name);

	$judul_layanan=$_POST['judul_layanan'];
	$isi1=$_POST['isi1'];
	$isi2=$_POST['isi2'];
	$isi3=$_POST['isi3'];

mysqli_query($db,"INSERT INTO layanan values('','$file_name','$judul_layanan','$isi1','$isi2','$isi3')");

header('location:dataLayanan.php?pesan=berhasil');
?>