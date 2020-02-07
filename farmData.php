<?php
//error_reporting(0);
    include("farmer.php");
    $conn=mysqli_connect('localhost','aman','aman','farm');
        $name = $_POST['fname'];
        $lname = $_POST['lname'];
        $district = $_POST['cities'];
        $state = $_POST['state'];
        $contact = $_POST['contact'];
        $aadhaar = $_POST['aadhaar'];
        $role = $_POST['role'];
        $user_id = "farmer";
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $hash=password_hash($password,PASSWORD_DEFAULT);
      /*  $query1 = "SELECT user_id FROM farmdata WHERE user_id='".mysqli_real_escape_string($conn,$user_id)."'";
        $result = mysqli_query($conn,$query1);
        
        if(mysqli_num_rows($result)>0){
            echo"This user_id has been taken. Please enter a new userid";
        }

        else{*/

if($role==='Farmer'){
            $query = "INSERT INTO farmdata VALUES('$name','$lname','$district','$state','$contact','$aadhaar','$user_id','$hash')";
}
else{
 $query = "INSERT INTO buyerdata VALUES('$name','$lname','$district','$state','$contact','$aadhaar','$user_id','$hash')";   
}
                if(mysqli_query($conn,$query)){
                    echo"<script type='text/javascript'>alert('records submitted')</script>";
                }
            else{
                    echo"<script type='text/javascript'>alert('records submission unsuccessful')</script>";
                }
        //    }
    

?>

