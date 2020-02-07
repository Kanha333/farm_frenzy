<?php
$conn = mysqli_connect("localhost","aman","aman","farm");
$quantity = $_POST['quantity'];
$query = "SELECT * FROM tablename WHERE quantity >= '$quantity'";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result)){
    echo $row['name']." ".$row['contact']." ".$row['amount']." ".$row['district']." ".row['state'];
}



?>