<?php include("menuUser.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BERITA</title>
  <meta charset="utf-8">
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
<section class="about">
   <div class="container-fluid">
  <div class="container">
    <h4 class="card-title bg-dark" style="color:white;">BERITA</h4>
    <div class="card" style="padding: 20px;">
    <?php
    include ("koneksi.php");

    $data = mysqli_query($db,"select * from berita");

    while ($row=mysqli_fetch_array($data)) { ?>
        <div class="w3-row">
          <div class="w3-col s6 w3-center" style="padding-top:20px;"><img src="img/<?php echo $row['gambar']; ?>" width="360px" height="180px"><br></div>
          <div class="w3-col s6 w3-dark-grey w3-center" style="padding-top:30px;"><h5 align="center" ><b><?php echo $row['judul']; ?></b></h5><br>
            <p><?php echo $row['isi']; ?> </p><?php echo $row['tanggal']; ?><p></p></div>
        </div>
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
