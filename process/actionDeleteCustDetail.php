<?php
include '../helper/connection.php';

$kodeCustomer = $_GET["id"];
$query = "UPDATE tb_cust_detail SET flag='0' where kode_cust = $kodeCustomer";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataCustDetail.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di delete");
    header("Location:../admin/dataCustDetail.php?error=$error");
}

mysqli_close($con);
?>