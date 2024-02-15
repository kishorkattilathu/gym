
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
    <script>
    $(function () {
      $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

      if (!screenfull.enabled) {
        return false;
      }

      

      $('#toggle').click(function () {
        screenfull.toggle($('#container')[0]);
      });
      

      
    });
    </script>

<!----->

</head>
<body>
<div id="wrapper">
     <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="#">Registration</a></h1>         
         </div>
         
 
  <div class="grid-form1 text-center">
           <h3>Gym Owner Registration Form</h3>
             <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
            
            </div>
          </div>
          
          <div class="bs-example" data-example-id="form-validation-states">
    
  </div>
  <div class="panel-body">
          <form role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
            
            
            <div class="form-group">
              <label class="col-md-2 control-label">Your Full Name</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-name-o"></i>
                  </span>
                  <input id="name" class="form-control1" name="name" required="" type="text">
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
                  <input id="gymname" class="form-control1" name="gymname" required="" type="text">
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
                  <input id="location" class="form-control1" required="" name="location" type="text">
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
                  <input id="email" class="form-control1" name="email" required="" type="text">
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
                  <input id="website" class="form-control1" name="website" type="text" placeholder="optional">
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
            <select name="gender" class="form-control1" required="">
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
                  <input id="mobile" class="form-control1" required="" name="mobile" type="text">
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
                  <input id="address" class="form-control1" required="" name="address" type="text">
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
                  <input id="description" class="form-control1" name="description" type="text" placeholder="optional">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Monthly Price</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-name-o"></i>
                  </span>
                  <input id="monthly" class="form-control1" name="monthly" required="" type="text">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Yearly Price</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-name-o"></i>
                  </span>
                  <input id="annual" class="form-control1" name="annual" required="" type="text">
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
                  <input type="password" class="form-control1" required="" name="password">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Confirm Password</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-key"></i>
                  </span>
                  <input type="password" class="form-control1" required="" name="confirm">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Gym Image</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-image-o"></i>
                  </span>
        <input type="file" id="img" class="text-center" name="img1">
                  
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">License</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-image-o"></i>
                  </span>
        <input type="file" id="exampleInputFile" class="text-center" name="img2">
                  
                </div>
              </div>
            </div>

            
    <div>
      <button type="submit" name="button">Register</button>
    </div>
  

          </form>
  </div>
  
      
      
  
  </div>
  </div>
  <!--//grid-->
    <!---->
<div class="copy">
            <p> &copy; 2023 Gym Plus. All Rights Reserved | Design by <a href="#" target="_blank">KKK</a> </p>     </div>
    </div>
    </div>
    <div class="clearfix"> </div>
       </div>
     <!--scrolling js-->
  <script src="js/jquery.nicescroll.js"></script>
  <script src="js/scripts.js"></script>
  <!--//scrolling js-->
<!---->

</body>
</html>


<?php
    include ('../connect.php');

    if (isset($_POST['button'])) 
    {
        $name=$_POST['name'];
        $gymname=$_POST['gymname'];
        $location=$_POST['location'];
        $email=$_POST['email'];
        $website=$_POST['website'];
        $gender=$_POST['gender'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        $description=$_POST['description'];
        $monthly=$_POST['monthly'];
        $annual=$_POST['annual'];
        $password=$_POST['password'];
        $confirm=$_POST['confirm'];

        $Image1=$_FILES['img1']['name'];
        $image1=explode('.', $Image1);
        $extn1=end($image1);
        $allowextn1=array("jpg","png","jpeg");
        $time=Time();
        $photo1=$time.'.'.$extn1;

        $image2=$_FILES['img2']['name'];
        $Image2=explode('.', $image2);
        $extn2=end($Image2);
        $allowextn2=array("jpg","jpeg","png","pdf");
        $time2=Time();
        $photo2=$time2.'.'.$extn2;


        if ($password==$confirm) 
        {  
          $select="SELECT * FROM gym_registration WHERE gym_email='$email'";
          $execute=mysqli_query($connect,$select);
          $count=mysqli_num_rows($execute);
          if ($count==0) 
          { 
            if (in_array($extn1,$allowextn1))
            {
              move_uploaded_file($_FILES['img1']['tmp_name'], 'images/'.$photo1);
                
                if (in_array($extn2,$allowextn2)) 
                {
                  move_uploaded_file($_FILES['img2']['tmp_name'], 'images1/'.$photo2);
                

          $insert1="INSERT INTO gym_registration(owner_name,gym_name,location,gym_email,website,gender,mobile,address,description,monthly_price,annual_price,password,gym_img,license,owner_type,status)
          values('$name','$gymname','$location','$email','$website','$gender','$mobile','$address','$description','$monthly','$annual','$password','$photo1','$photo2','Owner','Pending')";

          $execute1=mysqli_query($connect,$insert1);

            if ($execute1) 
            {
              echo "<script>alert('Registered successfully')</script>";
              echo "<script>window.location.href='owner_login.php'</script>";
            }
            else
            {
              echo "<script>alert('Failed please try again')</script>";
              echo "<script>window.location.href='owner_register.php'</script>";
            }
            }
            else
            {
              echo "<script>alert('Wrong file license Only pdf,jpg,png,jpeg allowed')</script>";
              echo "<script>window.location.href='owner_register.php'</script>";
            }
            }
            else
            { 
              echo "<script>alert('Wrong file gym image Only jpg,png,jpeg allowed')</script>";
              echo "<script>window.location.href='owner_register.php'</script>";
            }


          }
            else
            {
              echo "<script>alert('Email already exist try again')</script>";
              echo "<script>window.location.href='owner_register.php'</script>";
            }
           
        }
        else
            {
              echo "<script>alert('Password does not match')</script>";
              echo "<script>window.location.href='owner_register.php'</script>";
            }
      
    }


?>

