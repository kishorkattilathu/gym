<?php include 'layout/header.php'; ?>
<?php
include ('../connect.php');
$id=$_GET['id'];


$update="UPDATE gym_registration set status='Approved' WHERE gym_id='$id'";
$execute=mysqli_query($connect,$update);
if ($execute) 
{
	echo "<script>alert('Approved Successfully')</script>";
	echo "<script>window.location.href='approve_gym.php'</script>";
}
else
{
	echo "<script>alert('Failed please Try again')</script>";
	echo "<script>window.location.href='approve_gym.php'</script>";
}

?>
<?php include 'layout/footer.php'; ?>
