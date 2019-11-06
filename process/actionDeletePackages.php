<?php
include '../helper/connection.php';

$kodePaket = $_GET["id"];
$query = "UPDATE tb_packages SET flag='0' where kode_pkt = '$kodePaket'";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataPackages.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di delete");
    header("Location:../admin/dataPackages.php?error=$error");
}

mysqli_close($con);
?>