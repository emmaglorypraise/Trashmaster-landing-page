<?php


$update=false;
$name="";
$location="";
$id="";

$mysqli =new mysqli('127.0.0.1','root','','trashmaster') or die(mysqli_error($mysqli));
  




if (isset($_POST['emailsaver'])){

    $email=$_POST['email'];

    $mysqli->query("INSERT INTO data2 (email) VALUES ('$email')") or die ($mysqli->error);

    header("location:index.php");

}
