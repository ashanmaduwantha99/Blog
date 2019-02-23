<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
   
    mysql_select_db("blog") or die(mysql_error());
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"" method="post">
    <input type="text" name="query">
    <input type="submit" value="Search">
</form>

<?php
if (empty(isset($_POST['query']))) 
{
echo "enter a name for search, otherwise you can view your latest post by just click search button ";
$raw_results = 0;
return $raw_results;
    }else{ 
      $query = $_POST['query'];
      $raw_results = mysql_query("SELECT * FROM post WHERE posttext_name = '$query' ") ;
      if(mysql_num_rows($raw_results) > 0)
      { 
        /*while($results = mysql_fetch_array($raw_results))
        {
         echo "<p><h3>".$results['posttext_name']."</h3>".$results['posttext']."</p>";
        }*/
        $results = mysql_fetch_array($raw_results);
        echo "<p><h3>".$results['posttext_name']."</h3>".$results['posttext']."</p>";    
      }
      else{ 
          echo "No results";
          
        }
    }   
    
?>