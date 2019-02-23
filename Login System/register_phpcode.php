<?php

require_once 'config.php';
if(isset($_POST["submit"]))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$job=$_POST['job'];
	$tele_num=$_POST['tele_num'];

	$current_username=$_SESSION['username']; 


$q1= "update user_login set fname='$fname',lname='$lname',email='$email',address='$address',job='$job',tele_num='$tele_num' where username='$current_username'";
//--------------------------------------------

//-----------------------------------------

if(mysqli_query($link,$q1)){
	//echo "OK";
	echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
	//recently added this, for combination
	
	//header("location: ../user profile/welcome.php");
	 header("location: ../User/user frontend/profile.php");
}else{
	//echo "error".mysqli_error($link);
	echo "<script type= 'text/javascript'>alert('Error: " . $q1 . "<br>" . $link->error."');</script>";
}

$link->close();
}
?>