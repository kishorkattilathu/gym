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
							<p class="para1">Lorem ipsum dolor sit amet, consectetur adipiscin 
								<span>elit. In ut turpis a erat consectetur euismod.</span>
								Suspendisse massa magnet and its a du dolor.</p>
							<div class="skills">
								<div class="skill" style="width:40%"> </div>							
							</div>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<p class="para">FIRST CLASS</p>
							<h4>FITNESS</h4>
							<p class="para1">aliquam ipsum ipsum mollis In ut turpis euismod.<span> 
									Sollicitudin viverra, vel varius  erat consectetur</span> eget a sit mollis ante morbi sed.</p>
							<div class="skills">
								<div class="skill" style="width:55%"> </div>							
							</div>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<p class="para">SECOND CLASS</p>
							<h4>HEALTH</h4>
							<p class="para1">Lorem ipsum dolor sit amet, consectetur adipiscin 
								<span>elit. In ut turpis a erat consectetur euismod.</span>
								Suspendisse massa magnet and its a du dolor.</p>
							<div class="skills">
								<div class="skill" style="width:75%"> </div>							
							</div>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<p class="para">FOURTH CLASS</p>
							<h4>FITNESS AND HEALTH</h4>
							<p class="para1">aliquam ipsum ipsum mollis In ut turpis euismod.<span> 
									Sollicitudin viverra, vel varius  erat consectetur</span> eget a sit mollis ante morbi sed.</p>
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
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Cras euismod justo sit amet porttitor viverra. 
			In hac habitasse platea dictumst. In cursus, massa id aliquet volutpat,
			turpis dui fermentum purus, tempor rhoncus mauris urna sed tortor.
			<span>Aliquam in dolor eu ipsum elementum auctor vitae eget felis. 
			Integer feugiat rutrum accumsan. Donec velit eros, eleifend vitae nisi nec,
			mattis auctor dui. Aliquam erat volutpat.
			Curabitur eu felis ac augue mollis auctor hendrerit ut velit. 
			Maecenas tempus viverra sollicitudin.</span></p>
			<div class="get">
				<a href="#">GET DEMO</a>
				
				
			</div>
			<div class="buy">
				<a href="#">BUY NOW</a>	
				
			</div>
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
			<p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			Cras euismod justo sit amet porttitor viverra. In hac 
			habitasse platea dictumst. In cursus, massa id aliquet volutpat,
			turpis dui fermentum purus, tempor rhoncus mauris urna sed tortor.
			<span> Aliquam in dolor eu ipsum elementum auctor vitae eget felis. 
			Integer feugiat rutrum accumsan.</span></p>
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
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Cras euismod justo sit amet porttitor viverra. 
			In hac habitasse platea dictumst. In cursus, massa id aliquet volutpat,
			turpis dui fermentum purus, tempor rhoncus mauris urna sed tortor.
			<span>Aliquam in dolor eu ipsum elementum auctor vitae eget felis. 
			Integer feugiat rutrum accumsan. Donec velit eros, eleifend vitae nisi nec,
			mattis auctor dui. Aliquam erat volutpat.
			Curabitur eu felis ac augue mollis auctor hendrerit ut velit. 
			Maecenas tempus viverra sollicitudin.</span></p>
			<div class="watch">
				<a href="#">DOWNLOAD NOW</a>	
			</div>
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
