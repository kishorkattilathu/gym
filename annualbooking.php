<?php  include ('layout/header.php');?>

<?php
      include ('connect.php');
      $id=$_GET['id'];
      $select="SELECT * FROM gym_registration WHERE gym_id='$id'";
      $execute=mysqli_query($connect,$select);
      $fetch=mysqli_fetch_array($execute);

?>

<br>
<br>
<br>
<br>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <div class="row">
    <div class="span12">


      <form class="form-horizontal span6 text-center" method="post">
        <fieldset class="">
          <input type="hidden" name="id" value="<?=$fetch['gym_id']?>">
          <legend>Annual Payment</legend>
       
          <div class="control-group">
            <label class="control-label">Card Holder's Name</label>
            <div class="controls">
              <input type="text" class="input-block-level" name="name" title="Fill your first and last name" >
            </div>
          </div>
       
          <div class="control-group">
            <label class="control-label">Card Number</label>
            <div class="controls">
              <input type="text" class="input-block-level" name="cardno" >
            </div>
           
          </div>
       
          <div class="control-group">
            <label class="control-label">Card Expiry Date</label>
            <div class="controls">
              <div class="row-fluid">
                <div class="span9">
                  <select class="input-block-level" name="month">
                    <option>Jan</option>
                    <option>Feb</option>
                    <option>Mar</option>
                    <option>Apr</option>
                    <option>May</option>
                    <option>Jun</option>
                    <option>Jul</option>
                    <option>Aug</option>
                    <option>Sep</option>
                    <option>Oct</option>
                    <option>Nov</option>
                    <option>Dec</option>
                  </select>
                </div>
                <div class="span3">
                  <input type="text" name="year" placeholder="YEAR" class="input-block-level">
                    
                  
                </div>
              </div>
            </div>
          </div>
       
          <div class="control-group">
            <label class="control-label">Card CVV</label>
            <div class="controls">
              <div class="row-fluid">
                <div class="span3">
                  <input type="text" name="cvv" class="input-block-level" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" >
                </div>
                <div class="span8">
                  <!-- screenshot may be here -->
                </div>
              </div>
            </div>
          </div>
          
           <div class="control-group">
            <label class="control-label">Annual Payment</label>
            <div class="controls">
              <div class="row-fluid">
                <div class="span3">
                  <input type="text" class="input-block-level" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" name="pay" readonly="" value="<?=$fetch['annual_price']?>">
                </div>
                <div class="span8">
                  <!-- screenshot may be here -->
                </div>
              </div>
            </div>
          </div>
       
          <div class="form-actions">
            <button type="submit" name="button" class="btn btn-primary">Submit</button>
            <button type="button" name="cancel" class="btn">Cancel</button>
          </div>
        </fieldset>
      </form>


    </div>
  </div>
</center>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
    if (isset($_POST['button'])) 
    {
      $id=$_POST['id'];
      $name=$_POST['name'];
      $cardno=$_POST['cardno'];
      $month=$_POST['month'];
      $year=$_POST['year'];
      $cvv=$_POST['cvv'];
      $pay=$_POST['pay'];

      $select1="SELECT * FROM booking WHERE booking_status='Approved' and user_email='$user_mail'";
      $execute1=mysqli_query($connect,$select1);
      $count=mysqli_num_rows($execute1);
      if ($count==1) 
    {
      $select2="SELECT * FROM payment WHERE status='Paid' and user_email='$user_mail'";
      $execute2=mysqli_query($connect,$select2);
      $count1=mysqli_num_rows($execute2);

      if ($count1==0) 
      {
       
      
       
          $insert="INSERT INTO payment(owner_id,holder_name,card_no,exp_month,exp_year,cvv,amount,status,plan) values('$id','$name','$cardno','$month','year','$cvv','$pay','Paid','Annual')";
          $execute1=mysqli_query($connect,$insert);
          if ($execute1==1) 
          {
            echo "<script>alert('Payment Done Successfully')</script>";
            echo "<script>window.location.href='all_gym.php'</script>";
          }
          else
          {
            echo "<script>alert('Failed Please Try Again')</script>";
            echo"<script>window.location.href='all_gym.php</script>";
          }
      }
      else
      {
        echo "<script>alert('Already Paid')</script>";
        echo "<script>window.location.href='all_gym_.php'</script>";
      }
    }
    else
    {
      echo "<script>alert('Book Your Trainer First')</script>";
      echo "<script>window.location.href='all_gym.php'</script>";
    }
    }
?>


<?php  include ('layout/footer.php');   ?>