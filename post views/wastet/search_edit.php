<!DOCTYPE html>
<html>
<head>
<title>Search Post</title>
</head>
<body>

<?php
if(isset($_POST['search']))
{
  $valueToSearch = $_POST['valueToSearch'];
  $query = "SELECT * FROM post WHERE (posttext_name = '$valueToSearch')";
  $search_result = filterTable($query);
}else{
  $query = "SELECT * FROM post";
  $search_result = filterTable($query);
}

function filterTable($query) 
{
    require_once '../Login System/config.php';
    $filter_Result = mysqli_query($link,$query);
    return $filter_Result;
}

?>

<form action="search_edit.php" method="post">
  
  <input type="text" name="valueToSearch" class="form-control" placeholder="search by name">
  <input type="submit" name="search" class="btn btn-primary" value="Search">
  <br>

  <?php while($row = mysqli_fetch_array($search_result)) : ?>
  
  <input type="text" name="edit_post_name" class="form-control" placeholder="search by name" value=" <?php echo $row['posttext_name'] ?>">
  <textarea name="edit_post" style="width: 250px; height: 150px;">
  <?php echo $row['posttext'] ?>
  </textarea>  

  <?php endwhile; ?>
  
</form>

</body>
</html>

