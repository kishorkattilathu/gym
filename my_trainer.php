<?php include 'layout/header.php'; ?>

<br>
<br>
<br>
<br>



<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2 class="text-center">My Trainer</h2>

<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<table>
  <tr>
    <th>Trainer Name</th>
    <th>Trainer Image</th>
    <th>Qualification</th>
    <th>Specialties</th>
    <th>Booking Status</th>
    <th>Payment Status</th>
    <th>Action</th>
  </tr>
<?php
    include 'connect.php';
    $select="SELECT * FROM booking inner join trainees on booking.trainee_id=trainees.trainee_id WHERE user_email='$user_mail'";
    $execute=mysqli_query($connect,$select);
    $count=mysqli_num_rows($execute);
    $fetch=mysqli_fetch_array($execute);
     if ($count==1) 
     {
       
     
?>

          <tr>
            <td><?=$fetch['trainee_name']?></td>
            <td><img src="gym_owner/trainee_image/<?=$fetch['trainee_image']?>" style=height:100px;width100px ></td>
            <td><?=$fetch['qualification']?></td>
            <td><?=$fetch['specialties']?></td>
            <td><?=$fetch['booking_status']?></td>
            <td><?=$fetch['payment_status']?></td>
              <?php
                 if ($fetch['payment_status']=='Pending') 
                  {
                  ?>
                  <td><a href="delete_booked_trainee.php?id=<?=$fetch['booking_id']?>" class="btn btn-danger">Cancel</a></td>

                <?php
                }   
                  else
                {
                 ?>
                 <td><a class="btn btn-success">Completed</a></td>
                 <?php
                  }
                  ?>
           
          </tr>

      <?php 
      }
      else
      {
        echo "<script>alert('Trainee Not Booked')</script>";
        echo "<script>window.location.href='all_gym.php'</script>";
      }

      ?>

 
  
 
</table>
		</div>
		<div class="col-md-1"></div>
	</div>
	
</div>

</body>
</html>

<br>
<br>
<br>
<br>
<br>
<?php include 'layout/footer.php'; ?>