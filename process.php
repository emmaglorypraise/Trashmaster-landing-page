<?php

session_start();



if (isset($_POST['emailsaver'])){

    $email=$_POST['email'];

    $mysqli =new mysqli('3306','qcr0wyvurxjts25z','jze41od3su7udcac','eazxk938o1nnui2m') or die(mysqli_error($mysqli));
    

    $_SESSION["success_message"] = "you have subscribed sucessfully";

    header("location:index.php");
}
