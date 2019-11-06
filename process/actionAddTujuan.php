<?php
include '../helper/connection.php';

$kodeTujuan=$_POST["kode_tujuan"];
$namaTujuan=$_POST["nama_tujuan"];
$query="insert into tb_tujuan (kode_tujuan, nama_tujuan) values ('$kodeTujuan','$namaTujuan')";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataTujuan.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di ditambahkan");
    header("Location:../admin/dataTujuan.php?error=$error");
}

mysqli_close($con);
?>