<?php
include ('../connect.php');
$id=$_GET['id'];

$update="UPDATE gym_owner set owner_status='Rejected' WHERE owner_id='$id'";
$execute=mysqli_query($connect,$update);
if ($execute) 
{
	echo "<script>alert('Rejected Successfully')</script>";
	echo "<script>window.location.href='approve_gym.php'</script>";
}
else
{
	echo "<script>alert('Failed please Try again')</script>";
	echo "<script>window.location.href='approve_gym.php'</script>";
}

?>