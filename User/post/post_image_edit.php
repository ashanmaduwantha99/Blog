<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    mysql_select_db("blog") or die(mysql_error());
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"" method="post">
    <div class="form-group">
    <input type="text" name="query" class="form-control" placeholder="search by post name" style="width: 200px;">
    <span class="help-block"></span>
    <input type="submit" class="btn btn-primary" value="Search">
    <span class="help-block"></span>
    <br>

<?php
//---------------------------------------------Searching[using session]-----------------------------------------
if (empty(isset($_POST['query']))) 
{
echo "<b>Enter a name for search.
      <br>In here you can change your post name only, cannot update a photo.<br>
      So If you wanna update photo you have to delete your post and published it again with your<br>
       new Photo.</b> ";
echo "<hr>";
$raw_results = 0;
return $raw_results;
    }else{ 
      $query = $_POST['query'];
      $raw_results = mysql_query("SELECT * FROM post_image WHERE post_name = '$query' ") ;
      if(mysql_num_rows($raw_results) > 0)
      { 
        $results = mysql_fetch_array($raw_results);
        echo "<script type= 'text/javascript'>alert('Searching ok');</script>";
        //echo "<p><h3>".$results['posttext_name']."</h3>".$results['posttext']."</p>";
        //echo $results['0'];
        $id = $results['0'];
        
        $_SESSION['post_id'] = $id;
      }
      else{ 
          //echo "<script type= 'text/javascript'>alert('No reacords');</script>";
          $results = 0;
          echo "No post on that name";
        }
    }   
?>

<h5><b><u>Search Result</u></b></h5>
<label>Post Name</label>
<input type="text" name="edit_posttext_name" class="form-control" value="<?php echo($results['2']) ?>" style="width: 200px;">
<span class="help-block"></span>

<input type="submit" name="edit" class="btn btn-primary" value="Re-Post">
<input type="reset" class="btn btn-primary" value="Clear">
<input type="submit" name="delete" class="btn btn-primary" value="Delete Post">

</div>
</form>
</body>
</html>

<?php
//---------------------------------------------Updating-------------------------------------------------
if(isset($_POST["edit"]))
{
  $edit_posttext_name=$_POST['edit_posttext_name'];
  
  
  $sql = "UPDATE post_image SET post_name = '$edit_posttext_name' WHERE id = '{$_SESSION['post_id']}' ";

  if(mysqli_query($link,$sql)){
  echo "Updated";
  echo "<script type= 'text/javascript'>alert('Update successfully');</script>";
  }else{
  //echo "error".mysqli_error($link);
    echo "Not Updated";
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $link->error."');</script>";
  }
}

?>

<?php

//---------------------------------------------Updating-------------------------------------------------
if(isset($_POST["delete"]))
{
  $sql = "DELETE FROM post_image WHERE id = '{$_SESSION['post_id']}' ";

  if(mysqli_query($link,$sql)){
  echo "Deleted";
  echo "<script type= 'text/javascript'>alert('Deleted successfully');</script>";
  }else{
  //echo "error".mysqli_error($link);
    echo "Not Deleted";
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $link->error."');</script>";
  }
}

?>