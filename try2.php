<?php
session_start();
$naam=$_POST['naam'];
$gender=$_POST['gender'];
$p_id=$_POST['p_id'];
$bloodgp=$_POST['bloodgp'];
$address=$_POST['address'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db2');
if($con)
{
	echo "connection successful but enter the fields";
}
else{
	echo "no connection";
}$q="SELECT * FROM patient WHERE naam='$naam' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
echo "duplicate data";
}
else{
$qy="INSERT INTO patient(p_id,naam,password,gender,bloodgp,address) VALUES('".$_POST['p_id']."','".$_POST['naam']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['bloodgp']."','".$_POST['address']."',)";
mysqli_query($con,$qy);
echo '<script>alert("Registered Successfully");</script>';}
// '$p_id','$name','$password','$gender','$bloodgp','$address'
?>			