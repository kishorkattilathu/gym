<?php include ('layout/header.php'); ?>

<!--banner-->	
		    
		

<div id="wrapper">
 
  <div class="grid-form1 text-center">
           <h3>My Profile</h3>
             <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
            
            </div>
          </div>
          
          <div class="bs-example" data-example-id="form-validation-states">
    
  </div>
  <div class="panel-body">

  	<?php
		include('../connect.php');
		$select="SELECT * FROM gym_registration WHERE gym_email='$mail'";
		$execute=mysqli_query($connect,$select);
		$fetch=mysqli_fetch_array($execute);
    $old_gym=$fetch['gym_img'];
    $old_license=$fetch['license'];

		?>



      <form role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
            
            
            <div class="form-group">
              <label class="col-md-2 control-label">Your Full Name</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-name-o"></i>
                  </span>
                  <input id="name" class="form-control1" name="name" value="<?=$fetch['owner_name']?>" type="text">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Gym Name</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-name-o"></i>
                  </span>
                  <input id="gymname" class="form-control1" name="gymname"  value="<?=$fetch['gym_name']?>" type="text">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Location</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-location-o"></i>
                  </span>
                  <input id="location" class="form-control1"  name="location" value="<?=$fetch['location']?>" type="text">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Email</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-envelope-o"></i>
                  </span>
                  <input id="email" class="form-control1" name="email" readonly="" value="<?=$fetch['gym_email']?>" required="" type="text">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">website</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-name-o"></i>
                  </span>
                  <input id="website" class="form-control1" name="website" readonly="" type="text" value="<?=$fetch['website']?>" placeholder="optional">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Type</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-name-o"></i>
                  </span>
            <select name="gender" class="form-control1"  value="<?=$fetch['gender']?>"
                <option value="Men">Men</option>
                <option value="Women">Women</option>
                <option value="Both">Both</option>
            </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Mobile No:</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-mobile-o"></i>
                  </span>
                  <input id="mobile" class="form-control1" name="mobile" type="text" value="<?=$fetch['mobile']?>">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Address</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-address-o"></i>
                  </span>
                  <input id="address" class="form-control1" name="address" type="text" value="<?=$fetch['address']?>">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Description</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-pen-o"></i>
                  </span>
                  <input id="description" class="form-control1" name="description" type="text" value="<?=$fetch['description']?>" placeholder="optional">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Password</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-key"></i>
                  </span>
                  <input type="text" class="form-control1" name="password" value="<?=$fetch['password']?>">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">old image</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <img src="images/<?=$fetch['gym_img']?>" style="height:150px;width:150px">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">New Gym image</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-image-o"></i>
                  </span>
                  <input type="file" id="img" class="form-control1" value="<?=$fetch['gym_img']?>" name="gymimg">
                </div>
              </div>
            </div>

              <label class="col-md-2 control-label">old license</label>
                <div class="input-group input-icon right">
                  <img src="images1/<?=$fetch['license']?>" style="height:150px;width:150px">
                </div>


            <div class="form-group">
              <label class="col-md-2 control-label">New License</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-image-o"></i>
                  </span>
        <input type="file" id="img" class="form-control1" name="licenseimg" value="<?=$fetch['license']?>">
                  
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


<?php include ('layout/footer.php'); ?>


<?php
		if (isset($_POST['button'])) 
  {
     
    

    // if ($image!='') 
    //       {
    //              $Image=explode('.',$image);
    //              $time=Time();
    //              $extn=end($Image);
    //              $allowextn=array("jpeg","png","jpg");
    //              $photo=$time.'.'.$extn;

    //              if (in_array($extn,$allowextn)) 
    //              {
    //                move_uploaded_file($_FILES['img']['tmp_name'],'images/'.$photo);

    //                 $name=$_POST['name'];
    //                 $gymname=$_POST['gymname'];
    //                 $location=$_POST['location'];
    //                 $email=$_POST['email'];
    //                 $website=$_POST['website'];
    //                 $gender=$_POST['gender'];
    //                 $mobile=$_POST['mobile'];
    //                 $address=$_POST['address'];
    //                 $description=$_POST['description'];
    //                 $password=$_POST['password'];

    //                 $update="UPDATE gym_registration 
    //       SET owner_name='$name',gym_name='$gymname',location='$location',website='$website',
    //       gender='$gender',mobile='$mobile',address='$address',description='$description',gym_img='$photo',password='$password' 
    //       WHERE gym_email='$mail'";
    //                       $execute1=mysqli_query($connect,$update);
    //                       if ($execute1) 
    //                       {
    //                         echo "<script>alert('Updated Successfully')</script>";
    //                         echo "<script>window.location.href='profile.php'</script>";
    //                       }
    //                       else
    //                       {
    //                         echo "<script>alert('Failed Please Try Again')</script>";
    //                         echo "<script>window.location.href='profile.php'</script>";
    //                       }

    //              }
    //              else
    //              {
    //               echo "<script>alert('wrong file try again')</script>";
    //               echo "<script>window.location.href='profile.php'</script>";
    //              }
    //       }



    // else
    // {
        $name=$_POST['name'];
        $gymname=$_POST['gymname'];
        $location=$_POST['location'];
        $email=$_POST['email'];
        $website=$_POST['website'];
        $gender=$_POST['gender'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        $description=$_POST['description'];
        $password=$_POST['password'];

           $img_sql ='';
        $image = !empty($_FILES['gymimg']['name'])?$_FILES['gymimg']['name']:'';
        // $image = !empty($gymimg)?$gymimg:'';
        if(!empty($image))
        {
           $Image=explode('.',$image);
           $time=Time();
           $extn=end($Image);
           $allowextn=array("jpeg","png","jpg");
           $photo=$time.'.'.$extn;

          if (in_array($extn,$allowextn)) 
          {
           move_uploaded_file($_FILES['gymimg']['tmp_name'],'images/'.$photo);
           $img_sql = ",gym_img='$photo'";
          }
          else
          {
            echo "<script>alert('wrong file for gym image')</script>";
            echo "<script>window.location.href='profile.php'</script>";
          }
        }

           $img1_sql ='';
        $licenseimg = !empty($_FILES['licenseimg']['name'])?$_FILES['licenseimg']['name']:'';
        if(!empty($licenseimg))
        {
           $licenseimg=explode('.',$licenseimg);
           $time=Time();
           $extn=end($licenseimg);
           $allowextn=array("jpeg","png","jpg");
           $photo1=$time.'.'.$extn;

           move_uploaded_file($_FILES['licenseimg']['tmp_name'],'images1/'.$photo1);

           $img1_sql = ",license='$photo1'";
        }

			$update="UPDATE gym_registration 
					SET owner_name='$name',gym_name='$gymname',location='$location',website='$website',gender='$gender',mobile='$mobile',address='$address',description='$description',password='$password'".$img_sql."".$img1_sql." WHERE gym_email='$mail'";
      // echo "<pre>"; print_r($update); echo "</pre>"; die('end of code');
			$execute1=mysqli_query($connect,$update);
			if ($execute1) 
			{
				echo "<script>alert('Updated Successfully')</script>";
				echo "<script>window.location.href='profile.php'</script>";
			}
			else
			{
				echo "<script>alert('Failed Please Try Again')</script>";
				echo "<script>window.location.href='profile.php'</script>";
			}
		// }
  }
?>