<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
		<title>Super Gym </title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<!-- js -->
		<script src="js/jquery.min.js"></script>
		<!-- //js -->
		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Super_Gym Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
				function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<!-- hover-effects -->
	
		<!-- //hover-effects -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!-- start-smoth-scrolling -->
<!--start-top-nav-script-->
		
<!--End-top-nav-script-->
</head>
	
<body>
<!-- header -->
	<div class="header">
	<div class="container">
		
		<div class="header-top-right">
			<p>Phone Number:<span> 043-234-3453</span></p>
		</div>
		<div class="clearfix"> </div>
		<div class="head-logo">
			<a href="index.php"><span> </span></a>
		</div>
		<div class="header-top">
		
		<div class="navigation">
				 <span class="menu"></span> 
					<ul class="navig">
						<li><a href="index.php" class="act">Home</a></li>
						<li class="plan active"><a href="#">LOGINS</a>
							<ul class="sub-nav sub">
								<li><a href="user_login/login.php">User login</a></li>
								<li><a href="gym_owner/owner_login.php">Owner login</a></li>
								<li><a href="admin/login.php">Admin login</a></li>
							</ul>
						</li>
						<!-- <li><a href="single.html">PAGES</a></li>
						<li><a href="news.html">NEWS</a></li>
						<li><a href="gallery.html">GALLERY</a></li>
						<li><a href="trainers.html">TRAINERS</a></li> -->
						<li><a href="contact_admin.php">CONTACT</a></li>
						<!-- <li><a href="#" class="home-box">CONTACT</a></li>
						<div class="clearfix"> </div> -->
					</ul>
					
		</div>
		<div class="search">
				<form>
					<input type="text" placeholder="Type and search..." required=" ">
				</form>
		</div>
		<div class="clearfix"> </div>
		</div>
	</div>
	</div>
			<!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(" ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->

<!-- //header -->
<!-- contact -->
	<div class="contact">
	<div class="container">
		<h3>CONTACT TO WEBSITE ADMIN</h3>
		
		<div class="map-bottom-grids">
			<!-- <div class="map-bottom-grid">
				<div class="home">
					<span> </span>
				</div>
				<p>257 Atlantis Ltd<span>Asian Countries</span>Asia-300567</p>
			</div> -->
			<!-- <div class="map-bottom-grid map-bottom-mid">
				<div class="call">
					<span> </span>
				</div>
				<p>+0120 300567895<span>+0120 794367895</span></p>
			</div> -->
			<!-- <div class="map-bottom-grid">
				<div class="mes">
					<span> </span>
				</div>
				<a href="mailto:info@example.com">Someone@yahoo.com</a>
			</div> -->
			<div class="clearfix"> </div>
		</div>
		<h4>Contact Us</h4>
		<form method="post">
			<input type="text" placeholder="Name" name="name" required=" ">
			<input type="text" name="email" required="" placeholder="E-mail">
			<input type="text" placeholder="Phone Number" name="phone" required=" ">
			<textarea placeholder="Message" name="message" required=" "></textarea>
			<input type="submit" name="button" value="Send">
		</form>
	</div>
	</div>
<!-- //contact -->




<?php include('layout/footer.php'); ?>

<?php
	include 'connect.php';
	if (isset($_POST['button'])) 
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$message=$_POST['message'];

		$insert="INSERT INTO admin_complaint (customer_name,customer_email,customer_phone,customer_message,reply) values('$name','$email','$phone','$message','Pending')";
		$execute=mysqli_query($connect,$insert);
		if ($execute==1) 
		{
			echo "<script>alert('Message sended Successfully')</script>";
			echo "<script>window.location.href='index.php'</script>";
		}
		else
		{
			echo "<script>alert('Failed please try again')</script>";
			echo "<script>window.location.href='index.php'</script>";
		}
	}
?>