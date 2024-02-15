<?php include('layout/header.php'); ?>

<!DOCTYPE html>
<html>
<head>
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
</head>
<body>
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <label><h3>All Complaints</h3></label><br>

                <table>
                    <thead>
                        <tr>
                            <th>Sr no:</th>
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>Customer Phone</th>
                            <th>Customer Message</th>
                            <th>Reply</th>
                        </tr>
                    </thead>
                        <tbody>

                            <?php
                                include '../connect.php';
                                $select="SELECT * FROM admin_complaint";
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

</body>
</html>





<?php include('layout/footer.php'); ?>
