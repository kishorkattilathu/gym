<?php include 'layout/header.php'; ?>
<?php
	include 'connect.php';
	$id=$_GET['id'];

?>

	<div class="single">
		<div class="container">
			<div class="clearfix"> </div>
		
			<div class="products">
				<h3>Select Trainer</h3>
				<?php
					$select="SELECT * FROM trainees WHERE gym_owner_id='$id'";
					$execute=mysqli_query($connect,$select);
					while ($fetch=mysqli_fetch_array($execute)) 
					{
				?>
						<div class="products-grid">
							<a href="booking_trainee.php?id=<?=$fetch['trainee_id']?>"><img style="height:235px;width:350px" src="gym_owner/trainee_image/<?=$fetch['trainee_image']?>" alt=" " /></a>
							<h5><?=$fetch['trainee_name']?></h5>
							<p><strong>Qualification:</strong><?=$fetch['qualification']?></p>
							<p><strong>Specialties:</strong><?=$fetch['specialties']?></p>
							<p><strong>Experience:</strong><?=$fetch['experience']?></p>
						</div>
					<?php
					}
					?>
				
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

<?php include 'layout/footer.php'; ?>