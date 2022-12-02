<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registrasi Anggota</title>
  <meta charset="utf-8">
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  body{
    background-image: url('img/logo.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
  section{
    padding: 100px;
  }
  h3{
    color: white;
  }
</style>
<body>
  <?php 
  if(isset($_GET['username'])){
    if($_GET['username'] == "kosong"){
      echo "<h4 style='color:red'>Username Belum Di Masukkan !</h4>";
    }
  }elseif(isset($_GET['email'])){
    if($_GET['email'] == "kosong"){
      echo "<h4 style='color:red'>Email Belum Di Masukkan !</h4>";
    }
  }elseif(isset($_GET['password'])){
    if($_GET['password'] == "kosong"){
      echo "<h4 style='color:red'>Password Belum Di Masukkan !</h4>";
    }
  }
  ?>

  <section class="login">
    <div class="card bg-dark" style="width:400px">
      <br><h3 align="center">Registrasi Anggota</h3>
    <main class="form-signin">
        <form method="post" action="prosesRegis.php" enctype="multipart/form-data">
          <input type=hidden id="id" name="id">
          <div class="form-floating">
          <input type="text" name="username" id="username" class="form-control" placeholder="Enter username"><br>
        </div>
        <div class="form-floating">
          <input type="text" name="email" id="email" class="form-control" placeholder="Enter email"><br>
        </div>
        <div class="form-floating">
          <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
        </div><br>
        <button type="submit" value="simpan" class="btn btn-primary">Sign-Up</button>
        <a href="index.php" class="btn btn-danger">Batal</a>
      </form>
    </div></div>
  </div></div>
</section>
</body>
</html>

