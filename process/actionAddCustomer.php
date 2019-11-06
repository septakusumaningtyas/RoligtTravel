<?php
include '../helper/connection.php';

$kodeCustomer=$_POST["kode_cust"];
$namaCustomer=$_POST["nama_cust"];
$alamatCustomer=$_POST["alamat_cust"];
$noTelp=$_POST["no_telp_cust"];
$query="insert into tb_customer (kode_cust, nama_cust, alamat_cust, no_telp_cust) values ('$kodeCustomer','$namaCustomer','$alamatCustomer','$noTelp')";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataCust.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di ditambahkan");
    header("Location:../admin/dataCust.php?error=$error");
}

mysqli_close($con);
?>