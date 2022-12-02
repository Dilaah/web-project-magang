<?php 
ob_start();
include ("koneksi.php");

mysqli_query($db,"DELETE FROM user WHERE id_user = '$_GET[id]'");

header("location:dataUser.php?pesan=berhasil");
?>