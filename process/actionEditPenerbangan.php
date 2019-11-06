<?php
include '../helper/connection.php';

$kodePenerbangan=$_POST["kode_penerbangan"];
$namaMaskapai=$_POST["nama_maskapai"];
$query="update tb_penerbangan set nama_maskapai = '$namaMaskapai' where kode_penerbangan = '$kodePenerbangan'";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataPenerbangan.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di diedit");
    header("Location:../admin/dataPenerbangan.php?error=$error");
}

mysqli_close($con);
?>