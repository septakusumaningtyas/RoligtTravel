<?php
    session_start();
    
    if(isset($_SESSION['uname']) and isset($_SESSION['level']))
    {
        if($_SESSION['level'] == 1)
        {
            header("location: admin/landingAdmin.php");
        }
        else
        {
            header("location: user/landingUser.php");
        }
    }

    if(isset($_GET['pesan']))
    {
        $mess = "<p> {$_GET['pesan']} </p>";
    }
    else
    {
        $mess = "";
    }
?>

<html>
    <head>
        <title>-Login Roligt Travel-</title>
        <link rel="stylesheet" href="../css/signinStyle.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </head>
    <body class="text-center">
        <form class="form-signin" action="login.php" method="POST">
            <img src="../img/PicsArt_12-02-08.19.53.png" width="50%" alt="logo" class="mb-3"/>
            <h2>LOGIN HERE</h2>
            <input type="text" name="username" class="form-control" placeholder="username">
            <input type="password" name="password" class="form-control" placeholder="password">
            <button class="btn btn-lg btn-primary btn-block mt-4 mb-4" type="submit" name="submit">Login</button>
            <!-- <p><?php //echo $mess; ?></p> -->
            <p>Belum memiliki akun ? Silahkan <a href="../process/signin.php">register</a></p>
        </form>
    </body>
</html>