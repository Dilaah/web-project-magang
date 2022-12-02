<?php include("menuUser.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>LAYANAN</title>
  <meta charset="utf-8">
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
<section class="about">
   <div class="container-fluid">
  <div class="container">
    <h4 class="card-title bg-dark" style="color:white;">LAYANAN</h4>
  <div class="card" style="width:1080px; padding: 40px;">
     <p>Untuk Mendaftarkan HKI Merek, Design Kemasan, Sertifikasi Halal, IUMK/NIB dan SPP-IRT harus melakukan Registrasi terlebih dahulu pada <a href="https://app.simfonis.net/reg_form.php">web.simfonis.com</a> agar dapat memperoleh USERNAME dan PASSWORD setelah melakukan pengisian form dari layanan tersebut. 
    <ul>Form Registrasi Data Anggota
      <li> Siapkan KTP Anda untuk mengisi formulir registrasi</li>
      <li> Pastikan Ukuran File Gambar Maksimal 1Mb</li></b>
    </ul>
    <i>Jika ingin berkunjungan atau konsultasi harap mengisi <a href="login.php">Buku Tamu</a> terlebih dahulu</i></p>
    <table>
    <?php
    include ("koneksi.php");

    $data = mysqli_query($db,"select * from layanan");

    while ($row=mysqli_fetch_array($data)) { ?>

        <tr><td rowspan="5"><img style="height:350px; width: 350px;" src="img/<?php echo $row['gambar']; ?>"></img></td>
        <td><h5 align="center"><b><?php echo $row['judul_layanan']; ?></b></h5></td>
        <tr><td><?php echo $row['isi1']; ?></td></tr>
        <tr><td><?php echo $row['isi2']; ?></td></tr><tr>
        <td><?php echo $row['isi3']; ?></td></tr>
        <tr><td></td></tr>
        <?php 
    }
    ?>
</table></div></div>
</div>
  </section>

<!-- FOOTER -->
 <footer>
    <small>
        <div class="text-muted">Copyright &copy; Rumah Kemasan Sumsel</div>
    </small>
  </footer>
  </body>
</html>
