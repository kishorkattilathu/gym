<?php include ('layout/header.php'); ?>

<?php
	include '../connect.php';
	$id=$_GET['id'];
	$select="SELECT * FROM complaint WHERE complaint_id='$id'";
	$execute=mysqli_query($connect,$select);
	$fetch=mysqli_fetch_array($execute);
?>

<!--banner-->	
		    
		

<div id="wrapper">
 
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
              <label class="col-md-2 control-label">Complaints</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-edit"></i>
                  </span>
                  <input type="text" id="complaints" class="form-control1" value="<?=$fetch['message']?>"  name="complaints" readonly>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Email</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-edit"></i>
                  </span>
                  <input type="text" id="complaints" class="form-control1" value="<?=$fetch['c_email']?>" readonly  name="complaints" required="">
                </div>
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-2 control-label">Customer Contact No:</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-edit"></i>
                  </span>
                  <input type="text" id="phone" class="form-control1"  value="<?=$fetch['c_phone']?>" name="phone" readonly >
                </div>
              </div>
            </div> 

            <div class="form-group">
              <label class="col-md-2 control-label">Reply</label>
              <div class="col-md-8">
                <div class="input-group input-icon right">
                  <span class="input-group-addon">
                    <i class="fa fa-edit"></i>
                  </span>
                  <input type="text" id="gallery3details" class="form-control1"  name="reply" required="">
                </div>
              </div>
            </div>

            
            

			    <div>
			      <button class="btn btn-primary" type="submit" name="button">Submit</button>
			    </div>
			  

      </form>
  </div>
  
  </div>
  </div>

  

<?php include ('layout/footer.php'); ?>

<?php
	if (isset($_POST['button'])) 
	{
		$reply=$_POST['reply'];

		$update="UPDATE complaint set reply='$reply' WHERE complaint_id='$id'";
		$execute1=mysqli_query($connect,$update);
		if ($execute1) 
		{
			echo "<script>alert('Replied Successfully')</script>";
			echo "<script>window.location.href='complaints.php'</script>";
		}
		else
		{
			echo "<script>alert('Failed Please Try Again')</script>";
			echo "<script>window.location.href='complaints.php'</script>";
		}

	}
?>


