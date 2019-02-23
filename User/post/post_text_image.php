<?php
  require_once '../../Login System/config.php';
 
$current_username=$_SESSION['username'];

  $msg = "";
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
    
      // Get text
      $image_text = mysqli_real_escape_string($link, $_POST['image_text']);

      // image file directory --->
    
      $target = "c:/xampp/htdocs/project/Blog/User/post/post image text/". basename($image);
    
      $sql = "INSERT INTO post_text_and_image (username,post_name, image, image_text) VALUES ('$current_username','$post_name','$image', '$image_text')";
      // execute query
      mysqli_query($link, $sql);
    
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
      {
        //$msg = "Image uploaded successfully";
        echo "<script type= 'text/javascript'>alert('Posted successfully');</script>";
      }else{
        //$msg = "Failed to upload image";
        echo "<script type= 'text/javascript'>alert('Not Posted');</script>";
      }
    }
  }
  $result = mysqli_query($link, "SELECT * FROM post_text_and_image WHERE username = '$current_username' ");

?>
