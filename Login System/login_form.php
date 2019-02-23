<div class="wrapper">
    
        <h2> User Login</h2>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-group <?php echo (!empty($usernameErr)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $usernameErr; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($passwordErr)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $passwordErr; ?></span>
            </div>
            <div class="form-group">
                <a href="#">
                <input type="submit" class="btn btn-primary" value="Login">
                </a>
            </div>
            <p class="foot">You have to sign-in and register first <a href="sign.php">Register now</a>.</p>
        </form>
</div>