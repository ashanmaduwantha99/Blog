<?php
require_once '../../Login System/config.php';
require_once 'update_pro_pic_phpcode.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>pro card</title>

<style type="text/css">
	#content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   
   #img_div{
   	width: 150px;
    height: 220px;
   	
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 140px;
   	height: 210px;
   }
</style>

</head>
<body>

</body>
</html>
<?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='http://localhost/project/Blog/User/profile pictures/ ".$row['image']."' >";
        //echo "<img src='".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>