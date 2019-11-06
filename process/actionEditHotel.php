<?php
include '../helper/connection.php';

$kodeHotel=$_POST["kode_hotel"];
$namaHotel=$_POST["nama_hotel"];
$kodeTujuan=$_POST["tujuan-cust"];
$query="update tb_hotel set nama_hotel = '$namaHotel', kode_tujuan = '$kodeTujuan' where kode_hotel = '$kodeHotel'";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataHotel.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di diedit");
    header("Location:../admin/dataHotel.php?error=$error");
}

mysqli_close($con);
?>