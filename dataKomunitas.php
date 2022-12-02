 <?php 
 include ("menuAdmin.php");
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Data Komunitas - SB Admin</title>
        <link href="css/admin.css" rel="stylesheet" />
    </head>
    <body>
           <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Komunitas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="rumahKemasan.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Komunitas</li>
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
                                Data Komunitas
                            </div>
                            <div class="card-header">
                                <a class="btn btn-success" href="reportKomunitas.php" role="button"><i class='fa fa-download' style='font-size:24px'></i> Download</a>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-plus-square" style='font-size:24px'></i>Tambah Data
                                  </button>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                           <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Lengkap Komunitas</th>
                                            <th scope="col">Jenis Komunitas</th>
                                            <th scope="col">Alamat Komunitas</th>
                                            <th scope="col">Telepon</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Option</th>
                                          </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Lengkap Komunitas</th>
                                            <th scope="col">Jenis Komunitas</th>
                                            <th scope="col">Alamat Komunitas</th>
                                            <th scope="col">Telepon</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Option</th>
                                          </tr>
                                        </tfoot>
                                        <?php
                                          include "koneksi.php";
                                          
                                          $SqlQuery = mysqli_query($db,"select * from komunitas_ikm");
                                          $no = 1;

                                        while ($row=mysqli_fetch_array($SqlQuery)) { 
                                            ?>
                                            <tr>
                                                <td><?php echo $no++;  ?> </td>
                                                <td><?php echo $row['nama_komunitas']; ?></td>
                                                <td><?php echo $row['jenis_komunitas']; ?></td>
                                                <td><?php echo $row['alamat']; ?></td>
                                                <td><?php echo $row['telepon']; ?></td>
                                                <td><?php echo $row['status']; ?></td>
                                            <td><div class="row">
                                                <a class="btn btn-warning" href="editKomunitas.php?id_komunitas=<?php echo $row['id_komunitas']; ?>" role="button"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-danger" href="hapusKomunitas.php?id=<?php echo $row['id_komunitas']; ?>" role="button"><i class="fa fa-trash"></i></a></div>
                                            </td>
                                        </form>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
        </main>
        <?php include ("footerAdmin.php") ?>
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
            <form method="post" action="prosesKomunitas.php" enctype="multipart/form-data">
            <div class="modal-body">
              <input type="text" name="nama_komunitas" placeholder="Nama Komunitas" class="form-control">
              <br>
              <input type = "text" name="jenis_komunitas" placeholder="Jenis Komunitas" class="form-control">
              <br>
              <input type = "text" name="alamat" placeholder="Alamat" class="form-control">
              <br> 
              <input type = "text" name="telepon" placeholder="Telepon" class="form-control">
              <br>
              <input type = "textarea" name="deskripsi" placeholder="Deskripsi" class="form-control">
              <br>
              <input type='radio' name='status' value='Aktif'>Aktif
              <input type='radio' name='status' value='Tidak Aktif'>Tidak Aktif
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
