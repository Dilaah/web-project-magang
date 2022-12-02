 <?php 
 include ("menuAdmin.php");
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Data Tamu - SB Admin</title>
        <link href="css/admin.css" rel="stylesheet" />
    </head>
    <body>
           <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Tamu Rumah Kemasan</h1>
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
                                Data Tamu
                            </div>
                            <div class="card-header">
                                <a class="btn btn-success" href="reportTamu.php" role="button"><i class='fa fa-download' style='font-size:24px'></i> Download</a>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                           <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pemilik</th>
                                            <th scope="col">Nama Merek</th>
                                            <th scope="col">Jenis Produk</th>
                                            <th scope="col">Telepon</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Keperluan</th>
                                            <th scope="col"> Option</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pemilik</th>
                                            <th scope="col">Merek</th>
                                            <th scope="col">Jenis Produk</th>
                                            <th scope="col">Telepon</th>
                                            <th scope="col">Keperluan</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col"> Option</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            include "koneksi.php";
                                          
                                            $SqlQuery = mysqli_query($db,"select * from data_kunjungan");
                                            $no = 1;

                                            while ($row=mysqli_fetch_array($SqlQuery)) { 
                                            ?>
                                            <tr>
                                              <td><?php echo $no++;  ?> </td>
                                              <td><?php echo $row['nama_pemilik']; ?></td>
                                              <td><?php echo $row['nama_merek']; ?></td>
                                              <td><?php echo $row['jenis_produk']; ?></td>
                                              <td><?php echo $row['telepon']; ?></td>
                                              <td><?php echo $row['tanggal']; ?></td>
                                              <td><?php echo $row['keperluan']; ?></td>
                                              <td><div class="row">
                                                  <a class="btn btn-warning" href="editTamu.php?id_tamu=<?php echo $row['id_tamu']; ?>" role="button"><i class="fa fa-edit"></i></a>
                                                  <a class="btn btn-danger" href="hapusTamu.php?id=<?php echo $row['id_tamu']; ?>" role="button"><i class="fa fa-trash"></i></a><div>
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
</html>
