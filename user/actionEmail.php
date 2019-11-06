<?php
include '../helper/connection.php';
// if (isset($_POST['submit'])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];
    $query="insert into tb_email (name, address, subject, message) values ('$name','$email','$subject','$message')";

    if (mysqli_query($con, $query)) 
    {
        echo "success";
        // header("Location:contact.php");
        ?><script>alert("Your email has been sent"); document.location.href="contact.php"; </script><?php
    } 
    else 
    {
        ?><script>alert("Your email can't be sent"); document.location.href="contact.php"; </script><?php
    }
// }
mysqli_close($con);
?>