<?php
include '../helper/connection.php';

$no =$_POST["no"];
$kode_cust=$_POST["kode_cust"];
$tujuan_cust=$_POST["tujuan_cust"];
$kode_pkt=$_P["kode_pkt"];
$no_trans=$_POST["no_trans"];
$kode_hotel=$_POST["kode_hotel"];
$kode_penerbangan=$_POST["kode_penerbangan"];
$query="insert into tb_cust_detail (no,kode_cust, tujuan_cust, kode_pkt, no_trans, kode_hotel, kode_penerbangan) values ('$no','$kode_cust','$tujuan_cust','$kode_pkt','$no_trans','$kode_hotel','$kode_penerbangan')";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataCustDetail.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di ditambahkan");
    header("Location:../admin/dataCustDetail.php?error=$error");
}

mysqli_close($con);
?>