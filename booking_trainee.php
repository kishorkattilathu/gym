<?php include 'layout/header.php'; ?>

	<?php
		include 'connect.php';
		$id=$_GET['id'];
		$select="SELECT * FROM trainees WHERE trainee_id=$id";
		$execute=mysqli_query($connect,$select);
		$fetch=mysqli_fetch_array($execute);

		$select1="SELECT * FROM user WHERE email='$user_mail'";
		$execute1=mysqli_query($connect,$select1);
		$fetch1=mysqli_fetch_array($execute1);

	?>
	<form method="post">
		<input type="hidden"  value="<?=$fetch1['user_id']?>" name="user_id">
		<input type="hidden"  value="<?=$fetch['gym_owner_id']?>" name="gym_owner_id">
		<input type="hidden"  value="<?=$fetch['owner_email']?>" name="gym_owner_email">
		<input type="hidden"  value="<?=$fetch['trainee_id']?>" name="trainee_id">
		<input type="hidden"  value="<?=$fetch1['email']?>" name="email">
		<div class="single">
		<div class="container">
		<div class="clearfix"> </div>

		<div class="products">
			<h3>Book Your Trainer</h3>
			<div class="products-grid">
				<a href=""><img style="height:435px;width:550px" 
					src="gym_owner/trainee_image/<?=$fetch['trainee_image']?>"></a>
							<h5><?=$fetch['trainee_name']?></h5>

							<p><strong>Qualification:</strong><?=$fetch['qualification']?></p>
							<p><strong>Specialties:</strong><?=$fetch['specialties']?></p>
							<p><strong>Experience:</strong><?=$fetch['experience']?></p>
							<div>
								<a href=""><button name="button" class="btn btn-success">BOOK NOW</button></a> 
								<a href="all_gym.php" class="btn btn-primary">HOME</a>
							</div>
			</div>
			
			
			<div class="clearfix"> </div>
		</div>
		</div>
		</div>
		</form>


<?php include 'layout/footer.php'; ?>

<?php


	if (isset($_POST['button'])) 
	{
		
		$user_id=$_POST['user_id'];
		$email=$_POST['email'];
		$trainee_id=$_POST['trainee_id'];
		$gym_owner_id=$_POST['gym_owner_id'];
		$gym_owner_email=$_POST['gym_owner_email'];
		
		$select2="SELECT * FROM booking WHERE user_email='$email'";
		$execute2=mysqli_query($connect,$select2);
		$count=mysqli_num_rows($execute2);
		if ($count<=0) 
		{
		
		

			$insert="INSERT into booking (user_id,user_email,trainee_id,gym_owner_id,gym_owner_email,booking_status,payment_status) values('$user_id','$email','$trainee_id','$gym_owner_id','$gym_owner_email','Pending','Pending')";
			$execute2=mysqli_query($connect,$insert);
			if ($execute2)
			{
				echo "<script>alert('Successfully booked waiting for approval')</script>";
				echo "<script>window.location.href='all_gym.php'</script>";
			}
			else
			{
				echo "<script>alert('Failed please try again')</script>";
				echo "<script>window.location.href='all_gym.php'</script>";
			}
		}
		else
		{
			echo "<script>alert('Sorry Already Booked One Trainer')</script>";
			echo "<script>window.location.href='all_gym.php'</script>";
		}
		
	}
?>