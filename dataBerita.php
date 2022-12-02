 <?php include ("menuAdmin.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Data Berita - SB Admin</title>
        <link href="css/admin.css" rel="stylesheet" />
    </head>
    <body>
        <div id="layoutSidenav_content">
            <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Daftar Berita</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Daftar berita</li>
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
                                <i class="fas fa-table mr-1"></i>
                                Daftar Berita
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
                                            <th scope="col">Judul</th>
                                            <th scope="col">isi</th>
                                            <th scope="col">tanggal</th>
                                            <th scope="col">Option</th>
                                          </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th scope="w3-row">Gambar</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">isi</th>
                                            <th scope="col">tanggal</th>
                                            <th scope="col">Option</th>
                                          </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php
                                          include "koneksi.php";
                                          
                                          $SqlQuery = mysqli_query($db,"select * from berita");

                                        while ($row=mysqli_fetch_array($SqlQuery)) { 
                                            ?>
                                            <tr>
                                               <td>
                                                <img style='height:120px;' src='img/<?php echo $row['gambar']; ?>'></img><br>
                                                <?php echo $row['gambar'];?><br> </td>
                                                <td><?php echo $row['judul']; ?></td>
                                                <td><?php echo $row['isi']; ?></td>
                                                <td><?php echo $row['tanggal']; ?></td>
                                                <td><div class="row">
                                                    <a class="btn btn-warning" href="editBerita.php?id_berita=<?php echo $row['id_berita']; ?>" role="button"><i class="fa fa-edit"></i></a> 
                                                    <a role="button" class="btn btn-danger" href="hapusBerita.php?id=<?php echo $row['id_berita']; ?>"><i class="fa fa-trash"></i>
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
            <form method="post" action="prosesBerita.php" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" id="id" name="id" class="form-control">
              <input type="file" id="fotoberita" name="fotoberita" class="form-control"></input>
              <br>
              <input type = "text" id="judul" name="judul" placeholder="Judul" class="form-control">
              <br>
              <input type = "text" id="isi" name="isi" placeholder="Isi Berita" class="form-control">
              <br> 
              <input type = "date" id="tanggal" name="tanggal" class="form-control">
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
