<?php

session_start();



if (isset($_POST['emailsaver'])){

    $email=$_POST['email'];

    $mysqli =new mysqli('127.0.0.1','root','','trashmaster') or die(mysqli_error($mysqli));
    

    $_SESSION["success_message"] = "you have subscribed sucessfully";

    header("location:index.php");

}
