<?php require_once 'post_image.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>display</title>

 <style type="text/css">
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 250px;
   }
    #table-wrapper {
      position:relative;
    }
    #table-scroll {
      height:300px;
      overflow:auto;  
      margin-top:10px;
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
			        	echo "<img src='http://localhost/project/Blog/User/post/post image/".$row['post_image']."' >";
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


 