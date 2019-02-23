<?php session_start();
if(!isset($_SESSION['username']))
  {
    echo "error session";
  }  
 ?>

<?php
require_once '../../Login System/config.php';
?>

<?php include 'update_pro_pic_phpcode.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Image Upload</title>
  <link rel="stylesheet" type="text/css" href="profile_picture_upload.css">
  <?php include '../../Templet/Boostrap/boostrap.php'; ?>
  <link rel="stylesheet" type="text/css" href="http://localhost/project/Blog/Templet/CSS/user_frontend.css">
  
  <link rel="stylesheet" type="text/css" href="display_pro_pic.css">

</head>

<body>
<?php include '../../Templet/Navigation/profile_navigation_home.php'; ?>

<div class="container-home" style="background-image:url(http://localhost/project/Blog/Images/img2.png); background-positon:50% 50%; background-attachment:fixed; background-repeat:no-repeat; background-size:cover;">
  
  <div id="content">
    <br><br><br><br>
    <?php include 'display_pro_pic_phpcode.php' ; ?>
    
    <?php include 'display_pro_pic_form.php' ; ?>
    
  </div>

</div>

<?php include '../../Templet/Footer/footer.php'; ?>

</body>
</html>