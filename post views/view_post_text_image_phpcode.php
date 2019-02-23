<?php
require_once '../Login System/config.php';
$sql = "SELECT username,post_name, image, image_text FROM post_text_and_image ";
mysqli_query($link, $sql);
$result = mysqli_query($link, "SELECT * FROM post_text_and_image  ");
?>

<!DOCTYPE html>
<html>
<head>
  <title>display</title>

 <style type="text/css">
   #img_div{
    width: 310px;
    margin: 15px auto;
    border: 1px solid black;
    background-color: transparent;
    color: white;
   }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
   img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 170px;
   }
    #table-wrapper {
      position:relative;
    }
    #table-scroll {
      height:700px;
      overflow:auto;  
      margin-top:20px;
    }
</style>
</head>
<body>
  <div class="row" style="height: 800px;">
    <div class="col-sm-4">
      <h2><b>Read and Feel It</b></h2>
        <h4>Would you like to write a post like this</h4>
        <p>You can register our website and then you can post your quote by login to page.</p>
        <a href="http://localhost/project/Blog/Frontend/frontend.php"><button class="button" style="background-color: transparent; border-color: black; width: 100px; height: 50px; color: white;" type="button">Login</button></a>
        <hr>
        <h3>Post about writting quote.</h3>
    </div>
    <div class="col-sm-8">
      <h2>View Post</h2>
        <h4>You can view all post which post by all the users in this site.</h4>
        <div id="table-wrapper">
        <div id="table-scroll">
        <table class="data-table">
          <tbody>
          <tr>
            <?php while ($row = mysqli_fetch_array($result)): ?>
            <td>
              <div class="row">
                <hr>
                 <div class="col-sm-6">
                  <?php  
                  echo "<div id='img_div'>";
                  echo "<img src='http://localhost/project/Blog/User/post/post image text/".$row['image']."'>";
                  echo "</div>"; 
                  ?>
                </div>
                <div class="col-sm-6">
                  <?php echo "<b><u>"; ?>
                  <?php echo $row['post_name']  ?>
                   <?php echo "</b></u>"; ?>
                  <?php echo "<br>";?>
                  <?php echo "<p>".$row['image_text']."</p>"; ?>
                  <?php echo "-"; ?>
                  <?php echo $row['username']  ?>
                </div>
              </div>
            </td>
            </tr>
          <?php endwhile; ?>
          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>
  

</body>


</html>



 


 