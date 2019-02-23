<?php 
require_once '../../Login System/config.php'; 
$current_username=$_SESSION['username'];
?>

<?php 
//---------------------fname update------------------
if(isset($_POST["fname_submit"]))
{
	$fname=$_POST['fname'];
	 
$q1= "update user_login set fname='$fname' where username = '$current_username' ";

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

<?php 
//---------------------lname update------------------
if(isset($_POST["lname_submit"]))
{
	$lname=$_POST['lname'];
	 
$q1= "update user_login set lname='$lname' where username = '$current_username' ";

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

<?php /*
//---------------------email update------------------ 
if(isset($_POST["email_submit"]))
{
	$email=$_POST['email'];
	 
$q1= "update user_login set email='$email' where username = '$current_username' ";

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

<?php
//---------------------address update------------------ 
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

<?php
//--------------job update-------------------- 
if(isset($_POST["job_submit"]))
{
	$job=$_POST['job'];
	
	 
$q1= "update user_login set job='$job' where username = '$current_username' ";

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

<?php
//---------tele num update----------------------- 
if(isset($_POST["tele_num_submit"]))
{
	$tele_num=$_POST['tele_num'];
	 
$q1= "update user_login set tele_num='$tele_num' where username = '$current_username' ";

if(mysqli_query($link,$q1)){
	echo "OK";
	echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
	
}else{
	//echo "error".mysqli_error($link);
	echo "<script type= 'text/javascript'>alert('Error: " . $q1 . "<br>" . $link->error."');</script>";
}

$link->close();
}
*/?>