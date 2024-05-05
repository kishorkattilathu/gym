 <?php

	 session_start();

	 $user_mail=$_SESSION['mail'];
	 if (!$user_mail) 
	{
	 header('location:index.php');
	}
?> 
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
		<meta name="keywords" content="Princi_Gym Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
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

	<?php
		$id=$_GET['id'];

		include "connect.php";
		$select="SELECT * FROM gym_registration WHERE gym_id=$id";
		$execute=mysqli_query($connect,$select);
		$fetch=mysqli_fetch_array($execute);

	?>

<!-- header -->
	<div class="header">
	<div class="container">
		
		<div class="header-top-right">
			<p>Phone Number:<span> 987-654-3210</span></p>
		</div>
		<div class="clearfix"> </div>
		<!-- <div class="head-logo">
			<a href="index.html"><span> </span></a>
		</div> -->
		<div style="text-align: center; color:white;"><h1><strong>Super Gym</strong></h1></div>
		<div class="header-top">
		
		<div class="navigation">
				 <span class="menu"></span> 
					<ul class="navig">
						<li><a href="home.php" class="act">Home</a></li>
						<!-- <li class="plan active"><a href="#">LOGINS</a>
							<ul class="sub-nav sub">
								<li><a href="user_login/login.php">User login</a></li>
								<li><a href="gym_owner/owner_login.php">Owner login</a></li>
								<li><a href="admin/login.php">Admin login</a></li>
							</ul>
						</li> -->
						<!-- <li><a href="single.html">PAGES</a></li> -->
						<li><a href="logout.php">LOGOUT</a></li>
						<!-- <li><a href="news.html">NEWS</a></li> -->
						<li><a href="all_gym.php">Gyms</a></li>
						<li><a href="my_trainer.php">My Trainer</a></li>
						<!-- <li><a href="trainers.html">TRAINERS</a></li> -->
						<li><a href="contact.php?id=<?=$fetch['gym_id']?>">CONTACT</a></li>
						<div class="clearfix"> </div>
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
