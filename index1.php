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
			<p>Phone Number:<span>  123-456-789</span></p>
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
<!-- banner -->
	<div class="banner">
	<div class="container">
<!-- Slider-starts-Here -->
				<script src="js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: true,
				        nav: true,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
							<p class="para">LATEST CLASS</p>
							<h4>FITNESS AND HEALTH</h4>
							<p class="para1">Be well fueled going into a workout. Studies suggest that eating or drinking carbohydrates before exercise can improve workout performance and may allow you to work out for a longer time or at a higher intensity. If you don't eat, you might feel sluggish or lightheaded when you exercise.</p>
							<div class="skills">
								<div class="skill" style="width:40%"> </div>							
							</div>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<p class="para">FIRST CLASS</p>
							<h4>FITNESS</h4>
							<p class="para1">Hydration is the key! Drinking fluids in general will help you keep healthy. ...
Variety is the spice of life. Combining cardio and weight training is a very effective way to keep healthy. ...
Interval training. ...
Procrastination kills. ...
What motivates you?</p>
							<div class="skills">
								<div class="skill" style="width:55%"> </div>							
							</div>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<p class="para">SECOND CLASS</p>
							<h4>HEALTH</h4>
							<p class="para1">If you can only commit 2-3 times a week, full body workouts are best. Rather than focus on body types, a push/pull/leg split (also known as PPL) splits workouts by movement types. Pushing movements typically work chest, shoulders and triceps, while pulling movements work the back, glutes, and hamstrings.</p>
							<div class="skills">
								<div class="skill" style="width:75%"> </div>							
							</div>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<p class="para">FOURTH CLASS</p>
							<h4>FITNESS AND HEALTH</h4>
							<p class="para1">Should I gym everyday?
If you're trying to improve your overall health and wellness, three to five workouts per week should be sufficient. However, if you're looking to add muscle mass or improve your athletic performance, you may need to increase your gym time to five or six days per week.</p>
							<div class="skills">
								<div class="skill" style="width:95%"> </div>							
							</div>
						</div>
					</li>
				</ul>
			</div>
<!-- Slider-ends-Here -->
	</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
	<div class="container">
		<div class="banner-bottom-left">
			<h4>CARDIOVASCULAR EXERCISE</h4>
			<p>Walking. Any exercise program should include cardiovascular exercise, which strengthens the heart and burns calories. And walking is something you can do anywhere, anytime, with no equipment other than a good pair of shoes.
			<span>By focusing exclusively on the three big lifts—the bench press, squat, and deadlift—you can simplify your workouts and get incredible results. Although this may sound too good to be true, the fact is that these exercises challenge your body enough to elicit results without any other accessory movements.</span></p>
			<!-- <div class="get">
				<a href="#">GET DEMO</a>
				
				
			</div> -->
			<!-- <div class="buy">
				<a href="#">BUY NOW</a>	
				
			</div> -->
			<div class="clearfix"> </div>
		</div>
		<div class="banner-bottom-right">
			<div class="fig">
				<img src="images/2.png" alt=" " />
			</div>
			<div class="fig1">
				<img src="images/3.png" alt=" " />
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>	
	<div class="watch-demo">
	<div class="container">
		<div class="banner-bottom-right1">
			<h4>GOOD FOR HEALTH</h4>
			<p class="para">Squats, love them or not, are arguably the king of all exercises. Except for the deadlift, the squat exercise trains the most muscles and is one exercise you can load up heavy weight for juicy muscle-building gains.</span></p>
			<!-- <div class="watch">
				<a href="#">WATCH DEMO</a>
			</div> -->
		</div>
		<div class="banner-bottom-left1">
			<div class="fig">
				<img src="images/6.png" alt=" " />
			</div>
			<div class="fig1">
				<img src="images/7.png" alt=" " />
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>	
		<div class="banner-bottom">
	<div class="container">
		<div class="banner-bottom-left">
			<h4>CARDIOVASCULAR EXERCISE</h4>
			<p>Walking. Any exercise program should include cardiovascular exercise, which strengthens the heart and burns calories. And walking is something you can do anywhere, anytime, with no equipment other than a good pair of shoes.
			<span>By focusing exclusively on the three big lifts—the bench press, squat, and deadlift—you can simplify your workouts and get incredible results. Although this may sound too good to be true, the fact is that these exercises challenge your body enough to elicit results without any other accessory movements.</span></p>
			<!-- <div class="watch">
				<a href="#">DOWNLOAD NOW</a>	
			</div> -->
		</div>
		<div class="banner-bottom-right">
			<div class="fig">
				<img src="images/4.png" alt=" " />
			</div>
			<div class="fig1">
				<img src="images/5.png" alt=" " />
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
<!-- //banner-bottom -->
<!-- footer -->
	<div class="footer">
	<div class="container">
		<div class="footer-icon footer-icon-top">
			<a href="#home" class="scroll"><img src="images/row.png" alt=" " /></a>
		</div>
		<div class="footer-social">
			<ul>
				<li><a href="#" class="dribble"> </a></li>
				<li><a href="#" class="facebook"> </a></li>
				<li><a href="#" class="twitter"> </a></li>
				<li><a href="#" class="be"> </a></li>
				<li><a href="#" class="in"> </a></li>
				<li><a href="#" class="fli"> </a></li>
				<li><a href="#" class="rad"> </a></li>
			</ul>
		</div>
		<div class="footer-nav">
			<ul>
				<li><a href="index.php" class="foot">HOME</a></li>
				<li><a href="">ABOUT</a></li>
				<li><a href="">NEWS</a></li>
				<li><a href="">ARCHIVES</a></li>
				<li><a href="contact_admin.php">CONTACT</a></li>
			</ul>
		</div>
		<!-- <p>Template by <a href="http://w3layouts.com/">w3layouts</a></p> -->
	</div>
	</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>