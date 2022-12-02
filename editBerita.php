<?php
      include 'koneksi.php';
      include 'menuAdmin.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Edit Berita - SB Admin</title>
        <link href="css/admin.css" rel="stylesheet" />
    </head>
    <body>
      <div id="layoutSidenav_content">
      <main style="padding-left: 370px; padding-top: 50px;">
        <div class="card bg-dark" style="width:500px" >
          <?php
          include 'koneksi.php';
          $id = $_GET['id_berita'];
          $data = mysqli_query($db, "SELECT * FROM berita WHERE id_berita='$id'");

          while($row = mysqli_fetch_array($data))
          {
          ?>
          <div class="container">
          <h4 align="center" style="color: white;"><br>Edit Data Berita<br><br></h4>
          <form method="post" action="prosesEditBerita.php" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="id_berita" value ="<?php echo $row['id_berita'];?>" readonly>
              <img style='height:120px;' src='img/<?php echo $row['gambar']; ?>'></img>
              <input type="file" name="fotoberita" value="<?php echo $row['gambar'];?>" class="form-control"></input>
              <input type="hidden" class="form-control" name="fotolama" value ="<?php echo $row['gambar'];?>">
              <br>
              <input type = "text" name="judul" value="<?php echo $row['judul'];?>" class="form-control">
              <br>
              <input type = "text" name="isi" value="<?php echo $row['isi'];?>" class="form-control">
              <br>
              <input type = "date" name="tanggal" value="<?php echo $row['tanggal'];?>" class="form-control">
              <div class="row" style="padding: 15px;">
          <button class="btn btn-primary" type="submit" name="simpan" value="simpan"><i class="fa fa-save"></i>Simpan</button><br> &nbsp;
          <a class="btn btn-danger" href="dataBerita.php" role="button"><i class="fa fa-reply"></i>Batal</a></div>
      </form></div>
          <?php } ?>
          </div></div></main>
    </body>
</html>

