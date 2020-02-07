<?php
//error_reporting(0);
include("customerElements.php");
$conn=mysqli_connect('localhost','aman','aman','farm');
$user = $_SESSION['user'];
$crops=$_POST['crops'];
$_SESSION['crops']=$crops;
$query = "SELECT * FROM crop WHERE crops ='$crops'";
$result = mysqli_query($conn,$query);
//$array = mysqli_fetch_array($result);




?>
<!DOCTYPE HTML>
<html>
<head>
    <style>
        table{
            border:2px solid black;
            margin-top:15px;
           
        } 
     h1{
            color:red;
            margin-top: 50px;
            margin-left: 600px;
        }
       tr th{
             background:#192bcd;
            color:white;
            font-size: 20px;
        }
        td{
            padding: 10px;
        }
        tr:hover{
            background: #f5f5f5;
        }
    </style>
    </head>
    <body>
        <h1>Farmers around me</h1>
        <table name="resp" border="4" align="center">
        <thead style="font-size:20px; color:white;">
            <tr>
              
              <th >Name</th>
              <th>District</th>
              <th>State</th>
                <th>Contact</th>
                <th>Quantity(in kg)</th>
               <!-- <th>Potato</th>
                <th>Tomato</th>
                <th>Onion</th>
                <th>Green Peas</th>
                <th>Brinjal</th>-->
            </tr>
          </thead>
  <tbody>
    <?php
    while($result1 = mysqli_fetch_array($result)){
        //$user = $result1['user_id'];
        $quantity = $result1['cropAmount'];
        $cont = $result1['contact'];
        $query2 = "SELECT * FROM farmdata WHERE Contact = '$cont'";
        $result2 = mysqli_query($conn,$query2);
        $array2 = mysqli_fetch_array($result2);
        $name = $array2['Name'];
        $district = $array2['District'];
        $state = $array2['State'];
        $contact = $array2['Contact'];
        //$quantity = $array2['cropAmount'];
        /*$item1 = $array2['potato'];
        $item2 = $array2['tomato'];
        $item3 = $array2['onion'];
        $item4 = $array2['green_peas'];
        $item5 = $array2['brinjal'];*/
    echo "<tr><td>{$name}&nbsp;{$array2['lastName']}</td><td>{$district}</td><td>{$state}</td><td>{$contact}</td><td>{$quantity}</td></tr>";
    }
      
      
    /*$query = "SELECT * FROM farmdata WHERE District<>'Patna' AND State = 'Bihar'";
    $result = mysqli_query($conn,$query);
      
    while($result1 = mysqli_fetch_array($result)){
    $user = $result1['user_id'];
    $district = $result1['District'];
    $state = $result1['State'];
    $contact = $result1['Contact'];
        
    $query2 = "SELECT * FROM produce WHERE user_id = '$user'";
    $result2 = mysqli_query($conn,$query2);
    $array2 = mysqli_fetch_array($result2);
    /*$item1 = $array2['potato'];
    $item2 = $array2['tomato'];
    $item3 = $array2['onion'];
    $item4 = $array2['green_peas'];
    $item5 = $array2['brinjal'];*/
    /*echo "<tr><td>{$result1['Name']}</td><td>{$district}</td><td>{$state}</td><td>{$contact}</td></tr>";
      
    $query = "SELECT * FROM farmdata WHERE State<>'Bihar'";
    $result = mysqli_query($conn,$query);
      
    while($result1 = mysqli_fetch_array($result)){
    $user = $result1['user_id'];
    $district = $result1['District'];
    $state = $result1['State'];
    $contact = $result1['Contact'];
        
    $query2 = "SELECT * FROM produce WHERE user_id = '$user'";
    $result2 = mysqli_query($conn,$query2);
    $array2 = mysqli_fetch_array($result2);
    /*$item1 = $array2['potato'];
    $item2 = $array2['tomato'];
    $item3 = $array2['onion'];
    $item4 = $array2['green_peas'];
    $item5 = $array2['brinjal'];*/
    /*echo "<tr><td>{$result1['Name']}</td><td>{$district}</td><td>{$state}</td><td>{$contact}</td></tr>";
    }*/
    ?>
    </tbody>
        </table>
    </body>
</html>