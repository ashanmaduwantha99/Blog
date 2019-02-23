<?php session_start();
if(!isset($_SESSION['username']))
  {
    echo "error session";
  }  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>My Templet</title>
	<?php include '../../Templet/Boostrap/boostrap.php'; ?>
	<link rel="stylesheet" type="text/css" href="http://localhost/project/Blog/Templet/CSS/user_frontend.css">
</head>
<body>

<?php include '../../Templet/Navigation/profile_navigation_home.php'; ?>

<div class="container-home" style="background-image:url(http://localhost/project/Blog/Images/img2.png); background-positon:50% 50%; background-attachment:fixed; background-repeat:no-repeat; background-size:cover;">
	<div class="container">
		<div class="row">
			<br><br><br><br>
			<div class="col-md-6 text-justify">
				<?php include 'post_text_image_form.php'; ?>
				<?php include 'post_text_image_display.php'; ?>
			</div>
			<div class="col-md-6 text-justify">
				<h4>View your post</h4>
				
				<?php include 'post_text_image_edit.php'; ?>
				<br><br>
			</div>
			
		</div>
		
	</div>
</div>


<div class="container-home" style="background-color: #CD853F;">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center" style="color: #fff;">
				<i class="fa fa-graduation-cap fa-5x" aria-hidden="true" style="color: #3498db;"></i>
				<h2>Business Guide</h2>
				<hr width="70%">
				<br />
				<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
				1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
				electronic typesetting, remaining essentially unchanged.
				</p>
				<br />
				<button class="button-more-white btn-lg" type="button"><i class="fa fa-info" aria-hidden="true"></i>&nbsp; MORE INFO</button>
                <div class="visible-xs clearfix" style="height:40px;"></div>
			</div>
			<div class="col-md-4 text-center" style="color: #fff;">
				<i class="fa fa-lightbulb-o fa-5x" aria-hidden="true" style="color: #3498db;"></i>
				<h2>Business Ideas</h2>
				<hr width="70%">
				<br />
				<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
				1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
				electronic typesetting, remaining essentially unchanged.
				</p>
				<br />
				<button class="button-more-white btn-lg" type="button"><i class="fa fa-info" aria-hidden="true"></i>&nbsp; MORE INFO</button>
                <div class="visible-xs clearfix" style="height:40px;"></div>
			</div>
			<div class="col-md-4 text-center" style="color: #fff;">
				<i class="fa fa-comment-o fa-5x" aria-hidden="true" style="color: #3498db;"></i>
				<h2>Online Support</h2>
				<hr width="70%">
				<br />
				<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
				1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
				electronic typesetting, remaining essentially unchanged.
				</p>
				<br />
				<button class="button-more-white btn-lg" type="button"><i class="fa fa-info" aria-hidden="true"></i>&nbsp; MORE INFO</button>
                <div class="visible-xs clearfix" style="height:40px;"></div>
			</div>
		</div>
    </div>
</div>

<?php include '../../Templet/Footer/footer.php'; ?>
</body>
</html>