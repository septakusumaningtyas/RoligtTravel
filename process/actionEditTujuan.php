<?php
include '../helper/connection.php';

$kodeTujuan=$_POST["kode_tujuan"];
$namaTujuan=$_POST["nama_tujuan"];
$query="update tb_tujuan set nama_tujuan = '$namaTujuan' where kode_tujuan = '$kodeTujuan'";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataTujuan.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di diedit");
    header("Location:../admin/dataTujuan.php?error=$error");
}

mysqli_close($con);
?>