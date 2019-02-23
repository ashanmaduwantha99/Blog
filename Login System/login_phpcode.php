<?php
//include config file
require_once 'config.php';

//define variable and initialize with empty value
$password = "";
$username="";
$usernameErr =""; 
$passwordErr = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $usernameErr = 'Please enter username.';
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $passwordErr = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    
   
    // Validate credentials
   if(empty($usernameErr) && empty($passwordErr)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM  user_login WHERE username = ?";
         //echo $username." ".$password;

        $q1="select * from user_login";
        $r1=mysqli_query($link,$q1);
        $password_matcher=0;
        while ($row1=mysqli_fetch_assoc($r1)) {
            //echo $row1['username']." ".$row1['password'];
            if(($row1['username']==$username)&&(password_verify($password,$row1['password']))){
                //echo "uswename and pass is match!!";
                $password_matcher=1;
                break;
            }
        }

        if($password_matcher==1){
            echo "uswename and pass is match!!";
                            session_start();
                            $_SESSION['username'] = $username;      
                            //header("location: profile.php");
                            header("location: ../User/user frontend/profile.php");
        }else{
            echo "invalid username and password!!";
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>