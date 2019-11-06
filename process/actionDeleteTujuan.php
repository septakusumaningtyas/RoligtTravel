<?php
include '../helper/connection.php';

$kodeTujuan = $_GET["id"];
$query = "UPDATE tb_tujuan SET flag='0' where kode_tujuan = '$kodeTujuan'";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataTujuan.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di delete");
    header("Location:../admin/dataTujuan.php?error=$error");
}

mysqli_close($con);
?>