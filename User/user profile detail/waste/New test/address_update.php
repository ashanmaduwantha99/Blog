<?php 
require_once '../../Login System/config.php'; 
$current_username=$_SESSION['username'];
?>

<?php 
//---------------------fname update------------------
if(isset($_POST["address_submit"]))
{
	$address=$_POST['address'];
	 
$q1= "update user_login set address='$address' where username = '$current_username' ";

if(mysqli_query($link,$q1)){
	echo "OK";
	echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
	
}else{
	//echo "error".mysqli_error($link);
	echo "<script type= 'text/javascript'>alert('Error: " . $q1 . "<br>" . $link->error."');</script>";
}

$link->close();
}
?>
