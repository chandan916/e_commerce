<?php 
include './include/common.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
	<!--jquery file -->
	<script src="./js/jquery-3.4.1.min.js"></script>
	<!--bootstrap file-->
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<!--Custom css file-->
	<link rel="stylesheet" href="./css/style.css">
</head>
<body> 
      <!--header file-->
      <?php 
      include './include/header.php';
	  ?>
	  <!--end of header-->
   <div class="container-fluid">
      <div class="row">
		  <div class="col-sm-9 mx-auto my-4">
				   <h1 class="text-center question">Who we are?</h1>
				   <img  src="./images/28.png" class="img-resposive img-thumbnail photo">
				   <p class="para">Lifestyle store is online shopping store which is build to provide best customer serivces and  products to the customer.</p>
		  </div>
	  </div>
	  <div class="row">
		  <div class="col-sm-9 mx-auto my-4">
				   <h1 class="text-center question">What we do?</h1>
				   <img  src="./images/26.jpg" class="img-resposive img-thumbnail photo">
				   <p class="para">Online shopping is a form of electronic commerce which allows
				   consumers to directly buy goods or services from a seller over the internet
				   using a web browser.Consumer find a product of interest by
				   visiting the website of the retailer directly or by searching among 
				   alternative vendors using a shopping search engine.</p>
		  </div>
	  </div>
	  <div class="row">
		  <div class="col-sm-9 mx-auto my-4 c3">
				  <h1 class="text-center question">Our History</h1>
				  <img  src="./images/27.png" class="img-resposive img-thumbnail photo">
				   <h3>2010</h3>
							<p class="para">Founded as a offline store</p>
				   <h3>2015</h3>
						   <p class="para">Open six store in three different states of india</p>
				   <h3>2017</h3>
						   <p class="para">Open online store in india</p>
					<h3>2019</h3>
						   <p class="para">start shipping outside india</p>
		  </div>
	  </div>
   </div>
   
     <!--footer-->
     <?php 
     include './include/footer.php';
     ?>
     <!--footer end-->
   
      <!--scripts-->
      <!-- booststrap js-->
      <script src="./js/bootstrap.bundle.min.js"></script>
	  <!-- font awesome file for icons -->
	  <script src="js/all.js"></script>
	  <!--end of scripts-->
   </body>
</html>