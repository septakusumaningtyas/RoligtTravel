<?php
include '../helper/connection.php';

$kodeCustomer=$_POST["kode_cust"];
$tujuanCustomer=$_POST["tujuan-cust"];
$kodePaket=$_POST["kode_pkt"];
$noTrans=$_POST["no_trans"];
$kodeHotel=$_POST["kode_hotel"];
$kodePenerbangan=$_POST["kode_penerbangan"];
$query="update tb_cust_detail set tujuan_cust = '$tujuanCustomer', kode_pkt = '$kodePaket' , no_trans = '$noTrans', kode_hotel = '$kodeHotel', kode_penerbangan = '$kodePenerbangan' where kode_cust = $kodeCustomer";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataCustDetail.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di diedit");
    header("Location:../admin/dataCustDetail.php?error=$error");
}

mysqli_close($con);
?>