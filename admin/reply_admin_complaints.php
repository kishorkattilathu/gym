<?php include ('layout/header.php'); ?>

<?php
	include '../connect.php';
	$id=$_GET['id'];
	$select="SELECT * FROM admin_complaint WHERE admin_complaint_id=$id";
	$execute=mysqli_query($connect,$select);
	$fetch=mysqli_fetch_array($execute);
?>

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
   
        <nav class="navbar-default navbar-static-top" role="navigation">
             
 
  <div class="grid-form1 text-center">
           <h3>Reply To Complaints</h3>
             <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
            
            </div>
          </div>
          
          <div class="bs-example" data-example-id="form-validation-states">
    
  </div>
  <div class="panel-body">
          <form role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
            
            
            <div class="form-group">
              <label class="col-md-2 control-label">Customer Name</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-name-o"></i>
                  </span>
                  <input id="name" class="form-control1" name="name" readonly="" value="<?=$fetch['customer_name']?>" type="text">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Customer Email</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-email-o"></i>
                  </span>
                  <input id="email" class="form-control1" name="email" readonly="" value="<?=$fetch['customer_email']?>"  type="text">
                </div>
              </div>
            </div>

         	<div class="form-group">
              <label class="col-md-2 control-label">Customer Phone</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-phone-o"></i>
                  </span>
                  <input id="phone" class="form-control1" name="phone" readonly="" value="<?=$fetch['customer_phone']?>" type="text">
                </div>
              </div>
            </div>


          	<div class="form-group">
              <label class="col-md-2 control-label">Customer Message</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-message-o"></i>
                  </span>
                  <input id="message" class="form-control1" name="message" readonly="" value="<?=$fetch['customer_message']?>"  required="" type="text">
                </div>
              </div>
            </div>
        
            <div class="form-group">
              <label class="col-md-2 control-label">Your Reply</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-name-o"></i>
                  </span>
                  <input id="reply" class="form-control1" name="reply"   required="" type="text">
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




<?php include ('layout/footer.php'); ?>

<?php 
	include "../connect.php";
	if (isset($_POST['button'])) 
	{
		$reply=$_POST['reply'];
		
		$update="UPDATE admin_complaint SET reply='$reply' WHERE admin_complaint_id='$id'";
		$execute1=mysqli_query($connect,$update);
		if ($execute1==1) 
		{
			echo "<script>alert('Replied Successfully')</script>";
			echo "<script>window.location.href='all_complaints.php'</script>";
		}
		else
		{
			echo "<script>alert('Failed Please try again')</script>";
			echo "<script>window.location.href='pending_complaints.php'</script>";
		}

	}
?>

