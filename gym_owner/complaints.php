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

<h2 class="text-center">Pending Compalints</h2>

<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<table>
  <tr>
  	<th>Sr No.</th>
    <th>Complaint</th>
    <th>Email</th>
    <th>Customer Contact No:</th>
    <th>Action</th>
  </tr>
  <?php
  	
	include '../connect.php';
	$i=1;
	$select="SELECT * FROM complaint WHERE reply='Pending' and gym_email='$mail'";
	$execute=mysqli_query($connect,$select);
	while ($fetch=mysqli_fetch_array($execute)) 
	{
		
?>
  <tr>
    <td><?=$i;?></td>
    <td><?=$fetch['message']?></td>
    <td><?=$fetch['c_email']?></td>
    <td><?=$fetch['c_phone']?></td>
    <td><a href="complaints_reply.php?id=<?=$fetch['complaint_id']?>"><button class="btn btn-success">Reply</button></a></td>
  </tr>

  <?php
  	$i++;
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