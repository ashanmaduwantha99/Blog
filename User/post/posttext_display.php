<?php //require_once '../../Login System/config.php'; 
$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
if($link===false){
  die("Error, could not connect " . mysqli_connect_error());
}
?>

<?php
$sql = "SELECT id, posttext_name, posttext FROM post WHERE username = '{$_SESSION['username']}'";
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
    #table-wrapper {
      position:relative;

    }
    #table-scroll {
      height:250px;
      overflow:auto;  
      margin-top:20px;
    }
    #post{
      background-color: red;
    }
</style>
</head>
<body>
	<div id="table-wrapper">
    <div id="table-scroll">
		<table class="data-table">
      <tr>
        <th style="column-width: 100px;">Id</th>
        <th style="column-width: 100px;">Post Name</th>
        <th style="column-width: 100px;">Post</th>
      </tr>

			<tbody>
			 <?php while ($row = mysqli_fetch_array($query)): ?>
        <tr>    
            <td>
              <?php echo $row['id']; ?>
            </td>
            <td>
              <?php echo $row['posttext_name']; ?>
            </td>
            <td>
            <pre style="background-color: transparent; text-align: justify; width: 300px;">
            <?php echo $row['posttext']; ?>  
            </pre>
            </td>    
        </tr>
        <?php endwhile; ?>
      </tbody>
		</table>
	</div>
	</div>

</body>
</html>


 