<?php
    include '../helper/connection.php';
?>
<html>
    <head>
        <title>Add Customer</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
            crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js "></script>
        <link rel="stylesheet" href="../css/dataStyle.css">
        <link rel="stylesheet" href="../css/navStyle.css">
        <script src="../js/script.js"></script>
    </head>
    <body>
        <main class="container" role="main" id="main">
            <div class="header fixed-top" id="header">
                <h1 id="judul1">Roligt
                    <span id="judul2">Travel</span>
                </h1>
                <h4 id="sub-judul">Admin</h4>
                <div id="nav">
                    <span style="font-size:25px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </div>
            </div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="profile" id="profile">
                    <img class="img-profile" src="../img/PicsArt_12-02-08.19.53.png" alt="logo" width="150px" height="150px">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="dataCust.php" class="nav-link">Data Customer</a></li>
                        <li class="nav-item"><a href="dataCustDetail.php" class="nav-link">Data Customer Detail</a></li>
                        <li class="nav-item"><a href="dataHotel.php" class="nav-link">Data Hotel</a></li>
                        <li class="nav-item"><a href="dataHotelDetail.php" class="nav-link">Data Hotel Detail</a></li>
                        <li class="nav-item"><a href="dataPackages.php" class="nav-link">Data Packages</a></li>
                        <li class="nav-item"><a href="dataPenerbangan.php" class="nav-link">Data Penerbangan</a></li>
                        <li class="nav-item"><a href="dataPenerbanganDetail.php" class="nav-link">Data Penerbangan Detail</a></li>
                        <li class="nav-item"><a href="dataTransaksi.php" class="nav-link">Data Transaksi</a></li>
                        <li class="nav-item"><a href="dataTujuan.php" class="nav-link">Data Tujuan</a></li>
                    </ul>
                    <a href="../login/index.php" class="pull-right" style="color:White">Logout</a>
                </div>
            </div>
            <div class="container">
                <h2 class="mt-3 text-center">Form Tambah Customer</h2>
                <div class="row mt-5">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form action="../process/actionAddCustomer.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Kode Customer</label>
                                <div class="col-md-9">
                                    <input type="number" name="kode_cust" id="kode_cust" class="form-control" placeholder="Kode Customer" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Nama Customer</label>
                                <div class="col-md-9">
                                    <input type="text" name="nama_cust" id="nama_cust" class="form-control" placeholder="Nama Customer" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Alamat Customer</label>
                                <div class="col-md-9">
                                    <input type="text" name="alamat_cust" id="alamat_cust" class="form-control" placeholder="Alamat Customer" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">No Telp</label>
                                <div class="col-md-9">
                                    <input type="text" name="no_telp_cust" id="no_telp_cust" class="form-control" placeholder="No Telp" required>
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <div class="col-md-4">
                                    <a name="backBtn" id="backBtn" class="btn btn-dark btn-block" href="dataCust.php" role="button">Kembali</a>
                                </div>
                                <div class="col-md-4">
                                    <button name="clearFormBtn" id="clearFormBtn" class="btn btn-warning btn-block" role="button" onclick="clearForm()">Clear</button>
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" name="tambah" class="btn btn-success btn-block" value="Tambah"/>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <script>
                function clearForm() {
                    $('#kode_cust').val('');
                    $('#nama_cust').val('');
                    $('#alamat_cust').val('');
                    $('#no_telp_cust').val('');
                }
            </script>
        </main>
    </body>
</html>