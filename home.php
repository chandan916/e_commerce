<?php 
require './include/common.php';
if(isset($_SESSION['email'])) {
	header('location:products.php');
}
?>
<!DOCTYPE html>
<html>
<head>

  <title>Lifestyle Store</title>
  <!--jquery file -->
  <script src="./js/jquery-3.4.1.min.js"></script>
  <!--bootstrap file-->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <!--Custom css file-->
  <link rel="stylesheet" href="./css/style.css">

</head>

<body>
      <!--header file-->
      <?php 
      include './include/header.php';
	  ?>
	  <!-- header end-->
	
		  <!-- Banner-->
      <div class="container-fluid home">
        <div class="row align-items-center rheight">
          <div class="col">
            <div class="banner text-center">
            <h1>Welcome to Lifestyle Store</h1>
            <p> We provide our customer the best customer services at best prices</p>
          </div>
          </div>
        </div>
		<div class="row">
        <div class="col text-center">
        <a href="products.php"><button type="button" class="header-link">Shop Now</button></a>
        </div>
		</div>
      </div>
	  	<!-- banner end-->
		
		<!-- overview-->
	  <div class="container-fluid">
	  <div class="row text-center overview">
			<div class="col-sm-4">
				<a href="./products.php">
				  <img src="./images/25.jpg" class="img-resposive img-thumbnail cards"> 
					  <div class="caption">
						<h4>Electronics</h4>
						<P>Upto 40% Off on latest devices</p>
					  </div>
				  </a>
			</div>
			<div class="col-sm-4">
				 <a href="./products.php">
				  <img src="./images/10.jpg" class="img-resposive img-thumbnail cards"> 
					  <div class="caption">
						<h4>Clothing</h4>
						<p>Exclusive products from branded companies</p> 
					  </div>
				  </a>
			</div>
			<div class="col-sm-4">
				 <a href="./products.php">
				  <img src="./images/11.png" class="img-resposive img-thumbnail cards"> 
					  <div class="caption">
						<h4>Video games</h4>
						<p>Gaming consoles at best price</p>
					  </div>
				  </a>
			</div>
	  </div>
	  </div>
	  <!--end of overview-->
	  
	  <!-- footer-->
	  <?php 
	        include './include/footer.php';
	  ?>
      <!-- end of footer-->
	  
	  
      <!-- booststrap js file-->
      <script src="./js/bootstrap.bundle.min.js"></script>
	  <!-- font awesome file for icons -->
	  <script src="js/all.js"></script>
  </body>

</html>
