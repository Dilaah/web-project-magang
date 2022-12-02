<?php include("menuAdmin.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard - SB Admin</title>
        <link href="css/admin.css" rel="stylesheet" />
    </head>
    <style type="text/css">
        .display {
        height: 45vh;
        background-image: url('img/logo.jpg');
        background-size: 1080px 350px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        }
        .display:after {
            content:'';
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(30, 180, 180, .5);
        }
        .display h5 {
            color: #000;
            z-index: 1;
            padding: 20px 25px;
            border:3px solid #fff;
        }
    </style>
    <body>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><h3><b>
                                        <?php
                                        include 'koneksi.php';
                                        $data_barang = mysqli_query($db,"SELECT * FROM layanan");
                                         
                                        $jumlah_barang = mysqli_num_rows($data_barang);
                                    ?> 
                                    <?php echo $jumlah_barang; ?></b></h3>Data Layanan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dataLayanan.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><h3><b>
                                        <?php
                                        include 'koneksi.php';
                                        $data_barang = mysqli_query($db,"SELECT * FROM komunitas_ikm");
                                         
                                        $jumlah_barang = mysqli_num_rows($data_barang);
                                    ?> 
                                    <?php echo $jumlah_barang; ?></b></h3>Data Komunitas</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dataKomunitas.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><h3><b>
                                        <?php
                                        include 'koneksi.php';
                                        $data_barang = mysqli_query($db,"SELECT * FROM data_kunjungan");
                                         
                                        $jumlah_barang = mysqli_num_rows($data_barang);
                                    ?> 
                                    <?php echo $jumlah_barang; ?></b></h3>Data Tamu</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dataTamu.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><h3><b>
                                        <?php
                                        include 'koneksi.php';
                                        $data_barang = mysqli_query($db,"SELECT * FROM berita");
                                         
                                        $jumlah_barang = mysqli_num_rows($data_barang);
                                    ?> 
                                    <?php echo $jumlah_barang; ?></b></h3>Data Berita</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dataBerita.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><h3><b>
                                        <?php
                                        include 'koneksi.php';
                                        $data_barang = mysqli_query($db,"SELECT * FROM user");
                                         
                                        $jumlah_barang = mysqli_num_rows($data_barang);
                                    ?> 
                                    <?php echo $jumlah_barang; ?></b></h3>User</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dataUser.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <br>
                <div class="card">
                    <h4 class="card-title bg-dark" style="color:white;"><i class="fas fa-exclamation mr-1"></i> Informasi</h4>
                    <ul> Hak Akses Sebagai Admin : <br>
                        <li>Mengelola Daftar Layanan Rumah Kemasan</li>
                        <li>Mengelola Data Komunitas IKM</li>
                        <li>Mengelola Data Tamu Rumah Kemasan</li>
                        <li>Mengelola Daftar Berita Rumah Kemasan</li>
                        <li>Mengelola Data User Rumah Kemasan</li>
                    </ul>
                </div><br>
                    </div>
                </main>
            <?php include("footerAdmin.php"); ?>
    </body>
</html>
