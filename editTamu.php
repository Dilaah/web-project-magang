<?php
      include 'koneksi.php';
      include 'menuAdmin.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Edit tamu - SB Admin</title>
        <link href="css/admin.css" rel="stylesheet" />
    </head>
    <body>
      <div id="layoutSidenav_content">
      <main style="padding-left: 370px; padding-top: 50px;">
        <div class="card bg-dark" style="width:500px" >
          <?php
          include ("koneksi.php");
          $id = $_GET['id_tamu'];
          $data = mysqli_query($db, "SELECT * FROM data_kunjungan WHERE id_tamu='$id'");
          $nomor = 1;
          while($row = mysqli_fetch_array($data))
          {
          ?>
          <div class="container">
          <h4 align="center" style="color: white;"><br>Edit Data Tamu<br><br></h4>
          <form method="post" action="prosesEditTamu.php">
              <input type="hidden" class="form-control" name="id_tamu" value ="<?php echo $row['id_tamu'];?>" readonly>
              <input type="text" name="nama_pemilik" value="<?php echo $row['nama_pemilik'];?>" placeholder="Nama Pemilik" class="form-control">
              <br>
              <input type = "text" name="nama_merek" value="<?php echo $row['nama_merek'];?>" placeholder="Nama Merek" class="form-control">
              <br>
              <input type = "text" name="jenis_produk" value="<?php echo $row['jenis_produk'];?>" placeholder="Jenis Produk" class="form-control">
              <br>
              <input type = "text" name="telepon" value="<?php echo $row['telepon'];?>" placeholder="Telepon" class="form-control">
              <br>
              <input type = "date" name="tanggal" value="<?php echo $row['tanggal'];?>" class="form-control">
              <br>
              <input type = "text" name="keperluan" value="<?php echo $row['keperluan'];?>" placeholder="Keperluan" class="form-control">
              <div class="row" style="padding: 15px;">
          <button class="btn btn-primary" type="submit" name="simpan" value="simpan"><i class="fa fa-save"></i>Simpan</button><br> &nbsp;
          <a class="btn btn-danger" href="dataTamu.php" role="button"><i class="fa fa-reply"></i>Batal</a></div>
      </form></div>
          <?php } ?>
          </div></div></main>
    </body>
</html>

