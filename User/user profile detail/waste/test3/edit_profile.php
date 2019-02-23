<?php session_start();
if(!isset($_SESSION['username']))
  {
    echo "error session";
  }  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>My Templet</title>
	<?php include '../../Templet/Boostrap/boostrap.php'; ?>
	<link rel="stylesheet" type="text/css" href="http://localhost/project/Blog/Templet/CSS/user_frontend.css">
</head>
<body>

<?php include '../../Templet/Navigation/profile_navigation.php'; ?>

<div class="container-home" style="background-image:url(http://localhost/project/Blog/Images/img2.png); background-positon:50% 50%; background-attachment:fixed; background-repeat:no-repeat; background-size:cover;">
	<div class="container">
		<br><br><br><br>
		<h3>Edit your profile</h3>
		<hr>

<?php require_once '../../Login System/config.php'; ?>
<?php
$sql = "SELECT fname,lname,email,address,job,tele_num FROM user_login WHERE username = '{$_SESSION['username']}' ";
?>
<?php
if ($result=mysqli_query($link,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result)):	?>
   
<div class="row">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	<div class="col-sm-4">
		<label>First Name:</label>
		<?php echo "$row[0]"; ?><br><br><br>
		
		<label>Last Name:</label>
		<?php echo "$row[1]"; ?><br><br>
<!--
		<label>Email:</label>
		<?php echo "$row[2]"; ?><br><br><br>

		<label>Address:</label>
		<?php echo "$row[3]"; ?><br><br>

		<label>Job:</label>
		<?php echo "$row[4]"; ?><br><br><br>

		<label>Mobile Number:</label>
		<?php echo "$row[5]"; ?><br><br>-->
	</div>
	<div class="col-sm-4">
		<input type="text" name="fname" id="fname" class="form-control" placeholder="Update Your First name"><br>
		<input type="text" name="lname" id="lname" class="form-control" placeholder="Update Your Last name"><br>
	<!--	<input type="text" name="email" id="email" class="form-control" placeholder="Update Your Email"><br>
		<input type="text" name="fname" id="fname" class="form-control" placeholder="Update Your Address"><br>
		<input type="text" name="fname" id="fname" class="form-control" placeholder="Update Your Job"><br>
		<input type="text" name="fname" id="fname" class="form-control" placeholder="Update Your Mobile Number"><br>
	-->
	</div>
	<div class="col-sm-4">
		<input type="submit" name="fname_submit" value="Update">
		<?php //include 'fname_update.php'; ?>
		<?php //include 'edit_profile_phpcode.php'; ?><br><br><br>
		
		<input type="submit" name="lname_submit" value="Update">
		<?php include 'edit_profile_phpcode.php'; ?><br><br>
		<!--
		<input type="submit" name="email_submit" value="Update">
		<?php include 'edit_profile_phpcode.php'; ?><br><br><br>
		
		<input type="submit" name="address_submit" value="Update">
		<?php include 'edit_profile_phpcode.php'; ?><br><br>
		
		<input type="submit" name="job_submit" value="Update">
		<?php include 'edit_profile_phpcode.php'; ?><br><br>
		
		<input type="submit" name="tele_num_submit" value="Update">
		<?php include 'edit_profile_phpcode.php'; ?><br><br>
	-->	

	</div>
</form>

	

<hr>
</div>

<?php
endwhile;
 // mysqli_free_result($result);
}
//$link->close();
?>

</div>
</div>
<?php include '../../Templet/Footer/footer.php'; ?>
</body>
</html>



