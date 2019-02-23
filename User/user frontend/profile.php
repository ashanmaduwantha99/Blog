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
			
			<div class="col-md-3">
				<br><br><br>
				<?php include 'profile_card.php'; ?>
			</div>
			
			<div class="col-md-6">
				<br><br><br>
				
				<h4><b>Write your post</b></h4>
				<div class="container">
					<p>You can publish your post as just text.</p>
					<a href="http://localhost/project/Blog/User/post/posttext_view.php">
					<button style="width: 150px;">post test</button>	
					</a>	
				</div>
				<br><br>
				<hr>
				
				<h4><b>Write your post</b></h4>
				<div class="container">
					<p>You can publish your post as not just text, <br> You can upload a matching picture with your text.</p>
					<a href="http://localhost/project/Blog/User/post/post_text_image_view.php">
					<button style="width: 150px;">post test</button>	
					</a>	
				</div>
				<br><br>
				<hr>
				
				<h4><b>Write your post</b></h4>
				<div class="container">
					<p>You can upload your text as a image.</p>
					<a href="http://localhost/project/Blog/User/post/post_image_view.php">
					<button style="width: 150px;">post test</button>	
					</a>	
				</div>
			</div>
			
			<div class="col-md-3">
				<br><br><br>
				<h4>Your States</h4>
				<br><br><br>
				
				<h4>Calender</h4>
				<br><br><br>
				<h4>Messages</h4>				
			</div>

		</div>
		<div class="row">
			<div class="col-md-6 text-justify" style="background-color: transparent;">
				<h2><b>Write your heart</b></h2>
				<br>
				<p style="font-size: 18px;">How wonderfull it is to be able to write
			    someone a letter! To feel like conveying<br>
			    your thoughts to a person,to sit at your desk
			    and pick p a pen,to put your thoughts<br> into
			    <b>words like this truly marvelous.</b><br>
			    — Haruki Murakami
				</p>
			</div>
			<div class="col-md-6 text-justify" style="background-color: transparent;">
				<h2 style="font-size: 180px; text-align: center; color: brown;"><span class="glyphicon fa fa-pencil"></span></h2>
			</div>
		</div>
		<br><br>
	</div>
</div>


<div class="container-home" style="background-color: #CD853F;">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center" style="color: brown;">
				<i class="fa fa-graduation-cap fa-5x" aria-hidden="true" style="color: #3498db;"></i>
				<h2>From you to the society</h2>
				<hr width="70%">
				<br />
				<p class="text-justify">
					In here this web page build a comunity of persons who have 
					an ability to write. As a team you can make some great things
					the world. As a example you can make a lititure camp for 
					student who would like to this field. <br>
					In here our website prepare for you some special things to 
					gather world wide poetries to work on some thing special
					and you can plan as a team what you should do the society.
				</p>
				<br />
				<button class="button-more-white btn-lg" type="button"><i class="fa fa-info" aria-hidden="true"></i>&nbsp; MORE INFO</button>
                <div class="visible-xs clearfix" style="height:40px;"></div>
                <br><br>
			</div>
			<div class="col-md-4 text-center" style="color: brown;">
				<i class="fa fa-lightbulb-o fa-5x" aria-hidden="true" style="color: #3498db;"></i>
				<h2>Business Ideas</h2>
				<hr width="70%">
				<br />
				<p class="text-justify">
					For a business idea, we are offer to you so many things.
					As a example you can write a book, make a film with your own 
					script. For that we will help to make that thing success.
				</p>
				<br /><br><br><br><br>
				<button class="button-more-white btn-lg" type="button"><i class="fa fa-info" aria-hidden="true"></i>&nbsp; MORE INFO</button>
                <div class="visible-xs clearfix" style="height:40px;"></div>
			</div>
			<div class="col-md-4 text-center" style="color: brown;">
				<i class="fa fa-comment-o fa-5x" aria-hidden="true" style="color: #3498db;"></i>
				<h2>Online Support</h2>
				<hr width="70%">
				<br />
				<p class="text-justify">
					In here we wish to support you to make your quote very corectry.
					For that we will give some options to you.
					As a example we will gives you a dictonary to find word, 
					to find meaning like that thing. you can use it while you 
					write a post on our website. Like that our website supply some
					tools and apps to make your post easy and correctly.
				</p>
				<br /><br><br>
				<button class="button-more-white btn-lg" type="button"><i class="fa fa-info" aria-hidden="true"></i>&nbsp; MORE INFO</button>
                <div class="visible-xs clearfix" style="height:40px;"></div>
			</div>
			
			
		</div>
    </div>
</div>

<?php include '../../Templet/Footer/footer.php'; ?>
</body>
</html>