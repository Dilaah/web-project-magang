 <?php 
 include ("menuAdmin.php");
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Data Layanan - SB Admin</title>
        <link href="css/admin.css" rel="stylesheet" />
    </head>
    <body>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Daftar Layanan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Daftar Layanan</li>
                        </ol>
                        <?php 
                            if(isset($_GET['pesan'])){
                                $pesan = $_GET['pesan'];
                                if($pesan == "berhasil"){
                                    echo "<h4>Berhasil!!!</h4>";
                                }
                            }
                        ?>
                        <div class="card mb-4">
                        <div class="card-header bg-dark" style="color:white;">
                            <i class="fas fa-table mr-1"></i> Daftar Layanan
                        </div>
                        <div class="card-header"> 
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus-square" style='font-size:24px'></i>Tambah Data
                        </button>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                           <tr>
                                            <th scope="w3-row">Gambar</th>
                                            <th scope="col">Layanan</th>
                                            <th scope="col">isi1</th>
                                            <th scope="col">isi2</th>
                                            <th scope="col">isi3</th>
                                            <th scope="col">Option</th>
                                          </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th scope="w3-row">Gambar</th>
                                            <th scope="col">Layanan</th>
                                            <th scope="col">isi1</th>
                                            <th scope="col">isi2</th>
                                            <th scope="col">isi3</th>
                                            <th scope="col">Option</th>
                                          </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php
                                          include "koneksi.php";
                                          
                                          $SqlQuery = mysqli_query($db,"select * from layanan");

                                        while ($row=mysqli_fetch_array($SqlQuery)) { 
                                            ?>
                                            <tr>
                                               <td>
                                                <img style='height:120px;' src='img/<?php echo $row['gambar']; ?>'></img><br>
                                                <?php echo $row['gambar'];?></td>
                                                <td><?php echo $row['judul_layanan']; ?></td>
                                                <td><?php echo $row['isi1']; ?></td>
                                                <td><?php echo $row['isi2']; ?></td>
                                                <td><?php echo $row['isi3']; ?></td>

                                                <td><div class="row">
                                                    <a class="btn btn-warning" href="editLayanan.php?id_layanan=<?php echo $row['id_layanan']; ?>" role="button"><i class="fa fa-edit"></i></a> 
                                                    <a role="button" class="btn btn-danger" href="hapusLayanan.php?id=<?php echo $row['id_layanan']; ?>"><i class="fa fa-trash"></i>
                                                    </a></div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include ("footerAdmin.php") ?>
            </div>
        </div>   
    </body>
    <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <form method="post" action="prosesLayanan.php" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" id="id_" name="id_berita" class="form-control">
              <input type="file" id="gambar" name="gambar" class="form-control">
              <br>
              <input type = "text" id="judul_layanan" name="judul_layanan" placeholder="Judul" class="form-control">
              <br>
              <input type = "text" id="isi1" name="isi1" placeholder="Isi 1" class="form-control">
              <br> 
              <input type = "text" id="isi2" name="isi2" placeholder="Isi 2" class="form-control">
              <br> 
              <input type = "text" id="isi3" name="isi3" placeholder="Isi 3" class="form-control">
              <br> 
            <button class="btn btn-primary" type="submit" value="simpan">Simpan</button>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
      </form>      
          </div>
        </div>
  </div>
</html>
