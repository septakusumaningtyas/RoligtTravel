<?php
include '../helper/connection.php';

$kodePenerbangan = $_GET["id"];
$query = "UPDATE tb_penerbangan SET flag='0' where kode_penerbangan = '$kodePenerbangan'";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataPenerbangan.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di delete");
    header("Location:../admin/dataPenerbangan.php?error=$error");
}

mysqli_close($con);
?>