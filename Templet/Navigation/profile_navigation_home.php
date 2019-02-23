<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#">
                <img class="img-responsive" style="width: 200px;" id="logo" src="http://localhost/project/Blog/Images/katapath_pawra.png" />
            </a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-left">
				<li>
					<a href="http://localhost/project/Blog/User/user frontend/profile.php">
					<p style="font-size: 20px; color: white;">Profile</p>	
					</a>
				</li>
				
				<li>
					<a href="http://localhost/project/Blog/User/post/view.php">
					<p style="font-size: 20px; color: white">Post</p>	
					</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				
				
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<?php echo "{$_SESSION['username']}" ; ?>
						<span class="glyphicon glyphicon-user"></span>
						<span class="caret"></span>
					</a>
			        	<ul class="dropdown-menu" >
			          		<li>
			          			<a href="http://localhost/project/Blog/User/user profile detail/edit_profile.php">
			          				<p style="font-size: 15px;">Edit Profile</p>
			          			</a>
			          		</li>
			          		<li>
			          			<a href="http://localhost/project/Blog/User/user profile picture/upload_pro_pic.php">
			          				<p style="font-size: 15px;">Change profile picture</p>
			          			</a>
			          		</li>
			          		
			        </ul>
			    </li>
      			<li>
      				<a href="http://localhost/project/Blog/Login System/logout.php">
      					<span class="glyphicon glyphicon-log-out"></span> Logout
      				</a>
      			</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>