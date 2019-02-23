<?php
require_once '../../Login System/config.php';
$sql = "SELECT username,post_name, post_image FROM  post_image ";
mysqli_query($link, $sql);
$result = mysqli_query($link, "SELECT * FROM  post_image  ");
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
    <div class="col-sm-6">
      <h2><b>Read and Feel It</b></h2>
        
        <hr>
        <h3>Post about writting quote.</h3>
    </div>
    <div class="col-sm-6">
      <h2>View Post</h2>
        <h4>You can view all post which post by all the users in this site.</h4>
        <div id="table-wrapper">
        <div id="table-scroll">
        <table class="data-table">
          <tbody>
          <tr>
            <?php while ($row = mysqli_fetch_array($result)): ?>
            <td style="column-width: 600px;">
              <div class="row">
                <div class="col-sm-10">
                <hr>
                  <h4 style="text-align: center;">
                  <?php echo $row['post_name']  ?>
                 </h4>
                  <?php  
                  echo "<div id='img_div'>";
                  echo "<img src='http://localhost/project/Blog/User/post/post image/".$row['post_image']."'>";
                  echo "</div>"; 
                  ?>
                  <h4 style="text-align: center;">
                  <?php echo "-"; ?>
                  <?php echo $row['username']  ?>
                 </h4>
                  
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



 


 