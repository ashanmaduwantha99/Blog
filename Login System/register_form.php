	<div class="wrapper">
		<h4><?php echo "Hi {$_SESSION['username']}" ; ?> </h4>
    <h2><b>Create your Profile</b></h2>
    <p>Please add your detail to our Library Management Database database and register here.</p><hr>
		
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
      
      <label>First Name</label>
      
      <input type="text" name="fname" id="fname" class="form-control" required="required" placeholder="Enter Your First name">
      <span class="help-block"></span>
      

      <label>Last Name</label>
      
      <input type="text" name="lname" id="lname" class="form-control" required="required" placeholder="Enter Your Last Name">
      <span class="help-block"></span>
      

      <label>Email:</label>
      
      <input type="email" name="email" id="email" class="form-control" required="required" placeholder="Please your Email">
      <span class="help-block"></span>
      

      <label>Address:</label>
      
      <input type="text" name="address" id="address" class="form-control" required="required" placeholder="Please Enter your Address or Hometown">
      <span class="help-block"></span>
      

      <label>Job:</label>
      
      <input type="text" name="job" id="job" class="form-control" required="required" placeholder="Please enter your Job or States">
      <span class="help-block"></span>
      

      <label>Mobile Number:</label>
      
      <input type="text" name="tele_num" id="tele_num" class="form-control" required="required" placeholder="Please enter your mobile number">
      <span class="help-block"></span>
      

      
      <input type="submit" value=" Submit " class="btn btn-primary" name="submit"/>
      
    </div>
    </form>
	</div>