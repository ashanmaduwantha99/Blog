<?php
require_once '../../Login System/config.php';
 
$current_username=$_SESSION['username'];
$posttext = $posttext_name = "";

if (isset($_POST['post'])) {
//--------------------------------------------------------------
	if(empty(trim($_POST["posttext_name"]))&& empty(trim($_POST["posttext"])) ){
        //$posttextErr = "Please enter a your post.";
        echo "Not posted";
    }else{
    	$posttext = trim($_POST["posttext"]);
		$posttext_name = trim($_POST["posttext_name"]);
		$sql = "INSERT INTO post (username,posttext_name,posttext) VALUES('$current_username','$posttext_name','$posttext')";

		if(mysqli_query($link,$sql)){
			//echo "OK";
			echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
			//header("location: ../user frontend/profile.php");

		}else{
			//echo "error".mysqli_error($link);
			echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $link->error."');</script>";
		}

		$link->close();
		
		}

//------------------------------------------------------------------------------
	/*if(empty(trim($_POST["posttext"]))){
        //$posttextErr = "Please enter a your post.";
        echo "Not posted";
    }else{
		$posttext = trim($_POST["posttext"]);
		$sql = "INSERT INTO post (username,posttext) VALUES('$current_username','$posttext')";

		if(mysqli_query($link,$sql)){
			//echo "OK";
			echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
			//header("location: ../user frontend/profile.php");

		}else{
			//echo "error".mysqli_error($link);
			echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $link->error."');</script>";
		}

		$link->close();
		
		}*/
//------------------------------------------------------------------------------------------------		
}
?>

