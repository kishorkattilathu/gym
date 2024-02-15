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
           <h3>Manage Gym Details</h3>
             <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
            
            </div>
          </div>
          
          <div class="bs-example" data-example-id="form-validation-states">
    
  </div>
  <div class="panel-body">
<?php
  include ('../connect.php');
  $select="SELECT * FROM gym_details WHERE gym_email='$mail'";
  $execute=mysqli_query($connect,$select);
  $fetch=mysqli_fetch_array($execute);


?>
  	



      <form role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
            
            
            

            <div class="form-group">
              <label class="col-md-2 control-label">Recent Old Photo</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-picture-o"></i>
                  </span>
                  <img src="gallery/recent/<?=$fetch['recent_photo']?>" style="height:150px;width:150px">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">New Recent Photo</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-picture-o"></i>
                  </span>
                  <input type="file" id="recent_photo" class="form-control1"  name="recent_photo">
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
                  <input type="text" id="recent_details" class="form-control1" value="<?=$fetch['recent_details']?>"  name="recent_details" required="">
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
                  <input type="text" id="date" class="form-control1" value="<?=$fetch['recent_details_date']?>"  name="date" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Old Monthly Photo</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-picture-o"></i>
                  </span>
                  <img src="gallery/gallery1/<?=$fetch['gallery1']?>"style="width:150px;height:150px">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">New Monthly Photo</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-picture-o"></i>
                  </span>
                  <input type="file" id="gallery1img" class="form-control1"  name="gallery1img" >
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Monthly Details</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-edit"></i>
                  </span>
                  <input type="text" id="gallery1details" value="<?=$fetch['gallery1_detail']?>" class="form-control1"  name="gallery1details" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Old Annual Photo</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-picture-o"></i>
                  </span>
                  <img src="gallery/gallery2/<?=$fetch['gallery2']?>" style="height:150px;width:150px">
                </div>
              </div>
            </div> 

            <div class="form-group">
              <label class="col-md-2 control-label">New Annual Photo</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-picture-o"></i>
                  </span>
                  <input type="file" id="gallery2img" class="form-control1"  name="gallery2img" >
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Annual Details</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-edit"></i>
                  </span>
                  <input type="text" id="gallery2details" class="form-control1" value="<?=$fetch['gallery2_detail']?>" name="gallery2details" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Old Trainee Logo</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-picture-o"></i>
                  </span>
                  <img src="gallery/trainee_logo/<?=$fetch['trainee_logo']?>" style="height:150px;width:150px">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">New Trainee Logo</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-picture-o"></i>
                  </span>
                  <input type="file" id="trainee_logo" class="form-control1"  name="trainee_logo" >
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
                  <input type="text" id="trainee_detail" class="form-control1" value="<?=$fetch['trainee_detail']?>" name="trainee_detail" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Old Contact Photo</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-picture-o"></i>
                  </span>
                  <img src="gallery/gallery3/<?=$fetch['gallery3']?>" style="height:150px;width:150px">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">New Contact Photo</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-picture-o"></i>
                  </span>
                  <input type="file" id="gallery3img" class="form-control1"  name="gallery3img" >
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
                  <input type="text" id="gallery3details" class="form-control1"  value="<?=$fetch['gallery3_detail']?>" name="gallery3details" required="">
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

  <?php
    if (isset($_POST['button'])) 
    {

      // echo "<pre>"; print_r($_FILES); echo "</pre>"; die('end of code');
      // $recent_photo=$_FILES['recent_photo']['name'];
      $recent_details=$_POST['recent_details'];
      $date=$_POST['date'];

      // $gallery1img=$_FILES['gallery1img']['name'];
      $gallery1details=$_POST['gallery1details'];

      // $gallery2img=$_FILES['gallery2img']['name'];
      $gallery2details=$_POST['gallery1details'];

      // $trainee_logo=$_FILES['trainee_logo']['name'];
      $trainee_detail=$_POST['trainee_detail'];

      // $gallery3img=$_FILES['gallery3img']['name'];
      $gallery3details=$_POST['gallery1details'];


      $sql_img='';
      if (!empty($_FILES)) 
      {
        foreach ($_FILES as $key => $value) 
        {
          if (!empty($value['name'])) 
          {
            # code...
          
            switch ($key) 
            {
              case 'recent_photo':
                $path='recent';
                $sql_colum_name='recent_photo';
                break;

              case 'gallery1img':
                $path='gallery1';
                $sql_colum_name='gallery1';
                break;

              case 'gallery2img':
                $path='gallery2';
                $sql_colum_name='gallery2';
                break;

                case 'trainee_logo':
                  $path='trainee_logo';
                  $sql_colum_name='trainee_logo';
                  break;

              case 'gallery3img':
                $path='gallery3';
                $sql_colum_name='gallery3';
                break;
            }

             $Image=explode('.',$value['name']);
             $time=Time();
             $extn=end($Image);
             $allowextn=array("jpeg","png","jpeg");
             $photo=$time.'.'.$extn;

             if (in_array($extn,$allowextn)) 
             {
               move_uploaded_file($value['tmp_name'],'gallery/'.$path.'/'.$photo);
               $sql_img.=",$sql_colum_name='$photo'";
             }
             else
             {
              echo "<script>alert('wrong file please try again')</script>";
              echo "<script>window.location.href='manage_details.php'</script>";
             }
           }
        }
        
      }
      

      // $image= !empty($_FILES['recent_photo']['name'])?$_FILES['recent_photo']['name']:'';
      // if (!empty($image))
      // {
      //    $Image=explode('.',$image);
      //    $time=Time();
      //    $extn=end($Image);
      //    $allowextn=array("jpeg","png","jpeg");
      //    $photo=$time.'.'.$extn;

      //    if (in_array($extn,$allowextn)) 
      //    {
      //      move_uploaded_file($_FILES['recent_photo']['tmp_name'],'gallery/recent/'.$photo);
      //      $img=",recent_photo='$photo'";
      //    }
      //    else
      //    {
      //     echo "<script>alert('wrong file for recent photos')</script>";
      //     echo "<script>window.location.href='manage_details.php'</script>";
      //    }
      // }

      // $img1='';
      // $Image1=!empty($_FILES['gallery1img']['name'])?$_FILES['gallery1img']['name']:'';
      // if (!empty($Image1)) 
      // {
      //   $image1=explode('.',$Image1);
      //   $extn1=end($image1);
      //   $time1=Time();
      //   $allowextn1=array("jpeg","png","jpeg");
      //   $photo1=$time1.'.'.$extn1;
      //   if (in_array($extn1,$allowextn1)) 
      //   {
      //     move_uploaded_file($_FILES['gallery1img']['name'],'gallery/gallery1/'.$photo1);
      //     $img1=",gallery1='$photo1'";
          
      //   }
      //   else
      //   {
      //     echo "<script>alert('wrong file for gallery 1 image')</script>";
      //     echo "<script>window.location.href='manage_details.php'</script>";
      //   }
      // }

      // $img2='';
      // $Image2=!empty($_FILES['gallery2img']['name'])?$_FILES['gallery2img']['name']:'';
      // if (!empty($Image2))
      // {
      //  $image2=explode('.',$Image2);
      //  $extn2=end($image2);
      //  $allowextn2=array("jpeg","png","jpeg");
      //  $time2=Time();
      //  $photo2=$time2.'.'.$extn2;
      //  if (in_array($extn2,$allextn2)) 
      //  {
      //    move_uploaded_file($_FILES['gallery2img']['tmp_name'],'gallery/gallery2/'.$photo2);
      //    $img2=",gallery2='$photo2'";
      //  }
      //  else
      //  {
      //   echo "<script>alert('Wrong file for gallery 2')</script>";
      //   echo "<script>window.location.href='manage_details.php'</script>";
      //  }
      // }

      // $img3='';
      // $Image3=!empty($_FILES['gallery3img']['name'])?$_FILES['gallery3img']['name']:'';
      // if (!empty($Image)) 
      // {
      // $image3=explode('.',$Image3);
      // $time3=Time();
      // $extn3=end($image3);
      // $allowextn3=array("jpeg","jpg","png");
      // $photo3=$time.'.'.$extn3;

      // if (in_array($extn3,$allowextn3)) 
      //   { 
      //     move_uploaded_file($_FILES['gallery3img']['name'],'gallery/gallery3/'.$photo3);
      //     $img3=",gallery3='$photo3'";
      //   }
      //   else
      //   {
      //     echo"<script>alert('wrong file for gallery 3')</script>";
      //     echo "<script>window.location.href='manage_details.php'</script>";
      //   }
      // }


         $update="UPDATE gym_details SET recent_details='$recent_details',recent_details_date='$date',gallery1_detail='$gallery1details',gallery2_detail='$gallery2details',trainee_detail='$trainee_detail',gallery3_detail='$gallery3details'".$sql_img." WHERE gym_email='$mail'"; //die('not uploaded');

      $execute1=mysqli_query($connect,$update);
      if ($execute1==1) 
      {
        echo"<script>alert('Updated successfully')</script>";
        echo"<script>window.location.href='manage_details.php'</script>";
      }
      else
      {
        echo "<script>alert('Failed please try again')</script>";
        echo "<script>window.location.href='manage_details.php'</script>";
      }


    }
  ?>

  


<?php include ('layout/footer.php'); ?>


<!-- ".$img1."".$img2."".$img3." -->


