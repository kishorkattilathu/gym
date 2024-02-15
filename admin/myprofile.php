<?php include('layout/header.php'); ?>

<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-12">

                	<?php
                		include ('../connect.php');
                		$select="SELECT * FROM admin WHERE email='$mail'";
                		$execute=mysqli_query($connect,$select);
                		$fetch=mysqli_fetch_array($execute);
                	?>

                    <div id="login-box" class="col-md-10">
                        <form id="login-form" class="form" method="post">
                            <h3 class="text-center text-info">My Profile</h3>
                            <div class="form-group">
                                <label for="name" class="text-info">Name:</label><br>
                                <input type="text" name="name" value="<?=$fetch['name']?>" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" readonly="" value="<?=$fetch['email']?>" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" value="<?=$fetch['password']?>" class="form-control">
                            </div>
                            
                            <div class="form-group"><br>
                                <!-- <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
                                <input type="submit" name="button" class="btn btn-info btn-md" value="submit">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<br>
<br>
<br>
<br>
<br>


<?php include('layout/footer.php') ;?>


<?php
include ('../connect.php');
if (isset($_POST['button'])) 
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$update="UPDATE admin SET name='$name',password='$password' WHERE email='$mail'";
	$execute2=mysqli_query($connect,$update);
	
// echo "<pre>"; print_r($update); echo "</pre>"; die('end of code');


	if ($execute2) 
	{
		echo "<script>alert('Updated Succesfully')</script>";
		echo "<script>window.location.href='myprofile.php'</script>";
	}
	else
	{
		echo "<script>alert('Failed please try again')</script>";
		echo "<script>window.location.href='myprofile.php'</script>";
	}
}


?>