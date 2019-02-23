<?php
  // Initialize message variable
  $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	
    // Get image name
  	$image = $_FILES['image']['name'];
  	
    // Get text
  	$image_text = mysqli_real_escape_string($link, $_POST['image_text']);

  	// image file directory --->
    $target = "c:/xampp/htdocs/project/Blog/User/profile pictures/ ". basename($image);
    //-------end comment----
    $sql = "UPDATE user_login SET username = '{$_SESSION['username']}', image = '$image', image_text = '$image_text' WHERE username = '{$_SESSION['username']}' " ;
    
  	mysqli_query($link, $sql);
    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
    {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
  $result = mysqli_query($link, "SELECT * FROM user_login WHERE username = '{$_SESSION['username']}'");
?>