<?php 
ob_start();
include ("koneksi.php");

mysqli_query($db,"DELETE FROM layanan WHERE id_layanan = '$_GET[id]'");

header("location:dataLayanan.php?pesan=berhasil");
?>