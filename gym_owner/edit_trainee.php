<?php include 'layout/header.php'; ?>

<?php
	include '../connect.php';
	$id=$_GET['id'];
	$select="SELECT * FROM trainees WHERE trainee_id='$id'";
	$execute=mysqli_query($connect,$select);
	$fetch=mysqli_fetch_array($execute);
?>


<div id="wrapper">
  <div class="grid-form1 text-center">
           <h3>Edit Trainees</h3>
             <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
            </div>
          </div>
          <div class="bs-example" data-example-id="form-validation-states">
  				</div>
  <div class="panel-body">

      <form role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
          
          <input type="hidden" name="owner_email" value="<?=$fetch['owner_email']?>">
            
            <div class="form-group">
              <label class="col-md-2 control-label">Trainee Name</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-pen-o"></i>
                  </span>
                  <input id="name" class="form-control1" name="trainee_name" value="<?=$fetch['trainee_name']?>" type="text" required>
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
                  <input id="qualification" class="form-control1" required="" name="qualification" value="<?=$fetch['qualification']?>" type="text">
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
                  <input id="experience" class="form-control1" name="experience" required="" value="<?=$fetch['experience']?>" type="text">
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
                  <input id="specialties" class="form-control1"  name="specialties" required="" value="<?=$fetch['specialties']?>" type="text">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Old Image</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-image-o"></i>
                  </span>
                 <img src="<?='trainee_image/'.$fetch['trainee_image']?>">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">New Image</label>
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
			      <button class="btn btn-primary" type="submit" name="button">Update</button>
			    </div>
			  

      </form>
  </div>
  
  </div>
  </div>

<?php include 'layout/footer.php'; ?>

<?php
	if (isset($_POST['button'])) 
	{
		$trainee_name=$_POST['trainee_name'];
		$qualification=$_POST['qualification'];
		$experience=$_POST['experience'];
		$specialties=$_POST['specialties'];

    $img_sql='';
    $trainee_image=!empty($_FILES['trainee_image']['name'])?$_FILES['trainee_image']['name']:'';

    if (!empty($trainee_image)) 
    {
     $explode=explode('.', $trainee_image);
     $time=Time();
     $extn=end($explode);
     $allowextn=array("jpeg","png","jpg");
     $photo=$time.'.'.$extn;
     if (in_array($extn,$allowextn)) 
     {
       move_uploaded_file($_FILES['trainee_image']['tmp_name'],'trainee_image/'.$photo);
       $img_sql=",trainee_image='$photo'";
     }
     else
     {
      echo "<script>alert('Wrong File Please Try Again')</script>";
      echo "<script>window.location.href='manage_trainees.php'</script>";
     }
    }


		$update="UPDATE trainees SET trainee_name='$trainee_name',qualification='$qualification',experience='$experience',specialties='$specialties'".$img_sql." WHERE trainee_id='$id'";
		$execute1=mysqli_query($connect,$update);
		if ($execute1)
		{
			echo "<script>alert('Updated Successfully')</script>";
      echo "<script>window.location.href='manage_trainees.php'</script>";
		}
    else
    {
      echo "<script>alert('Failed Please Try Again')</script>";
      echo "<script>window.location.href='manage_trainees.php'</script>";
    }
	}
?>