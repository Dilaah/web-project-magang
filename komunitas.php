<?php include("menuUser.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>KOMUNITAS IKM</title>
  <meta charset="utf-8">
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
<div class="container-fluid">
<section class="about">
  <div class="card">
  <h4 class="card-title bg-dark" style="color:white;">DATA KOMUNITAS IKM</h4>
      <br>
        <form class="form-inline" >
            <div class="form-group">
              <select class="form-control" id="Kolom" name="Kolom" required="">
                <?php
                  $kolom=(isset($_GET['Kolom']))? $_GET['Kolom'] : "";
                ?>
                <option value="nama_komunitas" <?php if ($kolom=="kategori") echo "selected"; ?>> Nama Komunitas</option>
                <option value="jenis_komunitas" <?php if ($kolom=="nama") echo "selected";?>>Jenis Komunitas</option>
                <option value="alamat" <?php if ($kolom=="harga") echo "selected";?>>Alamat</option>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="KataKunci" name="KataKunci" placeholder="Kata kunci.." required="" value="<?php if (isset($_GET['KataKunci']))  echo $_GET['KataKunci']; ?>">
            </div>
            <button class="btn btn-outline-primary" type="submit">Search</button>
            <a href="komunitas.php" class="btn btn-outline-primary"> Reset </a>
          </form>

  <p></p>
  <div class="container-fluid">
  <table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Lengkap Komunitas</th>
        <th scope="col">Jenis Komunitas</th>
        <th scope="col">Alamat Komunitas</th>
        <th scope="col">Telepon</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
  <?php
      include "koneksi.php";
     
      $page = (isset($_GET['page']))? (int) $_GET['page'] : 1;
      
      $kolomCari=(isset($_GET['Kolom']))? $_GET['Kolom'] : "";
     
      $kolomKataKunci=(isset($_GET['KataKunci']))? $_GET['KataKunci'] : "";

      // Jumlah data per halaman
      $limit = 10;

      $limitStart = ($page - 1) * $limit;
      
      //kondisi jika parameter pencarian kosong
      if($kolomCari=="" && $kolomKataKunci==""){
        $SqlQuery = mysqli_query($db, "SELECT * FROM komunitas_ikm LIMIT ".$limitStart.",".$limit);
      }else{
        //kondisi jika parameter kolom pencarian diisi
        $SqlQuery = mysqli_query($db, "SELECT * FROM komunitas_ikm WHERE $kolomCari LIKE '%$kolomKataKunci%' LIMIT ".$limitStart.",".$limit);
      }
      
      $no = $limitStart + 1;

  while ($row=mysqli_fetch_array($SqlQuery)) { ?>
    <tr>
      <td><?php echo $no++; ?> </td>
      <td><?php echo $row['nama_komunitas']; ?></td>
      <td><?php echo $row['jenis_komunitas']; ?></td>
      <td><?php echo $row['alamat']; ?></td>
      <td><?php echo $row['telepon']; ?></td>
      <td><?php echo $row['status']; ?></td>
    </tr>
    <?php 
  }
  ?>
  </tbody>
  </table>

  <div align="right">
     <ul class="pagination">
      <?php
        // Jika page = 1, maka LinkPrev disable
        if($page == 1){ 
      ?>        
        <!-- link Previous Page disable --> 
        <li class="disabled"><a href="#"><button class="btn btn-outline-primary">Previous</button></a></li>
      <?php
        }
        else{ 
          $LinkPrev = ($page > 1)? $page - 1 : 1;  

          if($kolomCari=="" && $kolomKataKunci==""){
          ?>
            <li><a href="komunitas.php?page=<?php echo $LinkPrev; ?>"><button class="btn btn-outline-primary">Previous</button></a></li>
       <?php     
          }else{
        ?> 
          <li><a  href="komunitas.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $LinkPrev;?>"><button class="btn btn-outline-primary">Previous</button></a></li>
         <?php
           } 
        }
      ?>

      <?php
        //kondisi jika parameter pencarian kosong
        if($kolomCari=="" && $kolomKataKunci==""){
          $SqlQuery = mysqli_query($db, "SELECT * FROM komunitas_ikm");
        }else{
          //kondisi jika parameter kolom pencarian diisi
          $SqlQuery = mysqli_query($db, "SELECT * FROM komunitas_ikm WHERE $kolomCari LIKE '%$kolomKataKunci%'");
        }     
        //Hitung semua jumlah data yang berada pada tabel update_regis
        $JumlahData = mysqli_num_rows($SqlQuery); 
        // Hitung jumlah halaman yang tersedia
        $jumlahPage = ceil($JumlahData / $limit); 
        // Jumlah link number 
        $jumlahNumber = 1; 
        // Untuk awal link number
        $startNumber = ($page > $jumlahNumber)? $page - $jumlahNumber : 1; 
        // Untuk akhir link number
        $endNumber = ($page < ($jumlahPage - $jumlahNumber))? $page + $jumlahNumber : $jumlahPage; 
        
        for($i = $startNumber; $i <= $endNumber; $i++){
          $linkActive = ($page == $i)? ' class="active"' : '';

          if($kolomCari=="" && $kolomKataKunci==""){
      ?>
          <li<?php echo $linkActive; ?>><a class="btn btn-outline-primary" href="komunitas.php?page=<?php echo "$i"; ?>"><?php echo "$i"; ?></a></li>

      <?php
        }else{
          ?>
          <li<?php echo $linkActive; ?>><a class="btn btn-outline-primary" href="komunitas.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php
        }
      }
      ?>
      
      <!-- link Next Page -->
      <?php       
       if($page == $jumlahPage){ 
      ?>
        <li class="disabled"><a href="#"><button class="btn btn-outline-primary">Next</button></a></li>
      <?php
      }
      else{
        $linkNext = ($page < $jumlahPage)? $page + 1 : $jumlahPage;
       if($kolomCari=="" && $kolomKataKunci==""){
          ?>
            <li><a href="komunitas.php?page=<?php echo $linkNext; ?>"><button class="btn btn-outline-primary">Next</button></a></li>
       <?php     
          }else{
        ?> 
           <li>
            <a href="komunitas.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $linkNext; ?>"><button class="btn btn-outline-primary">Next</button></a></li>
      <?php
        }
      }
      ?>
    </ul>
  </div>
</div></div></section>
</div>

<!-- FOOTER -->
<footer>
    <small>
        <div class="text-muted">Copyright &copy; Rumah Kemasan Sumsel</div>
    </small>
  </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
</body>
</html>
