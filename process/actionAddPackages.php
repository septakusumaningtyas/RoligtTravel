<?php
include '../helper/connection.php';

$kodePaket=$_POST["kode_pkt"];
$namaPaket=$_POST["nama_pkt"];
$hari=$_POST["hari"];
$kodeTujuan=$_POST["tujuan_cust"];
$kodeHotel=$_POST["kode_hotel"];
$kodePenerbangan=$_POST["kode_penerbangan"];
$harga=$_POST["harga"];
$query="insert into tb_packages (kode_pkt, nama_pkt, hari, kode_tujuan, kode_hotel, kode_penerbangan, harga) values ('$kodePaket','$namaPaket','$hari','$kodeTujuan','$kodeHotel','$kodePenerbangan','$harga')";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataPackages.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di ditambahkan");
    header("Location:../admin/dataPackages.php?error=$error");
}

mysqli_close($con);
?>