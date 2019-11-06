<?php
include '../helper/connection.php';

$kodePaket=$_POST["kode_pkt"];
$namaPaket=$_POST["nama_pkt"];
$hari=$_POST["hari"];
$kodeTujuan=$_POST["tujuan_cust"];
$kodeHotel=$_POST["kode_hotel"];
$kodePenerbangan=$_POST["kode_penerbangan"];
$harga=$_POST["harga"];
$query="update tb_packages set nama_pkt = '$namaPaket', hari = '$hari', kode_tujuan = '$kodeTujuan', kode_hotel = '$kodeHotel', kode_penerbangan = '$kodePenerbangan', harga = '$harga' where kode_pkt = '$kodePaket'";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataPackages.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di diedit");
    header("Location:../admin/dataPackages.php?error=$error");
}

mysqli_close($con);
?>