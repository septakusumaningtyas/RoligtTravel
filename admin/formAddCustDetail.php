<?php
    include '../helper/connection.php';
?>
<html>
    <head>
        <title>Add Customer Detail</title>
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
                <h2 class="mt-3 text-center">Form Tambah Customer Detail</h2>
                <div class="row mt-5">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form action="../process/actionAddCustDetail.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Kode Customer</label>
                                <div class="col-md-9">
                                    <select name="kode_cust" id="kode_cust" class="form-control">
                                        <?php
                                            $cust = mysqli_query($con,"select * from tb_customer");
                                            while($data6 = mysqli_fetch_array($cust))
                                            {
                                                echo "<option value = $data6[kode_cust]>$data6[nama_cust]</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Tujuan Customer</label>
                                <div class="col-md-9">
                                    <select name="tujuan_cust" id="tujuan_cust" class="form-control">
                                        <?php
                                            $tujuan = mysqli_query($con,"select * from tb_tujuan");
                                            while($data = mysqli_fetch_array($tujuan))
                                            {
                                                echo "<option value = $data[kode_tujuan]>$data[nama_tujuan]</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Kode Paket</label>
                                <div class="col-md-9">
                                    <select name="kode_pkt" id="kode_pkt" class="form-control">
                                        <?php
                                            $paket = mysqli_query($con,"select * from tb_packages");
                                            while($data2 = mysqli_fetch_array($paket))
                                            {
                                                echo "<option value = $data2[kode_pkt]>$data2[nama_pkt]</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">No Transaksi</label>
                                <div class="col-md-9">
                                    <select name="no_trans" id="no_trans" class="form-control">
                                        <?php
                                            $transaksi = mysqli_query($con,"select * from tb_transaksi");
                                            while($data5 = mysqli_fetch_array($transaksi))
                                            {
                                                echo "<option value = $data5[no_trans]>$data5[no_trans]</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Kode Hotel</label>
                                <div class="col-md-9">
                                    <select name="kode_hotel" id="kode_hotel" class="form-control">
                                        <?php
                                            $hotel = mysqli_query($con,"select * from tb_hotel");
                                            while($data3 = mysqli_fetch_array($hotel))
                                            {
                                                echo "<option value = $data3[kode_hotel]>$data3[nama_hotel]</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Kode Penerbangan</label>
                                <div class="col-md-9">
                                    <select name="kode_penerbangan" id="kode_penerbangan" class="form-control">
                                        <?php
                                            $penerbangan = mysqli_query($con,"select * from tb_penerbangan");
                                            while($data4 = mysqli_fetch_array($penerbangan))
                                            {
                                                echo "<option value = $data4[kode_penerbangan]>$data4[nama_maskapai]</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <div class="col-md-4">
                                    <a name="backBtn" id="backBtn" class="btn btn-dark btn-block" href="dataCustDetail.php" role="button">Kembali</a>
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
                    $('#tujuan_cust').val('');
                    $('#kode_pkt').val('');
                    $('#no_trans').val('');
                    $('#kode_hotel').val('');
                    $('#kode_penerbangan').val('');
                }
            </script>
        </main>
    </body>
</html>