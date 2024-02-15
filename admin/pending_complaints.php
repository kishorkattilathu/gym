<?php include('layout/header.php'); ?>


<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">

		<div class="col-md-12">

			<div class="table-responsive bs-example widget-shadow" id="">
				    <label><h3>Pending Complaints</h3></label><br>
                <table id="sailorTable" class="table table-bordered" width="150%">
 
                        <thead>
                         <tr>
                            <th>Sr no:</th>
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>Customer Phone</th>
                            <th>Customer Message</th>
                            <th>Reply</th>
                            <th>Action</th>
                            
                            
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                include '../connect.php';
                                $select="SELECT * FROM admin_complaint WHERE reply='Pending'";
                                $execute=mysqli_query($connect,$select);
                                $i=1;
                                while ($fetch=mysqli_fetch_array($execute)) 
                                {

                                
                            ?>

                                    <tr>
                                        <td><?=$i;?></td>
                                        <td><?=$fetch['customer_name']?></td>
                                        <td><?=$fetch['customer_email']?></td>
                                        <td><?=$fetch['customer_phone']?></td>
                                        <td><?=$fetch['customer_message']?></td>
                                        <td><?=$fetch['reply']?></td>
                                        <td><a class="btn btn-success" href="reply_admin_complaints.php?id=<?=$fetch['admin_complaint_id']?>">Reply</a></td>
                                       
                                        
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
