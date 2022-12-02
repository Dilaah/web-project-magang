<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign-In User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
 <style>
  body {
    background-image: url('img/logo.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
  </style>
<body class="text-center">
<?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
     echo '<script>alert("Email dan password tidak sesuai!!!")</script>';
    }elseif($_GET['pesan'] == "input"){
          echo "<h4>Registrasi Berhasil</h4>";
      }
  }
  if(isset($_GET['notif'])){
      $notif = $_GET['notif'];
      if($notif == "berhasil"){
          echo '<script>alert("Terima Kasih !!!")</script>';
      }else{
          echo '<script>alert("Gagal")</script>';
      }
  }
  ?>
<section class="login">
<div class="card bg-dark" style="width:400px">
<main class="form-signin">
   <form action="cekLogin.php" method="post">
    <div class="card-body text-center">
     <img class="mb-4" src="img/icon.jpeg" alt="" width="72" height="57">

    <div class="form-floating">
      <input type="text" name="email" id="email" class="form-control" placeholder="Enter email"><br>
    </div>
    <div class="form-floating">
      <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
    </div>
    <div class="form-group form-check">
    <label class="form-check-label" style="color: white;">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="login"><i class='fas fa-sign-in-alt' style='font-size:24px;'></i> Log-in</button>
    <a href="registrasi.php"><i class='fas fa-edit' style="font-size:16px; padding-top: 10px;">Registrasi<br>Anggota</i></a><br><br>
    <a href="index.php"><h6 style="color: white;"><u>Kembali</u></h6></a>
  </div>
  </form>
</main></div></section>
</body>
</html>
