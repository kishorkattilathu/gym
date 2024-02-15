<?php
include '../connect.php';
$id=$_GET['id'];
$delete="DELETE FROM trainees WHERE trainee_id='$id'";
$execute=mysqli_query($connect,$delete);
if ($execute==1) 
{
	echo "<script>alert('Deleted Successfully')</script>";
	echo "<script>window.location.href='manage_trainees.php'</script>";
}
else
{
	echo "<script>alert('Failed Please Try Again')</script>";
	echo "<script>window.location.href='manage_trainees.php'</script>";
}

?>