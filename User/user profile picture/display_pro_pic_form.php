<form method="POST" action="upload_pro_pic.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div class="form-group">
  	  <input type="file" name="image">
  	</div>

  	<div class="form-group">
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	
    <div class="form-group">
      <input type="submit" name="upload" value="upload" class="form-control">
  		<!--<button type="submit" name="upload">POST</button>-->
  	</div>
  
</form>