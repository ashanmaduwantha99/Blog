<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
   
    mysql_select_db("blog") or die(mysql_error());
?>

<form action="search2.php" method="POST">
    <input type="text" name="valueToSearch" />
    <input type="submit" name="search" value="Search" />
</form>
<?php
if(isset($_POST['search']))
{
  $valueToSearch = $_POST['valueToSearch'];
  $query = "SELECT * FROM post WHERE posttext_name = '$valueToSearch' ";
  
  
  if(mysql_num_rows($query) > 0)
  { // if one or more rows are returned do following
             
    while($results = mysql_fetch_array($query)){
             
     echo "<p><h3>".$results['posttext_name']."</h3>".$results['posttext']."</p>";
     
  }
}
else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "no words to search ";
    }
?>


