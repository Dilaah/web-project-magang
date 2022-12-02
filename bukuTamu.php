<?php include("menuUser.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BUKU TAMU</title>
  <meta charset="utf-8">
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
<div class="container-fluid">
<section class="about">
<div class="card" style="padding-left: 30px; padding-right: 20px;">
  <h4 class="card-title bg-dark" style="color:white;">BUKU TAMU</h4>
<div class="row">
  <img height="300px" src="img/logoRK.jpg" style="padding-top: 15px;">
<div class="col mt-3" align="center">
  <div class="table table-success">
<div class="col-md-7 col-lg-8">
        <form method="post" action="prosesBukuTamu.php" enctype="multipart/form-data">
          <input type=hidden>
          <div class="row gy-3">
            <div class="col-sm-6">
              <label class="form-label"><br><b>Nama Pemilik</b></label>
               <input type = "text" id="nama_pemilik" name="nama_pemilik" class="form-control">
            </div>

            <div class="col-sm-6">
              <label class="form-label"><br><b>Nama Merek</b></label>
              <input type="text" class="form-control" id="nama_merek" name="nama_merek">
            </div></div>

            <div class="col-sm-6">
              <label class="form-label"><br><b>Jenis Produk IKM</b></label>
              <input type="text" class="form-control" id="jenis_produk" name="jenis_produk" placeholder="Kuliner">
            </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label"><br><b>telepon</b></label>
              <input type="text" class="form-control" id="telepon" name="telepon" placeholder="08xxxxxxxxxx">
            </div>

            <div class="col-md-6">
              <label class="form-label"><br><b>Tanggal</b></label>
              <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div></div>

            <div class="col-12">
              <label for="exampleFormControlTextarea1" class="form-label"><br><b>Keperluan</b></label>
              <textarea class="form-control" id="keperluan" rows="3" name="keperluan"></textarea>
            </div>
          </div>
          <br>
          <div class="text-center">
            <button class="w-15 btn btn-primary" type="submit" value="simpan" style="margin-top:12px;">Kirim</button>
            <button class="w-15 btn btn-primary" type="reset" value="reset" style="margin-top:12px">Reset</button></div><br>
        </form>
      </div>
    </div>
  </form>
</div></div></div></section>

<!-- FOOTER -->
<footer>
    <small>
        <div class="text-muted">Copyright &copy; Rumah Kemasan Sumsel</div>
    </small>
  </footer>
</body>
</html>
