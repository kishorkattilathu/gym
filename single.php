<?php include 'layout2/header.php'; ?>

<!-- //header -->
<!-- single-page -->
<?php
include ('connect.php');
	$id=$_GET['id'];
	$select="SELECT * FROM gym_registration inner join gym_details on gym_details.gym_id=gym_registration.gym_id WHERE gym_registration.gym_id='$id'";
	$execute=mysqli_query($connect,$select);
	$fetch=mysqli_fetch_array($execute);

	//echo "<pre>"; print_r($fetch); echo "</pre>"; //die('end of code');

?>
	<div class="single">
	<div class="container">
		<div class="single-left">
			<div class="single-left-text">
				<h3><?=$fetch['gym_name']?></h3>
				<a href=""><img style="height:417px;width:627px" src="gym_owner/images/<?=$fetch['gym_img']?>" alt=" " /></a>
				<p><?=$fetch['description']?></p>
			</div>
		</div>
		<div class="single-right">
			
			
			<div class="news-right-text1">
				<h3>Recent post</h3>
					<img style="height:417px;width:627px" src="gym_owner/gallery/recent/<?=$fetch['recent_photo']?>">
					<p><label><?=$fetch['recent_details_date']?></label></p>
					<p><?=$fetch['recent_details']?></p>
			</div>
		</div>

		<div class="clearfix"> </div>

		<div class="products">
			<h3>Select Trainer</h3>
			<div class="products-grid">
				<a href="all_trainers.php?id=<?=$fetch['gym_id']?>"><img style="height:435px;width:550px" src="gym_owner/gallery/trainee_logo/<?=$fetch['trainee_logo']?>" alt=" " /></a>
				<h5>Trainers</h5>
				<p><?=$fetch['trainee_detail']?></p>
			</div>
			
			
			<div class="clearfix"> </div>
		</div>

		<div class="products">
			<h3>Joining Plan</h3>
			<div class="products-grid">
				<a href="monthlybooking.php?id=<?=$fetch['gym_id']?>"><img style="height:235px;width:350px" src="gym_owner/gallery/gallery1/<?=$fetch['gallery1']?>" alt=" " /></a>
				<h5>Monthly Plan</h5>
				<p><?=$fetch['gallery1_detail']?></p>
			</div>
			<div class="products-grid">
				<a href="annualbooking.php?id=<?=$fetch['gym_id']?>"><img style="height:235px;width:350px" src="gym_owner/gallery/gallery2/<?=$fetch['gallery2']?>"/></a>
				<h5>Annual Plan</h5>
				<p><?=$fetch['gallery2_detail']?></p>
			</div>
			<div class="products-grid">
				<a href="contact.php?id=<?=$fetch['gym_id']?>"><img style="height:235px;width:350px" src="gym_owner/gallery/gallery3/<?=$fetch['gallery3']?>"></a>
				<h5>Have an issue ? Tell us..</h5>
				<p><?=$fetch['gallery3_detail']?></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
<!-- //single-page -->
<?php include 'layout/footer.php'; ?>
