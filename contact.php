<?php include 'layout2/header.php'; ?>

<?php
	include 'connect.php';
	$id=$_GET['id'];

	$select="SELECT * FROM user WHERE email='$user_mail'";
	$execute=mysqli_query($connect,$select);
	$fetch=mysqli_fetch_array($execute);

	$select2="SELECT * FROM gym_registration WHERE gym_id='$id'";
	$execute2=mysqli_query($connect,$select2);
	$fetch2=mysqli_fetch_array($execute2);

?>


<!-- contact -->
	<div class="contact">
	<div class="container">
		<h3>Contact to <?=$fetch2['gym_name']?> Owner</h3>
		
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
			<input type="hidden" placeholder="id" name="gym_id" value="<?=$id?>">
			<input type="hidden" placeholder="gym_email" name="gym_email" value="<?=$fetch2['gym_email']?>">
			<input type="text" placeholder="Name" name="name" required=" ">
			<input type="text" value="<?=$fetch['email']?>" name="email" readonly
			 >
			<input type="text" placeholder="Phone Number" name="phone" required=" ">
			<textarea placeholder="Message" name="message" required=" "></textarea>
			<input type="submit" name="button" value="Send">
			<a href="reply.php" class="btn btn-danger"><h5>Previous Complaint</h5></a>
		</form>
	</div>
	</div>
<!-- //contact -->
<?php
	if (isset($_POST['button'])) 
	{
		$gym_id=$_POST['gym_id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$gym_email=$_POST['gym_email'];
		$phone=$_POST['phone'];
		$message=$_POST['message'];
// echo "<pre>"; print_r($_POST); echo "</pre>"; die('end of code');
		$insert="INSERT INTO complaint (owner_id,c_name,c_email,gym_email,c_phone,message,reply) VALUES('$gym_id','$name','$email','$gym_email','$phone','$message','Pending')";
		$execute1=mysqli_query($connect,$insert);
		if ($execute1==1) 
		{
			echo "<script>alert('Complaint Registered Successfully')</script>";
			echo "<script>window.location.href='reply.php'</script>";
		}
		else
			echo "<script>alert('Failed Please Try Again')</script>";
			echo "<script>window.location.href='all_gym.php'</script>";
	}
?>




<?php include('layout/footer.php'); ?>