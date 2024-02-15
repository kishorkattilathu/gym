<?php

	include 'connect.php';
	echo $id=$_GET['id'];
	$delete="DELETE FROM booking WHERE booking_id='$id' and payment_status='Pending'";
	$execute=mysqli_query($connect,$delete);

	if ($execute==1)
	{
		echo "<script>alert('Cancelled trainee booking successfully')</script>";
		echo "<script>window.location.href='all_gym.php'</script>";
	}
	else
	{
		echo "<script>alert('Failed please try again')</script>";
		echo "<script>window.location.href='my_trainer.php'</script>";
	}

?>