<?php
include '../helper/connection.php';
session_start();
$error = '';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO tb_user(username, password,level) VALUES('$username', '$password',2)";

if(mysqli_query($con,$query))
{
    header("Location: ../login/index.php");
}
else
{
    ?><script>alert("Anda tidak dapat signin!"); document.location.href="signin.php"; </script><?php
}

mysqli_close($con);
?>