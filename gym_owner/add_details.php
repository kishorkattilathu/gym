<?php include ('layout/header.php'); ?>

<!--banner-->	
		    <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Profile</span>
				</h2>
		    </div>
		

<div id="wrapper">
 
  <div class="grid-form1 text-center">
           <h3>Add Gym Details</h3>
             <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
            
            </div>
          </div>
          
          <div class="bs-example" data-example-id="form-validation-states">
    
  </div>
  <div class="panel-body">
<?php
  include ('../connect.php');
  $select="SELECT * FROM gym_registration WHERE gym_email='$mail'";
  $execute=mysqli_query($connect,$select);
  $fetch=mysqli_fetch_array($execute);
?>
  	



      <form role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
            
            <input type="hidden" name="email" value="<?=$fetch['gym_email']?>">
            <input type="hidden" name="id" value="<?=$fetch['gym_id']?>">

            <div class="form-group">
              <label class="col-md-2 control-label">Recent Photo</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-picture-o"></i>
                  </span>
                  <input type="file" id="recent_photo" class="form-control1" required=""  name="recent_photo">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Recent Details</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-edit"></i>
                  </span>
                  <input type="text" id="recent_details" class="form-control1"  name="recent_details" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Recent Details Date</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-edit"></i>
                  </span>
                  <input type="text" id="date" class="form-control1"  name="date" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Monthly Plan Photo</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-picture-o"></i>
                  </span>
                  <input type="file" id="gallery1img" class="form-control1" required=""  name="gallery1img" >
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Monthly Plan Details</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-edit"></i>
                  </span>
                  <input type="text" id="gallery1details" class="form-control1"  name="gallery1details" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Annual Plan Photo</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-picture-o"></i>
                  </span>
                  <input type="file" id="gallery2img" class="form-control1" required="" name="gallery2img" >
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Annual Plan Details</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-edit"></i>
                  </span>
                  <input type="text" id="gallery2details" class="form-control1"  name="gallery2details" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Trainee Logo Photo</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-picture-o"></i>
                  </span>
                  <input type="file" id="trainee_logo" class="form-control1" required="" name="trainee_logo" >
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Trainee Details</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-edit"></i>
                  </span>
                  <input type="text" id="trainee_details" class="form-control1"  name="trainee_details" required="">
                </div>
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-2 control-label">Contact Logo Photo</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-picture-o"></i>
                  </span>
                  <input type="file" id="gallery3img" class="form-control1" required=""  name="gallery3img" >
                </div>
              </div>
            </div>

            
            <div class="form-group">
              <label class="col-md-2 control-label">Contact Details</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-edit"></i>
                  </span>
                  <input type="text" id="gallery3details" class="form-control1"  name="gallery3details" required="">
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

  <?php
    if (isset($_POST['button'])) 
  {  
      $email=$_POST['email'];
      $id=$_POST['id'];
      $recent_photo=$_FILES['recent_photo']['name'];
      $recent_details=$_POST['recent_details'];
      $date=$_POST['date'];
      $gallery1img=$_FILES['gallery1img']['name'];
      $gallery1details=$_POST['gallery1details'];
      $gallery2img=$_FILES['gallery2img']['name'];
      $gallery2details=$_POST['gallery2details'];
      $gallery3img=$_FILES['gallery3img']['name'];
      $gallery3details=$_POST['gallery3details'];

      $trainee_logo=$_FILES['trainee_logo']['name'];
      $trainee_details=$_POST['trainee_details'];

      $select2="SELECT * FROM gym_details WHERE gym_email='$mail'";
      $execute2=mysqli_query($connect,$select2);
      $count=mysqli_num_rows($execute2);
// echo "<pre>"; print_r($_FILES); echo "</pre>"; die('end of code');
      if ($count==0) 
    {
        
      $Image=explode('.',$recent_photo);
      $time=Time();
      $extn=end($Image);
      $allowextn=array("jpeg","jpg","png");
      $photo=$time.'.'.$extn;

      if (in_array($extn,$allowextn)) 
      {
        $Image1=explode('.',$gallery1img);
        $time1=Time();
        $extn1=end($Image1);
        $allowextn1=array("jpeg","png","jpg");
        $photo1=$time1.'.'.$extn1;

        if (in_array($extn1,$allowextn1)) 
        {     

            $Image2=explode('.',$gallery2img);
            $time2=Time();
            $extn2=end($Image2);
            $allowextn2=array("jpeg","png","jpg");
            $photo2=$time2.'.'.$extn2;

            if (in_array($extn2,$allowextn2)) 
            {
                $Image3=explode('.',$gallery3img);
                $time3=Time();
                $extn3=end($Image3);
                $allowextn3=array("jpeg","jpg","png");
                $photo3=$time.'.'.$extn3;

                if (in_array($extn3,$allowextn3)) 
                {
                    $Image4=explode('.',$trainee_logo);
                    $time4=Time();
                    $extn4=end($Image4);
                    $allowextn4=array("jpeg","png","jpg");
                    $photo4=$time4.'.'.$extn4;

                    if (in_array($extn4, $allowextn4)) 
                    {
                     
                    
                        move_uploaded_file($_FILES['trainee_logo']['tmp_name'],'gallery/trainee_logo/'.$photo4);
                        move_uploaded_file($_FILES['gallery3img']['tmp_name'],'gallery/gallery3/'.$photo3);
                        move_uploaded_file($_FILES['gallery2img']['tmp_name'],'gallery/gallery2/'.$photo2);
                        move_uploaded_file($_FILES['gallery1img']['tmp_name'],'gallery/gallery1/'.$photo1);
                        move_uploaded_file($_FILES['recent_photo']['tmp_name'],'gallery/recent/'.$photo);

                        $insert1="INSERT INTO gym_details
                        (gym_id,gym_email,recent_photo,recent_details,recent_details_date,gallery1,gallery1_detail,gallery2,gallery2_detail,gallery3,gallery3_detail,trainee_logo,trainee_detail) 
                        values('$id','$email','$photo','$recent_details','$date','$photo1','$gallery1details','$photo2','$gallery2details','$photo3','$gallery3details','$photo4','$trainee_details')";

                        $execute1=mysqli_query($connect,$insert1);

                        if ($execute1) 
                        {
                          echo "<script>alert('Details inserted successfully')</script>";
                          echo "<script>window.location.href='manage_details.php'</script>";
                        }
                        else
                        {
                          echo "<script>alert('Failed please try again')</script>";
                          echo"<script>window.location.href='add_details.php'</script>";
                        }
                    }
                    else
                    {
                      echo "<script>alert('Wrong file for Trainee logo')</script>";
                      echo "<script>window.location.href='add_details.php'</script>";
                    }
                }
                else
                {
                  echo "<script>alert('Wrong file for contact photo')</script>";
                  echo "<script>window.location.href='add_details.php'</script>";
                }
            }
            else
            {
              echo "<script>alert('Wrong file for Annual photo')</script>";
              echo "<script>window.location.href='add_details.php'</script>";
            }
         }
        else
        {
          echo "<script>alert('wrong file for Monthly photo')</script>";
          echo "<script>window.location.href='add_details.php'</script>";
        }

      }
      else
      {
        echo "<script>alert('wrong file for recent photo')</script>";
        echo "<script>window.location.href='add_details.php'</script>";
      }
    }
    else
    {
      echo "<script>alert('Details Already inserted')</script>";
      echo "<script>window.location.href='manage_details.php'</script>";
    }
  }

  ?>


<?php include ('layout/footer.php'); ?>


