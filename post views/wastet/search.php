<!DOCTYPE html>
<html>
<head>
  <title>Search Post</title>
<style type="text/css">
    table {
      margin: auto;
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      font-size: 18px;
      text-align: center;
    }

    table td {
      transition: all .5s;
    }
    th{
      text-align: center;
      padding: 5px;
      color: white;
    }
    
    #table-wrapper {
      position:relative;
    }
    #table-scroll {
      height:200px;
      overflow:auto;  
      margin-top:20px;
    }
  </style>
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

<form action="search.php" method="post">
  <div class="col-sm-3" >
  <input type="text" name="valueToSearch" class="form-control" placeholder="search by name">
  <input type="submit" name="search" class="btn btn-primary" value="Search">
  </div>
  <div class="col-sm-9">
    <div id="table-wrapper">
    <div id="table-scroll">
    <table>
      <tr>
        <th>Post name</th>
        <th>Post</th>
        
        
      </tr>
      <?php while($row = mysqli_fetch_array($search_result)) : ?>
      <tr>
        <td><?php echo $row['posttext_name'] ?></td>
        <td><?php echo $row['posttext'] ?></td>
        
      </tr>
      <?php 
      endwhile; 
      ?>
    </table>
    </div>
  </div>
</div>
  </form>

</body>
</html>

