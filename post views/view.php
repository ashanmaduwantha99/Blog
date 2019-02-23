<!DOCTYPE html>
<html>
<head>
	<title>My Templet</title>
	<?php include '../Templet/Boostrap/boostrap.php'; ?>
	<link rel="stylesheet" type="text/css" href="http://localhost/project/Blog/Templet/CSS/frontend.css">
</head>
<body>

<?php include '../Templet/Navigation/frontend_navigation.php'; ?>

<div class="container-home" style="background-image:url(http://localhost/project/Blog/Images/img2.png); background-positon:50% 50%; background-attachment:fixed; background-repeat:no-repeat; background-size:cover;">
	<div class="container">
		<br><br><br><br><br>
		<h2><b>Watched All the Post</b></h2>
		<div class="row">
			<div class="col-md-4 text-justify">
				<h3>Text</h3>
				<hr>
				<h5>In here you can watched post which are just text.</h5>
				<a href="http://localhost/project/Blog/post views/view_posttext.php"><button class="button" style="background-color: transparent; border-color: black; width: 100px; height: 50px; color: white;" type="button">Watch</button></a>
			</div>
			<div class="col-md-4 text-justify">
				<h3>Image with Text</h3>
				<hr>
				<h5>In here you can watched post which are just text.</h5>
				<a href="http://localhost/project/Blog/post views/view_post_text_image.php"><button class="button" style="background-color: transparent; border-color: black; width: 100px; height: 50px; color: white;" type="button">Watch</button></a>
			</div>
			<div class="col-md-4 text-justify">
				<h3>Quote Image</h3>
				<hr>
				<h5>In here you can watched post which are just text.</h5>
				<a href="http://localhost/project/Blog/post views/view_post_image.php"><button class="button" style="background-color: transparent; border-color: black; width: 100px; height: 50px; color: white;" type="button">Watch</button></a>
			</div>
		</div>	
		<div class="row">
			<br>
			<h2><b>Number of Posts</b></h2>
			<div class="col-md-4 text-justify">
				<h3>Text</h3>
				<hr>
				<h5>Number of Text posts</h5>
				<?php include 'count_posttext.php'; ?>

			</div>
			<div class="col-md-4 text-justify">
				<h3>Image with Text</h3>
				<hr>
				<h5>Number of Text posts</h5>
				<?php include 'count_post_text_image.php'; ?>

				
			</div>
			<div class="col-md-4 text-justify">
				<h3>Quote Image</h3>
				<hr>
				<h5>Number of Text posts</h5>
				<?php include 'count_post_image.php'; ?>
			</div>
		</div>
		<br>
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


<?php include '../Templet/Footer/footer.php'; ?>
</body>
</html>