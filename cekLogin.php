<?php 
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];
 
$login = mysqli_query($db,"SELECT * from user WHERE email = '" .$email."' AND password = '".MD5($password)."'");
$cek = mysqli_num_rows($login);

if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);

	if($data['level']=="admin"){

		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";
		header("location:rumahKemasan.php");
 
	}else if($data['level'] != "admin"){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "";
		header("location:bukuTamu.php");
	}else{
 
		header("location:login.php?pesan=gagal");
	}
}else{
	header("location:login.php?pesan=gagal");
}
 
?>