<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Menu Admin</title>
        <link href="css/admin.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
        session_start();
            if($_SESSION['level']==""){
            header("location:index.php?pesan=gagal");
            }
        ?>
       <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <img src="img\icon.jpeg" alt="" width="48" height="60" style="padding: 3px;">
            <a class="navbar-brand" href="rumahKemasan.php">Rumah Kemasan</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="rumahKemasan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                             <a class="nav-link" href="dataLayanan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Daftar Layanan
                                <div class="sb-sidenav-collapse-arrow"></i></div>
                            </a>
                              <a class="nav-link" href="dataKomunitas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Komunitas 
                                <div class="sb-sidenav-collapse-arrow"></i></div>
                            </a>
                            <a class="nav-link" href="dataTamu.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Data Tamu
                                <div class="sb-sidenav-collapse-arrow"></i></div>
                            </a>
                            <a class="nav-link" href="dataBerita.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Daftar Berita 
                                <div class="sb-sidenav-collapse-arrow"></i></div>
                            </a>
                            <a class="nav-link" href="dataUser.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data User 
                                <div class="sb-sidenav-collapse-arrow"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        RK Sumsel
                    </div>
                </nav>
            </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>