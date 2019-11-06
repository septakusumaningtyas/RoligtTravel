<?php
include '../helper/connection.php';

$kodePenerbangan=$_POST["kode_penerbangan"];
$namaMaskapai=$_POST["nama_maskapai"];
$query="insert into tb_penerbangan (kode_penerbangan, nama_maskapai) values ('$kodePenerbangan','$namaMaskapai')";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataPenerbangan.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di ditambahkan");
    header("Location:../admin/dataPenerbangan.php?error=$error");
}

mysqli_close($con);
?>