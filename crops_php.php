<?php

session_start();
if(!isset ($_SESSION['user'])){
  header('location:index.html');
}

$conn = mysqli_connect('localhost','aman','aman','farm');
$contact = $_SESSION['user'];
$ctype = $_POST['ctype'];
$crops = $_POST['crops'];
$cropAmount = $_POST['cropAmount'];
$price=$_POST['price'];

$query = "INSERT INTO crop
VALUES('$contact','$ctype','$crops','$cropAmount','$price')";
$res = mysqli_query($conn,$query);
    if($res){
      header('location:profile.php');
    }
    else{
        alert("Error");
    }

//header("location:crops.php");


?>