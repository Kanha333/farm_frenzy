<?php
    $conn = mysqli_connect("localhost","aman","aman","farm");
        $mobile= mysqli_real_escape_string($conn,$_POST['mobile']);
        $password= mysqli_real_escape_string($conn,$_POST['Password']);
$role=$_POST['role'];
        if($role==='Farmer'){
        $query = "SELECT * FROM farmdata WHERE contact = '$mobile'";   

        $res=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($res);
        if($mobile==$row['Contact']){
            if(password_verify($password,$row['password'])){
                echo"success";
               
               session_start();
               $_SESSION['user']  =  $row['Contact'];
                setcookie("cookie",$mobile,time()+60*60*24);
                header("location:profile.php");
            }
            else{
                echo"<p>Wrong password. Please try again!!</p>";
            }
        }
          else{
        echo"<p>Invalid number. Please try again!!</p>";
    }  
            
        }
        
else{
 $query = "SELECT * FROM buyerdata WHERE contact = '$mobile'";   

        $res=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($res);
        if($mobile==$row['Contact']){
            if(password_verify($password,$row['Password'])){
                echo"success";
               
               session_start();
               $_SESSION['user']  =  $row['Contact'];
                setcookie("cookie",$mobile,time()+60*60*24);
                header("location:profile2.php");
            }
            else{
                echo"<p>Wrong password. Please try again!!</p>";
            }
            
            
        }

    else{
        echo"<p>Invalid number. Please try again!!</p>";
    }
}

    
?>
