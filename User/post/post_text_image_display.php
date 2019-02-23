<?php require_once 'post_text_image.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>display</title>

 <style type="text/css">
   #img_div{
   	width: 500px;
   	padding: 5px;
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
      height:300px;
      overflow:auto;  
      margin-top:20px;
    }
</style>
</head>
<body>
	<div id="table-wrapper">
    <div id="table-scroll">
		<table class="data-table">
      <tr>
        <th style="column-width: 100px;">Post Name</th>
        <th style="column-width: 100px;">Post</th>
      </tr>
			<tbody>
			<tr>
        <?php while ($row = mysqli_fetch_array($result)): ?>
        <td>
          <?php echo $row['post_name']  ?>
        </td>
        <td>
          <?php echo "<div id='img_div'>";
                echo "<img src='http://localhost/project/Blog/User/post/post image text/".$row['image']."' >";
                echo "<p>".$row['image_text']."</p>";
                echo "</div>";  
          ?>
        </td>
        </tr>
      <?php endwhile; ?>
			</tbody>
		</table>
	</div>
	</div>

</body>


</html>



 


 