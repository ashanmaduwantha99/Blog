<?php include 'post_text_image.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>

</head>
<body>
<div id="content">
  <?php
    /*while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<img src='http://localhost/project/Blog/User/post/post image text/".$row['image']."' >";
        //echo "<img src='".$row['image']."' >";
        echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }*/
  ?>
  <form method="POST" action="post_text_image_view.php" enctype="multipart/form-data">
    <div class="form-group">
      <label>Post Name :</label><br>
      <input type="text" style="width: 200px" id="post_name" name="post_name" class="form-control" value="<?php echo $post_name; ?>">
    </div>

    <div class="form-group">
      <input type="hidden" name="size" value="1000000">
    </div>

    <div class="form-group">
      <input type="file" name="image">
    </div>

    <div class="form-group" class="form-control">
      <textarea 
        id="text" 
        cols="40" 
        rows="4" 
        name="image_text" 
        placeholder="Say something about this image..."></textarea>
    </div>

    <span class="help-block"></span>
    
     <div class="form-group">
      <button type="submit" name="upload" class="btn btn-primary">POST</button>
    </div>

  </form>
</div>
</body>
</html>