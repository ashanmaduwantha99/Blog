	<div class="wrapper">
		<h2>Register Now</h2>
		<p>Please fill this form to register</p>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			
			<div class="form-group <?php echo(!empty($usernameErr))? 'has-error' : ''; ?>">
				<label>Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
				<span class="help-block"><?php echo $usernameErr; ?></span>
			</div>

			<div class="form-group <?php echo (!empty($passwordErr)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $passwordErr; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($confirm_passwordErr)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_passwordErr; ?></span>
            </div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Submit">
				<input type="reset" class="btn btn-default" value="Reset">
			</div>
			<p>Already have an account ? <a href="login.php"> Login</a></p>
		</form>
	</div>