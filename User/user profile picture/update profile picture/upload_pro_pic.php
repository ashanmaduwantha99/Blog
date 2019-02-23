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
  <link rel="stylesheet" type="text/css" href="http://localhost/project/Blog/Templet/CSS/frontend.css">
  <link rel="stylesheet" type="text/css" href="display_pro_pic_phpcode.css">
</head>

<body>

<?php include '../../Templet/Navigation/profile_navigation.php'; ?>

<br><br><br><br><br>

<div id="content">

  <?php include 'display_pro_pic_phpcode.php' ; ?>
  
  <?php include 'display_pro_pic_form.php' ; ?>
  
</div>
</body>
</html>