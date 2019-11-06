<?php
    // session_start();
    // $username = $_SESSION["username"];
    // $role = $_SESSION["role"];
    include '../helper/connection.php';
?>
<html>
    <head>
        <title>Data Email</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
                        <li class="nav-item"><a href="dataEmail.php" class="nav-link">Data Email</a></li>
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
            <div class="container-table" id="data">
                <h2 class="mt-3 text-center">Data Email</h2>
                <?php
                    $message = '';
                    if(isset($_GET["error"])) {
                        $message = $_GET["error"];
                        echo "
                        <p style='color:red; font-style:italic'>$message</p>
                        ";
                    }
                ?>
                <!-- <div class="row"> -->
                    <table id="email" class="table table-stripped text-center mt-3" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Alamat Email</th>
                                <th>Subject</th>
                                <th>Pesan</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "SELECT * FROM tb_email";
                        $result = mysqli_query($con, $query);

                        if (mysqli_num_rows($result) > 0){
                            $index = 1;
                            while($row = mysqli_fetch_assoc($result)){
                                $kode_email = $row["kode_email"];
                                echo "
                                <tr>
                                    <td>" . $index++ . "</td>
                                    <td>" .$row["name"]. "</td>
                                    <td>" .$row["address"]. "</td>
                                    <td>" .$row["subject"]. "</td>
                                    <td>" .$row["message"]. "</td>
                                </tr>
                                ";
                            }
                        }
                        mysqli_close($con); 
                        ?>
                        </tbody>
                    </table>
                <!-- </div> -->
            </div>
            <script>
                $(document).ready(function() {
                    $('#email').DataTable({
                        "LengthMenu" : [5,10,15,20],
                        "pageLength" : 5
                    });
                } );
            </script>
        </main>
    </body>
</html>