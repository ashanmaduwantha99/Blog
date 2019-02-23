<?php
require_once '../../Login System/config.php';
$sql = "SELECT username,email FROM  user_login ";
mysqli_query($link, $sql);
$result = mysqli_query($link, "SELECT * FROM  user_login  ");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Users</title>

 <style type="text/css">

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
      <h2><b>Members</b></h2>
      <h4>
        You can see the members with there username.
        <br>Also you can contact with them via email<br>
        which we given here.
      </h4>
    </div>
    <div class="col-sm-6">
        <div id="table-wrapper">
        <div id="table-scroll">
        <table class="data-table">
          <th style="text-align: center;">username of the member</th>
          <th style="text-align: center;">email of the member</th>
          <tbody>
          <tr>
            <?php while ($row = mysqli_fetch_array($result)): ?>
              <td style="column-width: 600px;">
                <h4 style="text-align: center;">
                  <?php echo $row['username']  ?>
                </h4>
              </td>
              <td>
                <h4 style="text-align: center;">
                  <?php echo $row['email']  ?>
                </h4>
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