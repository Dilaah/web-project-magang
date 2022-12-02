<?php 
ob_start();
include ("koneksi.php");

mysqli_query($db,"DELETE FROM berita WHERE id_berita = '$_GET[id]'");

header("location:dataBerita.php?pesan=berhasil");
?>