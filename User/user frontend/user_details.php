<!DOCTYPE html>
<html>
<head>
<title>pro pic dislay</title>
<!--<style type="text/css">
  #img_div{
    width: 100px;
    
    margin: 15px auto;
    border: 1px solid #cbcbcb;
   }
   img{
    text-align: center;
    float: center;
    margin: 5px;
    width: 90px;
    height: 130px;
   }
</style>-->
</head>

<?php 
require_once '../../Login System/config.php';
//---------------------------------------------

//----------------------------
$sql = "SELECT fname,lname,email,address,job,username FROM user_login WHERE username = '{$_SESSION['username']}' ";

if ($result=mysqli_query($link,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      echo "<h4>";  printf ("%s \n",$row[0]); 
                    printf ("%s \n",$row[1]); echo "</h4> <br>";
      printf ("%s \n",$row[2]); echo "<br>";
      printf ("%s \n",$row[3]); echo "<br>";
      printf ("%s \n",$row[4]); echo "<br>";
      //printf ("%s \n",$row[5]); 
      echo "</h5> <br>";
    }
  // Free result set
  mysqli_free_result($result);
}

$link->close();



?>
