<?php
include '../helper/connection.php';
session_start();
$error = '';

if(!empty($_POST["username"]) || !empty($_POST["password"])) {
    # Get username and password from user
    $username = $_POST["username"];
    $password = $_POST["password"];

    # Write MySql Query
    $query = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
    # Get the query result
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $level = $row["level"];

        if($level == 1) {
            $_SESSION["username"] = $username;
            $_SESSION["level"] = $level;
            header("Location: ../admin/landingAdmin.php");
        } else {
            $_SESSION["username"] = $username;
            $_SESSION["level"] = $level;
            header("Location: ../user/landingUser.php");
        }
    } else {
        // $error = urlencode("Username atau password salah!");
        // header("Location: index.php");
        ?><script>alert("Username atau password salah!"); document.location.href="index.php"; </script><?php
    }

    # Close connection to database
    mysqli_close($con);

} else {
    // echo "masuk";
    // die();
    // $error = urlencode("Username atau password kosong!");
    // header("Location: index.php");
    ?><script>alert("Username atau password kosong!"); document.location.href="index.php"; </script><?php
    // exit;
}
?>