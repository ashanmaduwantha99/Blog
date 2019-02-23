<?php 
require_once '../Login System/config.php'; 
?>
<?php
$sql = "SELECT username, posttext_name, posttext FROM post ";
$query = mysqli_query($link,$sql);
if(!$query){
  die('SQL Error:' . mysql_error($link));
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>display</title>

 <style type="text/css">

    .data-table{
      column-width: 600px;
    }

    #table-wrapper {
      position:relative;

    }
    #table-scroll {
      height:500px;
      overflow:auto;  
      margin-top:20px;
    }
    #post{
      background-color: red;
    }
</style>
</head>
<body>
  <div class="container">
     <div class="row">
      <div class="col-sm-6">
        <h2><b>Read and Feel It</b></h2>
        <h4>Would you like to write a post like this</h4>
        <p>You can register our website and then you can post your quote by login to page.</p>
        <a href="http://localhost/project/Blog/Frontend/frontend.php"><button class="button" style="background-color: transparent; border-color: black; width: 100px; height: 50px; color: white;" type="button">Login</button></a>
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
             <?php while ($row = mysqli_fetch_array($query)): ?>
              <tr>    
                  <td>
                    <pre style="background-color: transparent; border-color: brown; font-size: 18px; color: white; ">
                      <?php echo "<b>"; ?>
                      <?php echo $row['posttext_name'];?>
                      <?php echo "</b>"; ?> <br>
                      <?php echo $row['posttext']; ?><br>
                      <?php echo $row['username']; ?><br>
                  </pre>
                </td>    
              </tr>
              <?php endwhile; ?>
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>


 