<?php
$link = mysql_connect("localhost", "root", "");
mysql_select_db("blog", $link);
//require_once '../Login System/config.php';
$result = mysql_query("SELECT * FROM post", $link);
$num_rows = mysql_num_rows($result);
//echo "$num_rows Rows\n";
?>
<span class="dot" 
   style="
height: 80px;
width: 80px;
background-color: brown;
border-radius: 50%;
border-style: solid;
border-color: white;
display: inline-block;">
<h4 style="text-align: center; font-size: 20px; padding-top: 20px; color: white;"><?php echo "$num_rows"; ?></h4>
</span>
        
                    
