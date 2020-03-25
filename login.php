<?php 
include './include/common.php';
if(isset($_SESSION['email'])){
	header('location:./products.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
   <!--jquery file -->
  <script src="./js/jquery-3.4.1.min.js"></script>
  <!--bootstrap file-->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <!--Custom css file-->
  <link rel="stylesheet" href="./css/common.css">
</head>
  <body>
     <?php 
      include './include/header.php';
	  ?>
	  <?php 	  
	  if(isset($_GET['ir'])){
		  if($_GET['ir']==1){?>
		   <div class="alert alert-danger text-center">
              <p><strong>Enter E-mail id first!!</strong></p>
               </div>	
	        <?php }
	         }?>	
   <div class="container-fluid">
     <div class="row">
       <div class="col-xs-4 mx-auto my-4">
         <div class="panel panel-default">
             <div class="panel-heading">
             <h4 class="text-center">Login</h4>
             </div>
             <div class="panel-body">
             <form action="verification.php" method="post" data-netlify="true">
              <div class="form-group my-4">
              <input type="text" name="email" placeholder="Enter your email" class="form-control" required>
              </div>
              <div class="form-group my-4">
              <input type="text" name="password" placeholder="Enter your password" class="form-control" required>
              </div>
               <p>Don't have an account? Create One <a href="./signup.php">Signup</a> </p>
               <button type="submit" class="btn btn-primary">Login</button>
            </form>
            </div>
         </div>
       </div>
     </div>
		<?php 	  
		     if(isset($_GET['rp'])){
             if($_GET['rp']==1){?>
             <div class="alert alert-danger text-center">
   	         <p><strong>Enter correct E-mail id or password!!</strong></p>
    	     </div>	
        <?php }
	        }?>				
    </div>
	
	<!--footer file-->
	 <?php 
          include './include/footer.php';
      ?>
	<!--end of footer-->

    <!--script-->
    <!-- booststrap js-->
    <script src="./js/bootstrap.bundle.min.js"></script>
	<!-- font awesome file for icons -->
	<script src="js/all.js"></script>
    <!--end of script--> 
</body>
</html>
