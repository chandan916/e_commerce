<?php 
include './include/common.php';
?>
<!DOCTYPE html>
<html>
	 <head>
		<title>Contact Us</title>
		<script src="./js/jquery-3.4.1.min.js"></script>
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/style.css">
     </head>
	
     <body>
      <!--header file-->
      <?php 
      include './include/header.php';
	  ?>
	  <!--end of header-->	  
     <div class="container-fluid">
     <!-- row 1-->
     <div class="row r1 my-4">
		<div class="col-sm-8">
		<h2 class="text-center">Live Support</h2>
		<p class="desc">The website provide the user 24*7 services.The processing of financial transaction in realtime.
		Any query regarding order or process can be asked on our socail media account.You can also ask on phone or through mail.
		</p>
		</div>
		 <div class="col-lg-4">
		 <img src="./images/16.jpg" class="img-responsive img-thumbnail img1">
		 </div>
     </div>
     <!--row 1 ends-->

     <!--row 2-->
      <div class="row r2">
	     <div class="col-sm-6">
		  <form action="message.php" method="post" data-netlify="true">
			 <h2 class="text-center my-4">Contact Us</h2>
			 <div class="form-group">
			 <input type="text" name="name" placeholder="Name" class="form-control">
			 </div>
			 <div class="form-group">
			 <input type="email" name="email" placeholder="email" class="form-control">
			 </div>
			 <div class="form-group">
			 <textarea type="text" name="message" placeholder="Enter your message (max 255 characters)" class="form-control" maxlength="255"></textarea>
			 </div>
			 <button type="submit" class="btn btn-primary">Submit</button>
		  </form>
		<?php 
		if(isset($_GET['r']))
		  {
		if($_GET['r']==1){ echo "<h4> Message sent successfully</h4>"; }
		  } ?>
	   </div>
	    <div class="col-sm-6 text-center">
	    <h2 class="my-4">Company Information:</h2>
	    <p>Gurgaon, India-122018</p>
	    <p>phone: +91 84555532377</p>
	    <p>email: lifestylestore@gmail.com</p>
	    </div>
       </div>
     <!--row 2 ends-->
  
     </div>
  
     <!-- footer-->
     <?php 
     include './include/footer.php';
     ?>
     <!-- end of footer-->
  
     <!--script-->
     <!-- booststrap js-->
     <script src="./js/bootstrap.bundle.min.js"></script>
	 <script src="js/all.js"></script>
	 <!--end of script-->
	  
   </body>
</html>