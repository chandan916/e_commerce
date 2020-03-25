<?php 
include './include/common.php';
if(isset($_SESSION['email'])){
	header('location:./products.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <!--jquery file -->
  <script src="./js/jquery-3.4.1.min.js"></script>
  <!--bootstrap file-->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <!--Custom css file-->
  <link rel="stylesheet" href="./css/common.css">
</head>

<body>
     <!--header file-->
     <?php 
      include './include/header.php';
	  ?>
	  <!--end of header-->
	  
	    <!--alert message if email id already exist-->
	    <?php 	  
	     if(isset($_GET['erp'])){
		  if($_GET['erp']==1){?>
		   <div class="alert alert-danger text-center">
              <p><strong>warning!</strong> Email id already exist</p>
               </div>	
	         <?php }
	         }?>
	    <!--end of message-->
			 
    <div class="container">
    <div class="row">
     <div class="col-xs-4 mx-auto my-1">
       <h2 class="text-center my-5">SIGN UP</h2>
       <form action="registration.php" method="post" data-netlify="true">
       <div class="form-group form-inline">
         <input type="text" class="form-control" size="30" name="name" placeholder="Name" required>
        </div>
        <div class="form-group form-inline">
          <input type="email" class="form-control" size="30" name="email" placeholder="E-mail" required>
         </div>
         <div class="form-group form-inline">
           <input type="text" class="form-control" size="30" name="password" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          </div>
          <div class="form-group form-inline">
            <input type="text" class="form-control" size="30" name="number" placeholder="Phone Number" pattern="^\d{10}$" title="10 numeric characters only" required>
           </div>
           <div class="form-group form-inline">
             <input type="text" class="form-control" size="30" name="city" placeholder="City" pattern="[A-Za-z]+" title="Alphabets only"  required>
            </div>
            <div class="form-group form-inline">
                  <input type="text" class="form-control" size="30" name="address" placeholder="address" required>
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
         </form>
         </div>
         </div>
         </div>
		 
    <!--footer-->
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
