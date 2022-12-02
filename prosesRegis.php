<?php  
  ob_start();
  include ("koneksi.php");

  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  $level=$_POST['level'];

 if($username == ""){
  header("location:registrasi.php?username=kosong");
 }elseif($email == ""){
  header("location:registrasi.php?email=kosong");
 }elseif($password == ""){
  header("location:registrasi.php?password=kosong");
 }else{ 
    mysqli_query($db,"INSERT INTO user values('','$username','$email','$password','$level')");

    header("location:index.php?pesan=berhasil");

  }
  ?>