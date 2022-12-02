<?php  
  ob_start();
  include ("koneksi.php");

  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  $level=$_POST['level'];

  mysqli_query($db,"INSERT INTO user values('','$username','$email','$password','$level')");

  header("location:dataUser.php?pesan=berhasil");
  ?>