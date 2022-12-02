 <?php include ("menuAdmin.php");  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Data User - SB Admin</title>
        <link href="css/admin.css" rel="stylesheet" />
    </head>
    <body>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="rumahKemasan.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data User</li>
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
                            <i class="fas fa-table mr-1"></i> Data User
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
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">level</th>
                                            <th scope="col">Option</th>
                                          </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">level</th>
                                            <th scope="col">Option</th>
                                          </tr>
                                        </tfoot>
                                       <?php
                                          include "koneksi.php";
                                          
                                          $SqlQuery = mysqli_query($db,"select * from user");
                                          $no = 1;

                                        while ($row=mysqli_fetch_array($SqlQuery)) { 
                                            ?>
                                            <tr>
                                            <form method="post" action="prosesEditUser.php"></form>
                                                <input type="hidden" name="id_user" value="<?=$id;?>">
                                                <td><?php echo $no++;  ?> </td>
                                                <td><?php echo $row['username']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['password']; ?></td>
                                                <td><?php echo $row['level']; ?></td>
                                                <td><div class="row">
                                                    <a class="btn btn-warning" href="editUser.php?id_user=<?php echo $row['id_user']; ?>" role="button"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-danger" href="hapusUser.php?id=<?php echo $row['id_user']; ?>" role="button"><i class="fa fa-trash"></i></a><div>
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
            <?php include ("footerAdmin.php"); ?>
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
            <form method="post" action="prosesRegis.php" enctype="multipart/form-data">
            <div class="modal-body">
              <input type="text" name="username" placeholder="username" class="form-control">
              <br>
              <input type = "text" name="email" placeholder="email" class="form-control">
              <br>
              <input type = "text" name="password" placeholder="password" class="form-control">
              <br>
              <input type = "text" name="level" placeholder="Isi admin (Form khusus Admin)" class="form-control">
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
