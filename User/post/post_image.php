<?php
  require_once '../../Login System/config.php';
//---------------------------------------------------------

$current_username=$_SESSION['username'];
$post_name = "";
//--------------------------------------------------------
if (isset($_POST['upload'])) {

if(empty(trim($_POST["post_name"]))){
        //$posttextErr = "Please enter a your post.";
        echo "Not posted";
    }else{
      $post_name = trim($_POST["post_name"]);
      
      // Get image name
      $image = $_FILES['image']['name'];
    
      // image file directory --->
    
      $target = "c:/xampp/htdocs/project/Blog/User/post/post image/". basename($image);
    
      $sql = "INSERT INTO post_image (username,post_name, post_image) VALUES ('$current_username','$post_name','$image')";
      // execute query
      mysqli_query($link, $sql);
    
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
      {
        echo "<script type= 'text/javascript'>alert('Posted successfully');</script>";
      }else{
        echo "<script type= 'text/javascript'>alert('Posted unsuccessfully');</script>";
      }
    }
  }
  $result = mysqli_query($link, "SELECT * FROM post_image WHERE username = '$current_username' ");
  
  //----------





 //------------------------------------------------------------
/*$current_username=$_SESSION['username'];

  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	
    // Get image name
  	$image = $_FILES['image']['name'];
  	
    // image file directory --->
    
    $target = "c:/xampp/htdocs/project/Blog/User/post/post image/". basename($image);
    
    $sql = "INSERT INTO post_image (username, post_image) VALUES ('$current_username','$image')";
  	// execute query
  	mysqli_query($link, $sql);
    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
    {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
  $result = mysqli_query($link, "SELECT * FROM post_image WHERE username = '$current_username' ");
  */
  //---------------------------------------------------------------
?>
