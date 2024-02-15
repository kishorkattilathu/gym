<?php include "layout/header.php"; ?>

<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-12">

                	<?php
                		include 'connect.php';
                		$select="SELECT * FROM user WHERE email='$user_mail'";
                		$execute=mysqli_query($connect,$select);
                		$fetch=mysqli_fetch_array($execute);
                	?>


                    <div id="login-box" class="col-md-10">
                        <form id="login-form" class="form" method="post">
                            <h3 class="text-center text-info">My Profile</h3>
                            <div class="form-group">
                                <label for="name" class="text-info">Name:</label><br>
                                <input type="text" name="name" value="<?=$fetch['username']?>" id="name" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" readonly="" value="<?=$fetch['email']?>" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone" class="text-info">Phone:</label><br>
                                <input type="text" name="phone" value="<?=$fetch['phone']?>" id="phone" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" value="<?=$fetch['password']?>" class="form-control" required="">
                            </div>
                            
                            <div class="form-group"><br>
                                <!-- <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
                                <input type="submit" name="button" class="btn btn-info btn-md" value="Update">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "layout/footer.php"; ?>


<?php
	if (isset($_POST['button'])) 
	{
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];

		$update="UPDATE user set username='$name',phone='$phone',password='$password'WHERE email='$user_mail' ";
		$execute1=mysqli_query($connect,$update);
		if ($execute1==1) 
		{
			echo "<script>alert('Updated Successfully')</script>";
			echo "<script>window.location.href='my_profile.php'</script>";
		}
		else
		{
			echo "<script>alert('Failed please try again')</script>";
			echo "<script>window.location.href='my_profile.php'</script>";
		}
	}
	
?>