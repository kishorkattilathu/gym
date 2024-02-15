<?php include 'layout/header.php'; ?>

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
                            <th>Qualification</th>
                            <th>Experience</th>
                            <th>Specialties</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                                 <?php
                                  include '../connect.php';
                                  $select="SELECT * FROM trainees WHERE owner_email='$mail'";
                                  $execute=mysqli_query($connect,$select);
                                  $i=1;
                                  while ($fetch=mysqli_fetch_array($execute)) 
                                  {
                                   
                                  
                                 ?>

                                <tr>
                                    <td><?=$i;?></td>
                                    <td><?=$fetch['trainee_name']?></td>
                                    <td><?=$fetch['qualification']?></td>
                                    <td><?=$fetch['experience']?></td>
                                    <td><?=$fetch['specialties']?></td>
                                    <td><img src="<?='trainee_image/'.$fetch['trainee_image']?> " style="height:150px; width:150px"></td>
                                    <td><a href="edit_trainee.php?id=<?=$fetch['trainee_id']?>" class="btn btn-success">Edit</a></td>
                                    <td><a href="delete_trainee.php?id=<?=$fetch['trainee_id']?>" class="btn btn-danger">Delete</a></td>
                                    
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