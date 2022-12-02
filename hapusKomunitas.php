<?php 
ob_start();
include ("koneksi.php");

mysqli_query($db,"DELETE FROM komunitas_ikm WHERE id_komunitas = '$_GET[id]'");

header("location:dataKomunitas.php?pesan=berhasil");
?>