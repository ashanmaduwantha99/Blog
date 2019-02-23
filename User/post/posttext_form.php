<?php include 'posttext.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>PostText</title>
</head>
<body>
	

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"" method="post">
            
            <div class="form-group">
                <label>Post Name</label>
                
                <input type="text" style="width: 200px" id="posttext_name" name="posttext_name" class="form-control" value="<?php echo $posttext_name; ?>">
                <span class="help-block"></span>
            </div>    
            
            <div class="form-group">
                <label>Post</label>
                <textarea style="width: 400px; height: 200px;" name="posttext" class="form-control" value="<?php echo $posttext; ?>"></textarea>
                <!--
                <input type="text" id="posttext" name="posttext" class="form-control" value="<?php echo $posttext; ?>">
                -->
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <input type="submit" name="post" class="btn btn-primary" value="post">
                <input type="reset" name="reset_form" class="btn btn-primary" value="clear" onClick="clearform();" >
            </div>     
</form>
<hr>
</body>
</html>


