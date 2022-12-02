<?php
      include 'koneksi.php';
      include 'menuAdmin.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Edit Komunitas - SB Admin</title>
        <link href="css/admin.css" rel="stylesheet" />
    </head>
    <body>
      <div id="layoutSidenav_content">
      <main style="padding-left: 370px; padding-top: 50px;">
        <div class="card bg-dark" style="width:500px" >
      <?php
      $id = $_GET['id_komunitas'];
      $data = mysqli_query($db, "SELECT * FROM komunitas_ikm WHERE id_komunitas='$id'");
      $nomor = 1;
      while($row = mysqli_fetch_array($data))
      {
      ?>
      <div class="container">
      <h4 align="center" style="color: white;"><br>Edit Data Komunitas<br><br></h4>
      <form method="post" action="prosesEditKomunitas.php">
          <input type="hidden" class="form-control" name="id_komunitas" value ="<?php echo $row['id_komunitas'];?>" readonly>
          <input type="text" name="nama_komunitas" value="<?php echo $row['nama_komunitas'];?>" placeholder="Nama Komunitas" class="form-control">
          <br>
          <input type = "text" name="jenis_komunitas" value="<?php echo $row['jenis_komunitas'];?>" placeholder="Jenis Komunitas" class="form-control">
          <br>
          <input type = "text" name="alamat" value="<?php echo $row['alamat'];?>" placeholder="Alamat" class="form-control">
          <br>
          <input type = "text" name="telepon" value="<?php echo $row['telepon'];?>" placeholder="Telepon" class="form-control">
          <br>
          <input type = "text" name="status" value="<?php echo $row['status'];?>" placeholder="Aktif/Tidak Aktif" class="form-control">
          <div class="row" style="padding: 15px;">
          <button class="btn btn-primary" type="submit" name="simpan" value="simpan"><i class="fa fa-save"></i>Simpan</button><br> &nbsp;
          <a class="btn btn-danger" href="dataKomunitas.php" role="button"><i class="fa fa-reply"></i>Batal</a></div>
      </form></div>
      <?php } ?>
      </div></div></main>
    </body>
</html>

