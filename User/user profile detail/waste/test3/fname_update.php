<?php 
$current_username=$_SESSION['username'];
$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
if($link===false){
	die("Error, could not connect " . mysqli_connect_error());
}


//---------------------fname update------------------
if(isset($_POST["fname_submit"]))
{
	$fname=$_POST['fname'];
	 
$q1= "update user_login set fname='$fname' where username = '$current_username' ";

if(mysqli_query($link,$q1)){
	echo "Update Your Name";
}else{
	echo "<script type= 'text/javascript'>alert('Error: " . $q1 . "<br>" . $link->error."');</script>";
}

$link->close();
}
?>