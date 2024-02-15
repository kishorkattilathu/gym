<?php include 'layout/header.php'; ?>
			<?php
				include '../connect.php';
				$select1="SELECT * FROM gym_registration WHERE gym_email='$mail'";
				$execute1=mysqli_query($connect,$select1);
				$fetch1=mysqli_fetch_array($execute1);
			?>


<div class="container">
  <div class="row">

    <div class="col-md-12">

      <div class="table-responsive" id="" class="text-center">
            <label class="text-center"><h3 class="text-center">Manage Trainees</h3></label><br>
                <table id="sailorTable" class="table table-striped table-bordered text-center" width="150%">
 
                        <thead>
                         <tr>
                            <th>Sr no:</th>
                            <th>Trainee Name</th>
                            <th>User Email</th>
                            <th>Approve</th>
                            <th>Reject</th>
                            
                            
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
								include '../connect.php';
								$select="SELECT * FROM booking inner join trainees on trainees.trainee_id=booking.trainee_id WHERE booking_status='Pending' and trainees.owner_email='$mail'";
								$execute=mysqli_query($connect,$select);
								$i=1;
								while ($fetch=mysqli_fetch_array($execute)) 
								{
									
								
							?>
                                <tr>
                                    <td><?=$i;?></td>
                                    <td><?=$fetch['trainee_name'];?></td>
                                    <td><?=$fetch['user_email'];?></td>
                                    <td><a href="approve_trainee.php?id=<?=$fetch['booking_id']?>" class="btn btn-success">Approve</a></td>
                                    <td><a href="reject_trainee.php?id=<?=$fetch['booking_id']?>" class="btn btn-danger">Reject</a></td>
                                </tr>
                               <?php
                               $i++;
                               	}
                               ?>
                               
                        </tbody>
                </table>
            </div>
      </div>
  </div>
</div>


<?php include 'layout/footer.php';?>