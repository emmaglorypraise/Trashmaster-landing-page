<?php

session_start();



if (isset($_POST['emailsaver'])){

    $email=$_POST['email'];

    $mysqli =new mysqli('eazxk938o1nnui2m','qcr0wyvurxjts25z','jze41od3su7udcac','3306') or die(mysqli_error($mysqli));
    

    $_SESSION["success_message"] = "you have subscribed sucessfully";

    header("location:index.php");
}
