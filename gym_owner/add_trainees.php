<?php include ('layout/header.php'); ?>

<?php
    include '../connect.php';
    $select="SELECT * FROM gym_registration WHERE gym_email='$mail'";
    $execute1=mysqli_query($connect,$select);
    $fetch=mysqli_fetch_array($execute1);
?>

<div id="wrapper">
 
  <div class="grid-form1 text-center">
           <h3>Add Trainees</h3>
             <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
            
            </div>
          </div>
          
          <div class="bs-example" data-example-id="form-validation-states">
    
  </div>
  <div class="panel-body">

  	



      <form role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
          
            <input type="hidden" name="gym_owner_id" value="<?=$fetch['gym_id']?>">
            <!-- <input type="hidden" name="gym_owner_email" value="<?=$fetch['gym_email']?>"> -->
            <input type="hidden" name="email" value="<?=$mail?>">
            
            <div class="form-group">
              <label class="col-md-2 control-label">Trainee Name</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-pen-o"></i>
                  </span>
                  <input id="name" class="form-control1" name="name"  type="text">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Qualification</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-pen-o"></i>
                  </span>
                  <input id="qualification" class="form-control1" name="qualification"  type="text">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Experience</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-name-o"></i>
                  </span>
                  <input id="experience" class="form-control1" name="experience" type="text">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Specialties</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-location-o"></i>
                  </span>
                  <input id="specialties" class="form-control1"  name="specialties" type="text">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Trainee Image</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-image-o"></i>
                  </span>
                  <input type="file" id="trainee_image" class="form-control1"  name="trainee_image">
                </div>
              </div>
            </div>
            
			    <div>
			      <button class="btn btn-primary" type="submit" name="button">Add</button>
			    </div>
			  

      </form>
  </div>
  
  </div>
  </div>


<?php include ('layout/footer.php'); ?>

<?php
      include '../connect.php';
      if (isset($_POST['button'])) 
      {
       $gym_owner_id=$_POST['gym_owner_id'];
       // $gym_owner_email=$_POST['gym_owner_email'];
       $name=$_POST['name'];
       $qualification=$_POST['qualification'];
       $experience=$_POST['experience'];
       $specialties=$_POST['specialties'];
       $email=$_POST['email'];

       $trainee_image=$_FILES['trainee_image']['name'];
       $Image=explode('.',$trainee_image);
       $time=Time();
       $extn=end($Image);
       $allowextn=array("jpeg","png","jpeg");
       $photo=$time.'.'.$extn;

       if (in_array($extn, $allowextn)) 
       {
          move_uploaded_file($_FILES['trainee_image']['tmp_name'],'trainee_image/'.$photo);

          $insert="INSERT INTO trainees
          (gym_owner_id,trainee_name,qualification,experience,specialties,trainee_image,owner_email) 
          values('$gym_owner_id','$name','$qualification','$experience','$specialties','$photo','$email')";
          $execute=mysqli_query($connect,$insert);
          if ($execute) 
          {
            echo "<script>alert('Details inserted successfully')</script>";
            echo "<script>window.location.href='manage_trainees.php'</script>";
          }
          else
          {
            echo "<script>alert('Failed please try again')</script>";
            echo "<script>window.location.href='add_trainees.php'</script>";
          }

       }
       else
       {
        echo "<script>alert('wrong file try again')</script>";
        echo "<script>window.location.href='add_trainees.php'</script>";
       }
        
      }
?>


