<?php include ('layout/header.php'); ?>
<!-- gallery -->

	<div class="gallery">
	<div class="container">
		<h3>Gym Near You</h3>
		<?php
include('connect.php');

$select="SELECT * FROM gym_registration WHERE status='Approved'";
$execute=mysqli_query($connect,$select);
while ($fetch=mysqli_fetch_array($execute)) {
	

?>
		<div class="gallery-grids">
			<a href="single.php?id=<?=$fetch['gym_id']?>"><img style="height: 240px;width:300px;" src="gym_owner/images/<?=$fetch['gym_img']?>"></a>
			<h4><a href="single.php?id=<?=$fetch['gym_id']?>"><?=$fetch['gym_name']?></a></h4>
			<p><?=$fetch['description']?></p>
		</div>
		<?php } ?>
		<div class="clearfix"> </div>
	</div>
	</div>
<?php include ('layout/footer.php'); ?>
