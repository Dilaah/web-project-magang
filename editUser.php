<?php
      include 'koneksi.php';
      include 'menuAdmin.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Edit User - SB Admin</title>
        <link href="css/admin.css" rel="stylesheet" />
    </head>
    <body>
      <div id="layoutSidenav_content">
      <main style="padding-left: 370px; padding-top: 50px;">
        <div class="card bg-dark" style="width:500px" >
          <?php
          include 'koneksi.php';
          $id = $_GET['id_user'];
          $data = mysqli_query($db, "SELECT * FROM user WHERE id_user='$id'");
          $nomor = 1;
          while($row = mysqli_fetch_array($data))
          {
          ?>
          <div class="container">
          <h4 align="center" style="color: white;"><br>Edit Data User<br><br></h4>
          <form method="post" action="prosesEditUser.php">
              <input type="hidden" class="form-control" name="id_user" value ="<?php echo $row['id_user'];?>" readonly>
              <input type="text" name="username" value="<?php echo $row['username'];?>" placeholder="username" class="form-control">
              <br>
              <input type = "text" name="email" value="<?php echo $row['email'];?>" placeholder="email" class="form-control">
              <br>
              <input type = "text" name="password" placeholder="password baru" class="form-control">
              <div class="row" style="padding: 15px;">
          <button class="btn btn-primary" type="submit" name="simpan" value="simpan"><i class="fa fa-save"></i>Simpan</button><br> &nbsp;
          <a class="btn btn-danger" href="dataUser.php" role="button"><i class="fa fa-reply"></i>Batal</a></div>
      </form></div>
          <?php } ?>
          </div></div></main>
    </body>
</html>

