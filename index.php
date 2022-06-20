<?php

require 'function.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>kopi joy</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Aplikasi kasir</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>

    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Home
                        </a>
                        <a class="nav-link" href="menu.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Data menu
                        </a>
                        <a class="nav-link" href="pelanggan.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            pelanggan
                        </a>
                        <a class="nav-link" href="logout.php">

                            logout
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">kopi Joy</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><a href="index.php"></a> Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">stok makanan : </div>

                            </div>
                        </div>


                        <!--card-->

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table "></i>
                                Data menu
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama menu</th>
                                            <th>deskripsi</th>
                                            <th>harga</th>
                                            <th>stock</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $get = mysqli_query($c,"SELECT * from menu");
                                    $i = 1;

                                    while($p=mysqli_fetch_array($get)){
                                        $nama_menu = $p['nama_menu'];
                                        $deskripsi = $p['deskripsi'];
                                        $stock = $p['stock'];
                                        $harga = $p['harga'];
                                   
                                    ?>
                                    <tbody>
                                        <tr>
                                            <th><?= $i++;  ?></th>
                                            <th><?= $nama_menu;  ?></th>
                                            <th><?=  $deskripsi; ?></th>
                                            <th><?= $harga;  ?></th>
                                            <th><?=  $stock; ?></th>

                                        </tr>
                                    </tbody>

                                    <?php  }; ?>
                                </table>
                            </div>
                        </div>

                    </div>
            </main> <br> <br>

            <!--pelanggan--->

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table "></i>
                            Data pelanggan
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id pelanggan</th>
                                        <th>nama</th>
                                        <th>pilihan</th>
                                        <th>harga</th>
                                        <th>tanggal</th>

                                    </tr>
                                </thead>
                                <?php
                                    $gut = mysqli_query($c,"SELECT * from pelanggan");
                                    

                                    while($m=mysqli_fetch_array($gut)){
                                        $id_pelanggan = $m['id_pelanggan'];
                                        $nama = $m['nama'];
                                        $pilihan = $m['pilihan'];
                                        $hargaM = $m['hargaM'];
                                        $tanggal = $m['tanggal'];
                                   
                                    ?>
                                <tbody>
                                    <tr>
                                        <th><?= $id_pelanggan; ?></th>
                                        <th><?= $nama;  ?></th>
                                        <th><?=  $pilihan; ?></th>
                                        <th><?= $hargaM;  ?></th>
                                        <th><?= $tanggal; ?></th>

                                    </tr>
                                </tbody>

                                <?php  }; ?>
                            </table>
                        </div>
                    </div>
                
            

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; zaka fahmi 2022</div>

                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>