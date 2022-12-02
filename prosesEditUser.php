<?php
ob_start();
include ("koneksi.php");
if (isset($_POST['simpan'])) {
    $id_user=$_POST['id_user'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
}
    mysqli_query($db,"UPDATE user SET username='$username', email='$email', password='$password' WHERE id_user='$id_user'");

    header("location:dataUser.php?pesan=berhasil");
?>
	