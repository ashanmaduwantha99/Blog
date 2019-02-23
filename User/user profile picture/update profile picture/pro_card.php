<?php
require_once 'upload_pro_pic.php';
?>
<?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='http://localhost/project/Blog/User/profile pictures/ ".$row['image']."' >";
        //echo "<img src='".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>