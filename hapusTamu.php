<?php 
ob_start();
include ("koneksi.php");

mysqli_query($db,"DELETE FROM data_kunjungan WHERE id_tamu = '$_GET[id]'");

header("location:dataTamu.php?pesan=berhasil");
?>