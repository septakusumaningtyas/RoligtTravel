<?php
include '../helper/connection.php';

$kodeHotel=$_POST["kode_hotel"];
$namaHotel=$_POST["nama_hotel"];
$kodeTujuan=$_POST["tujuan-cust"];
$query="insert into tb_hotel (kode_hotel, nama_hotel, kode_tujuan) values ('$kodeHotel','$namaHotel','$kodeTujuan')";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataHotel.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di ditambahkan");
    header("Location:../admin/dataHotel.php?error=$error");
}

mysqli_close($con);
?>