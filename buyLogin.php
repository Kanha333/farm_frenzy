<?php
error_reporting(0);
    $conn=new mysqli('localhost','aman','aman','farm');
    if(array_key_exists("submit",$_POST)){
        $name = $_POST['name'];
        $district = $_POST['district'];
        $state = $_POST['state'];
        $contact = $_POST['contact'];
        $aadhaar = $_POST['aadhaar'];
        $user_id = $_POST['user_id'];
        $password = $_POST['password'];
        $hash=password_hash($password,PASSWORD_DEFAULT);
        $query1 = "SELECT user_id FROM buyerdata";
        $result = mysqli_query($conn,$query1);
        //$array = mysqli_fetch_array($result);
        /*$flag = false;
        while($row = mysqli_fetch_array($result)){
            if($row['User_id']===$user_id){
                $flag = true;
                break;
            }
        }*/

        if(mysqli_num_rows($result)>0){
            echo"This user_id has been taken. Please enter a new userid";
        }
        else{


            $query = "INSERT INTO buyerdata VALUES('$name','$district','$state','$contact','$aadhaar','$user_id','$hash')";

            if($conn){
                echo"Connection established";
                if(mysqli_query($conn,$query)){
                    echo"records submitted";
                }
            }else{
                    echo"records submission unsuccessful";
                }
            }
    }

?>

<html>
<head>  
</head>
<body>
    <form action="" method="post">
    Name : <input type="text" name="name"><br>
    District : <input type="text" name="district"><br>
    State : <input type="text" name="state"><br>
    Contact : <input type="number" name="contact"><br>
    Aadhaar :<input type="number" name="aadhaar"><br>
    User_Id :<input type="text" name="user_id"><br>
    Password :<input type="password" name="password"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>