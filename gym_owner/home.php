<?php include ('layout/header.php'); ?>
<div class="grid-form1">
 		<h3 id="forms-example" class="">Basic Form</h3>

		<?php
		include('../connect.php');
		$select="SELECT * FROM gym_owner WHERE owner_email='$mail'";
		$execute=mysqli_query($connect,$select);
		$fetch=mysqli_fetch_array($execute);
		?>

 	<form method="post">
 			<div class="form-group">
			    <label for="exampleInputPassword1">Name</label>
			    <input type="text" class="form-control" name="name" value="<?=$fetch['owner_name']?>">
 		    </div>
  			<div class="form-group">
			    <label for="exampleInputPassword1">Email</label>
			    <input type="text" class="form-control" readonly="" name="email" value="<?=$fetch['owner_email']?>">
 		    </div>
  			<div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="text" class="form-control" name="pass" value="<?=$fetch['password']?>">
 		    </div>
 		    <div class="form-group">
			    <label for="exampleInputPassword1">Mobile No:</label>
			    <input type="text" class="form-control" name="mob" value="<?=$fetch['mobile']?>">
 		    </div>
  
  			<button type="submit" name="button" class="btn btn-default">Update</button>
	</form>
</div>
<br>
<br>
<br>
<br>
<?php include ('layout/footer.php'); ?>


<?php
		if (isset($_POST['button'])) 
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$pass=$_POST['pass'];
			$mob=$_POST['mob'];

			$update="UPDATE gym_owner SET owner_name='$name',password='$pass',mobile='$mob' WHERE owner_email='$mail'";
			$execute1=mysqli_query($connect,$update);
			if ($execute1) 
			{
				echo "<script>alert('Updated Successfully')</script>";
				echo "<script>window.location.href='home.php'</script>";
			}
			else
			{
				echo "<script>alert('Failed Please Try Again')</script>";
				echo "<script>window.location.href='home.php'</script>";
			}
		}
?>