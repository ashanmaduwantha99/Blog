<?php 
session_start();
include 'login_phpcode.php' 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>LMS Login</title>
  <?php include '../Templet/Boostrap/boostrap.php'; ?>
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/project/Blog/Templet/CSS/frontend.css"> 
</head>

<body>
<?php include '../Templet/Navigation/frontend_navigation.php'; ?>
<div class="container-home" style="background-image:url(http://localhost/project/Blog/Images/img2.png); background-positon:50% 50%; background-attachment:fixed; background-repeat:no-repeat; background-size:cover;">
        <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <br><br><br><br>
                <hr>   
            </div>
            <div class="col-md-4 text-center">
                <br><br>
                <?php include 'login_form.php'; ?>  
            </div>
            <div class="col-md-4 text-center">
                <br><br><br><br>
                <hr>  
            </div>
        </div>
        </div>
       

    </div>
<!-- Footer -->
<?php include '../Templet/Footer/footer.php'; ?>
</body>
</html>