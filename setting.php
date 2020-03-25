<?php 
include './include/common.php';
if(!isset($_SESSION['email']))
{
	header('location:./home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Settings</title>
	 <!--jquery file -->
    <script src="./js/jquery-3.4.1.min.js"></script>
	<!--bootstrap file-->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
	<!--Custom css file-->
	<link rel="stylesheet" href="./css/common.css">
</head>

<body>
      <!--header-->
      <?php 
      include './include/header.php';
	  ?>
	  <!--end of header-->
   <div class="container">
     <div class="row">
       <div class="col-xs-4 mx-auto my-4">
         <div class="panel panel-default">
           <div class="panel-heading">
             <h4 class="text-center my-5">Change password</h4>
             </div>
             <div class="panel-body">
             <form action="setting_script.php" method="post">
              <div class="form-group my-4">
              <input type="text" name="oldpass" placeholder="Old password" size="40" class="form-control" required>
              </div>
              <div class="form-group my-4">
              <input type="text" name="newpass" placeholder="New password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              </div>
              <div class="form-group my-4">
              <input type="text" name="repass" placeholder="Re-type new password" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary">Change</button>
             </form>
             </div>
         </div>
       </div>
     </div>
	 
	 <!--alert messages for different conditions-->
	 <div>
	 <?php 
	 if(isset($_GET['st'])){
	 if($_GET['st']==1){
		 echo '<div class="alert alert-danger text-center">
              <p><strong>Enter correct old password!!</strong></p>
               </div>';
	 }
	 if($_GET['st']==2){
		 echo '<div class="alert alert-danger text-center">
              <p><strong>Both passwords are not similar<br>Re type new password</strong></p>
               </div>';
	 }
	 if($_GET['st']==3){
		 echo '<div class="alert alert-success text-center">
              <p><strong>Password changed successfully!!</strong></p>
               </div>';
	 }
	 }	 ?>
	 <!--end of message-->
	 
	 </div>
   </div>
	 <?php 
          include './include/footer.php';
     ?>
	 
    <!--script-->
    <!-- booststrap js-->
    <script src="./js/bootstrap.bundle.min.js"></script>
	<!-- font awesome file for icons -->
	<script src="js/all.js"></script>
	<!--end of script-->
</body>
</html>
