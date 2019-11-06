<?php
include '../helper/connection.php';

$tujuanCust = $_GET["id"];
$query = "UPDATE tb_hotel_detail SET flag='0' where tujuan_cust = '$tujuanCust'";

if (mysqli_query($con, $query)) 
{
    header("Location:../admin/dataHotelDetail.php");
} 
else 
{
    $error = urldecode("Data tidak berhasil di delete");
    header("Location:../admin/dataHotelDetail.php?error=$error");
}

mysqli_close($con);
?>