<?php

	include '../connect.php';
	$id=$_GET['id'];
	$update="UPDATE booking set booking_status='Approved' WHERE booking_id='$id'";
	$execute=mysqli_query($connect,$update);
	if ($execute==1) 
	{
		echo "<script>alert('Approved successfully')</script>";
		echo "<script>window.location.href='pending_bookings.php'</script>";
	}
	else
	{
		echo "<script>alert('Failed please try again')</script>";
		echo "<script>window.location.href='pending_bookings.php'</script>";
	}

?>