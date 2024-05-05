<?php
session_start();
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
	<title>Form Using Tabs Responsive Widget Template  :: w3layouts</title>
	<link href="css/style.css" rel='stylesheet' type='text/css'/>
	<link href='//fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>
	
	
	<!-- For-Mobile-Apps-and-Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Form Using Tabs Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //For-Mobile-Apps-and-Meta-Tags -->

	<script src="js/jquery.min.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
				</script>
				<style>
					.mail
						{
							width: 483px;
							height: 35px;
						}
					</style>
</head>
<body>
	<h1>FORM USING TABS</h1>
	<div class="main-content">
		<div class="form">
			<div class="sap_tabs">	
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul>
						
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Sign in</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Sign up</span></li>
				    </ul>		
		            

			        <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
				        <div class="facts">
					        <div class="register">
						         <form method="post">
							        <h3>E-mail:</h3>						
							        <input type="email" placeholder="Email Address" class="mail" name="email1"  required="">
							        <h3>Password:</h3>							
							        <input placeholder="Password" class="lock" name="password1" type="password" required="">										
							        <div class="sign-up">
								        <input type="submit" name="button1"/>
							        </div>
						        </form>
						    </div>
				        </div> 
			        </div>
			        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
				        <div class="facts">
		                    <div class="register">
						        <form method="post">
							        <h3>Name:</h3>					
							        <input placeholder="Name" type="text" name="name" required="">
							        <h3>Phone:</h3>					
							        <input placeholder="Phone" type="text"  name="phone" class="phone" required="">
							        <h3>Email:</h3>
							        <input placeholder="Email Address" type="email" class="mail" name="email" required="">	
							        <h3>Password:</h3>							
							        <input placeholder="Password" type="password" name="password" required="">	
							        <h3>Confirm Password:</h3>
							        <input placeholder="Confirm Password" type="password" name="confirm" required="">
							        <div class="sign-up">
									    <input type="submit" name="button" value="Create Account"/>
								    </div>
						        </form>
					        </div>
				        </div>
			        </div>	 			        					            	      
			 	</div>	
		    </div>
        </div>
        <div class="right">
			<h4>why you'll love it</h4>
			<ul>
				<li><p>21 Days to Change Your Habbit.</p></li>
				<li><p>90 Days to Change Your Lifestyle.</p></li>
				<li><p>Live a Healthy Life</p></li>
			</ul>
			<a href="../index.php"><h5>Go to Home Page</h5></a>
			<div class="socialicons">
				<!-- <ul>
					<li><a class="home" href="#"></a></li>
					<li><a class="twitter" href="#"></a></li>
					<li><a class="google" href="#"></a></li>
				</ul> -->
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="footer">
		<p> &copy; 2023 Gym Plus. All Rights Reserved</p>
	</div>
</body>
</html>


<?php
include ('../connect.php');
if (isset($_POST['button'])) 
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	$confirm=$_POST['confirm'];
	if ($password==$confirm) 
	{
		$select1="SELECT * FROM user WHERE email='$email'";
		$execute2=mysqli_query($connect,$select1);
		$count1=mysqli_num_rows($execute2);
		if ($count1==0) 
			{

				$insert="INSERT INTO user(username,email,phone,password) values('$name','$email','$phone','$password')";
				$execute=mysqli_query($connect,$insert);
				// echo "<pre>"; print_r($insert); echo "</pre>"; die('end of code');

				if ($execute==1) 
				{
					echo "<script>alert('Registered Successfully')</script>";
					echo "<script>window.location.href='login.php'</script>";
						
				}
				else
					{
					echo "<script>alert('Failed please try again')</script>";
					echo "<script>window.location.href='login.php'</script>";
					
					}
			}
			else
			{
				echo "<script>alert('Email already exist')</script>";
				echo "<script>window.location.href='login.php'</script>";
			}
	}
	else
	{
		echo "<script>alert('password doesnt match')</script>";
		echo "<script>window.location.href='login.php'</script>";
	}

}


?>

<?php
if (isset($_POST['button1'])) 
{
	$email1=$_POST['email1'];
	$password1=$_POST['password1'];

	$select="SELECT * FROM user WHERE email='$email1' AND password='$password1'";
	$execute1=mysqli_query($connect,$select);
	$count=mysqli_num_rows($execute1);
	// echo "<pre>"; print_r($_POST); echo "</pre>"; die('end of code');
	if ($count>0) 
	{
		$_SESSION['mail']=$email1;
		// echo "<pre>"; print_r($_SESSION); echo "</pre>"; die('end of code');
		echo "<script>alert('Log in Successfully')</script>";
		echo "<script>window.location.href='../all_gym.php'</script>";

	}
	else
	{
		echo "<script>alert('Failed password or email wrong please try again')</script>";
		echo "<script>window.location.href='login.php'</script>";
	}

}


?>