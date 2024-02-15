<?php include('layout/header.php'); ?>


<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">

		<div class="col-md-12">
                    <center><label><h3>Registration Approve Form</h3></label></center><br>

			<div class="table-responsive bs-example widget-shadow" id="">
                <table id="sailorTable" class="table table-bordered" width="150%">
 
                        <thead>
                         <tr>
                            <th>Sr no:</th>
                            <th>Owner Name</th>
                            <th>Gym Name</th>
                            <th>Gym Location</th>
                            <th>Gym Email</th>
                            <th>Gym Website</th>
                            <th>Gender</th>
                            <th>Mobile No:</th>
                            <th>Address</th>
                            <!-- <th>Description</th> -->
                            <th>Gym Image</th>
                            <th>License</th>
                            <th>Registered By</th>
                            <th>Status</th>
                            <th>Approve</th>
                            <th>Reject</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                                	<?php

                    			include('../connect.php');
                    			$select="SELECT * FROM gym_registration";
                    			$execute=mysqli_query($connect,$select);
                    			$i=1;
                    			while ($fetch=mysqli_fetch_array($execute))
                    			{
                    			?>

                                <tr>
                                    <td><?=$i;?></td>
                                    <td><?=$fetch['owner_name']?></td>
                                    <td><?=$fetch['gym_name']?></td>
                                    <td><?=$fetch['location']?></td>
                                    <td><?=$fetch['gym_email']?></td>
                                    <td><?=$fetch['website']?></td>
                                    <td><?=$fetch['gender']?></td>
                                    <td><?=$fetch['mobile']?></td>
                                    <td><?=$fetch['address']?></td>
                                    <!-- <td><?=$fetch['description']?></td> -->
                                    <td><img style="height: 150px;width: 150px" src="<?='../gym_owner/images/'.$fetch['gym_img']?>"></td>
                                    <td><img style="height: 150px;width: 150px" src="<?='../gym_owner/images1/'.$fetch['license']?>"></td>
                                    <td><?=$fetch['owner_type']?></td>
                                    <td><?=$fetch['status']?></td>
                                    <?php
                                         if ($fetch['status']!='Approved') {
                                            
                                         
                                    ?>
                                    <td><a class="btn btn-success" href="approve.php?id=<?=$fetch['gym_id']?>">Approve</a></td>
                                    <td>
                                    <a class="btn btn-danger" href="reject.php?id=<?=$fetch['gym_id']?>">Reject</a></td>
                                    <?php
                                        }
                                    ?>
                                    
                                    
                                </tr>
                                <?php
                                $i++; }
                                ?>
                        </tbody>
                </table>
            </div>
    	</div>
	</div>
</div>


<style>
                table 
                {
                  font-family: arial, sans-serif;
                  border-collapse: collapse;
                  width: 100%;
                }

                td, th 
                {
                  border: 1px solid #dddddd;
                  text-align: left;
                  padding: 8px;
                }

                tr:nth-child(even) 
                {
                  background-color: #dddddd;
                }
    </style>

<?php include('layout/footer.php'); ?>
