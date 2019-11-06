<?php
include '../helper/connection.php';

$kodeCustomer = $_GET["id"];
$query = "UPDATE tb_customer SET flag='0' where kode_cust = $kodeCustomer";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataCust.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di delete");
    header("Location:../admin/dataCust.php?error=$error");
}

mysqli_close($con);
?>