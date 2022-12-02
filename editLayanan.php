<?php
      include 'koneksi.php';
      include 'menuAdmin.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Edit Layanan - SB Admin</title>
        <link href="css/admin.css" rel="stylesheet" />
    </head>
    <body>
      <div id="layoutSidenav_content">
      <main style="padding-left: 370px; padding-top: 50px;">
        <div class="card bg-dark" style="width:500px" >
          <?php
          include 'koneksi.php';
          $id = $_GET['id_layanan'];
          $data = mysqli_query($db, "SELECT * FROM layanan WHERE id_layanan='$id'");
 
          while($row = mysqli_fetch_array($data))
          {
          ?>
          <div class="container">
          <h4 align="center" style="color: white;"><br>Edit Data Layanan<br><br></h4>
          <form method="post" action="prosesEditLayanan.php" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="id_layanan" value ="<?php echo $row['id_layanan'];?>" readonly>
              <img style='height:120px;' src='img/<?php echo $row['gambar']; ?>'></img>
              <input type="file" name="gambar" value="<?php echo $row['gambar'];?>" class="form-control">
              <br>
              <input type = "text" name="judul_layanan" value="<?php echo $row['judul_layanan'];?>" placeholder="Layanan" class="form-control">
              <br>
              <input type = "text" name="isi1" value="<?php echo $row['isi1'];?>" placeholder="isi1" class="form-control">
              <br>
              <input type = "text" name="isi2" value="<?php echo $row['isi2'];?>" placeholder="isi2" class="form-control">
              <br>
              <input type = "text" name="isi3" value="<?php echo $row['isi3'];?>" placeholder="isi3" class="form-control">
              <div class="row" style="padding: 10px;">
          <button class="btn btn-primary" type="submit" name="simpan" value="simpan"><i class="fa fa-save"></i>Simpan</button><br> &nbsp;
          <a class="btn btn-danger" href="dataLayanan.php" role="button"><i class="fa fa-reply"></i>Batal</a></div>
      </form></div>
          <?php } ?>
          </div></div></main>
    </body>
</html>

