<?php
include '../helper/connection.php';

$kodeHotel = $_GET["id"];
$query = "UPDATE tb_hotel SET flag='0' where kode_hotel = '$kodeHotel'";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataHotel.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di delete");
    header("Location:../admin/dataHotel.php?error=$error");
}

mysqli_close($con);
?>