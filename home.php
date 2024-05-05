<?php include ('layout/header.php'); ?>


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
							<p class="para1">Having a high level of overall fitness is linked with a lower 
								risk of chronic disease, as well as a better ability to manage health issues that
								 do come up. Better fitness 
								also promotes more functionality and mobility throughout one’s life span..</p>
							<div class="skills">
								<div class="skill" style="width:40%"> </div>							
							</div>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<p class="para">FIRST CLASS</p>
							<h4>FITNESS</h4>
							<p class="para1">Science-backed, expert-driven content to guide your fitness journey.
								 Find your motivation,
								 your movement, and the resources you need to make fitness </p>
							<div class="skills">
								<div class="skill" style="width:55%"> </div>							
							</div>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<p class="para">SECOND CLASS</p>
							<h4>HEALTH</h4>
							<p class="para1">Experts recommend getting at least 150 minutes of moderate aerobic exercise,
								 or 75 minutes of vigorous activity each week.
								 Brisk walking or swimming are examples of moderate activity..</p>
							<div class="skills">
								<div class="skill" style="width:75%"> </div>							
							</div>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<p class="para">FOURTH CLASS</p>
							<h4>FITNESS AND HEALTH</h4>
							<p class="para1">Aerobic exercise is recommended by the American Heart 
								AssociationTrusted Source and by most
								 doctors to people with, or at risk for, heart disease.</p>
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
			<p>Your heart beats faster. You breathe more rapidly and deeply. 
				And you sweat. Well, that’s probably because you’ve been moving the 
				large muscles in your legs, arms and hips over a sustained period of time. 
				When these major muscles are involved in exercise, there is increased rate of respiration
				 to produce energy. In turn, the need for more oxygen leads to increased breathing and heart rate.
				  And such a
				 form of activity is called cardiovascular exercise—or cardio in short.</span></p>
			<div class="get">
				<a href="#">GET DEMO</a>
				
				
			</div>
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
			<p class="para">Aerobic exercise reduces the risk of 
				many conditions. These conditions include obesity, 
				heart disease, high blood pressure,
				 type 2 diabetes, metabolic syndrome, stroke and certain types of cancer..</span></p>
			<div class="watch">
				<a href="#">WATCH DEMO</a>
			</div>
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
			<p>Your heart beats faster. You breathe more rapidly and deeply. 
				And you sweat. Well, that’s probably because you’ve been moving the 
				large muscles in your legs, arms and hips over a sustained period of time. 
				When these major muscles are involved in exercise, there is increased rate of respiration
				 to produce energy. In turn, the need for more oxygen leads to increased breathing and heart rate.
				  And such a
				 form of activity is called cardiovascular exercise—or cardio in short.</span></p>
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

<?php include ('layout/footer.php'); ?>
