<?php
include '../helper/connection.php';

$kodeCustomer=$_POST["kode_cust"];
$namaCustomer=$_POST["nama_cust"];
$alamatCustomer=$_POST["alamat_cust"];
$noTelp=$_POST["no_telp_cust"];
$query = "update tb_customer set nama_cust = '$namaCustomer', alamat_cust= '$alamatCustomer', no_telp_cust='$noTelp' where kode_cust = $kodeCustomer";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataCust.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil diedit");
    header("Location:../admin/dataCust.php?error=$error");
}

mysqli_close($con);
?>