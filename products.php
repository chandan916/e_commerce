<?php
    include './include/common.php';
	?>
<!DOCTYPE html>
<html>

<head>
  <title>Lifestyle Store | Products</title>
   <!--jquery file-->
  <script src="./js/jquery-3.4.1.min.js"></script>
   <!-- bootstrap css-->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <!-- custom css-->
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!--header and function file-->
      <?php
      include './include/header.php';
	  include './include/check_if_added.php';
	  ?>
	  <!-- end-->

	  <div class="container-fluid">
      <div id="products">
        <h2 class="text-center">Our Products</h2>
        
    <!--file to display name-->
		<?php
		 name();
		?>
		<!--end of file-->

		<!-- row 1-->
        <div class="row">
		        <!-- product 1 -->
				<div class="col-9 col-sm-6 col-lg-3 mx-auto my-4">
					<div class="card text-center">
					<img src="./images/4.jpg" class="img-responsive img-thumbnail card-img-top">
					      <div class="card-body">
					      <h4 class="card-title">Shirt by platinum</h4>
					      <p class="card-text">Rs 500/-</p>
					      <?php if(!isset($_SESSION['email'])){?>
					      <a href="login.php?ir=1" class="btn btn-primary">Buy Now</a>
					      <?php }
					      else {
						  if(check_if_added_to_cart($num=1)!=0){
							  echo ' <a href="#" class="btn btn-success" disabled>Added to cart</a>';
						  }else{ ?>
						   <a href="cart-add.php?id=1" class="btn btn-primary">Add to cart</a>
						   <?php
						    }
					        }
							?>
					      </div>
				  </div>
				</div>
		        <!-- product 2 -->
				<div class="col-9 col-sm-6 col-lg-3 mx-auto my-4">
					<div class="card text-center">
					  <img src="./images/5.jpg" class="img-responsive img-thumbnail card-img-top">
					     <div class="card-body">
					        <h5 class="card-title">Watch Fossil MD136</h5>
					        <p class="card-text">Rs 2000/-</p>
					        <?php if(!isset($_SESSION['email'])){?>
					        <a href="login.php?ir=1" class="btn btn-primary">Buy Now</a>
					        <?php }
							else {
						    if(check_if_added_to_cart($num=2)){
							echo ' <a href="#" class="btn btn-success" disabled>Added to cart</a>';
						    }else{ ?>
						    <a href="cart-add.php?id=2" class="btn btn-primary">Add to cart</a>
						    <?php
						     }
					             }
							?>
					    </div>
				    </div>
				 </div>
		        <!-- product 3 -->
				<div class="col-9 col-sm-6 col-lg-3 mx-auto my-4">
					<div class="card">
					<img src="./images/13.jpg" class="img-responsive img-thumbnail card-img-top">
						<div class="card-body text-center">
						  <h5 class="card-title">Macbook pro</h5>
						  <p class="card-text">Rs 1,20,000</p>
						  <?php if(!isset($_SESSION['email'])){?>
						  <a href="login.php?ir=1" class="btn btn-primary">Buy Now</a>
						  <?php }else {
						  if(check_if_added_to_cart($num=3)){
						  echo ' <a href="#" class="btn btn-success" disabled>Added to cart</a>';
						  }else{ ?>
						  <a href="cart-add.php?id=3" class="btn btn-primary">Add to cart</a>
					      <?php
						  }
						  }
						   ?>
						</div>
				  </div>
				</div>
			    </div>
			<!-- row 1 ends-->
        <div class="row">
	        <!-- product 4 -->
				<div class="col-9 col-sm-6 col-lg-3 mx-auto my-4">
					  <div class="card">
					    <img src="./images/14.jpg" class="img-responsive img-thumbnail card-img-top">
					    <div class="card-body  text-center">
							<h5 class="card-title">Perfume</h5>
							<p class="card-text">Rs 400/-</p>
							<?php if(!isset($_SESSION['email'])){?>
							<a href="login.php" class="btn btn-primary">Buy Now</a>
							<?php }
							else {
							if(check_if_added_to_cart($num=4)){
							echo ' <a href="#" class="btn btn-success" disabled>Added to cart</a>';
							}else{ ?>
							<a href="cart-add.php?id=4" class="btn btn-primary">Add to cart</a>
							<?php
							}
							}
							?>
					  </div>
					</div>
				</div>
		    <!-- product 5 -->
				<div class="col-9 col-sm-6 col-lg-3 mx-auto my-4">
					<div class="card">
					  <img src="./images/8.jpg" class="img-responsive img-thumbnail card-img-top">
						  <div class="card-body  text-center">
							<h5 class="card-title">iPhone xs max</h5>
							<p class="card-text">Rs 70,000/-</p>
							<?php if(!isset($_SESSION['email'])){?>
							<a href="login.php" class="btn btn-primary">Buy Now</a>
							<?php }else {
							if(check_if_added_to_cart($num=5)){
							echo ' <a href="#" class="btn btn-success" disabled>Added to cart</a>';
							}else{ ?>
							<a href="cart-add.php?id=5" class="btn btn-primary">Add to cart</a>
							<?php
							}
							}
							?>
						  </div>
					</div>
				</div>
		     <!-- product 6 -->
				<div class="col-9 col-sm-6 col-lg-3 mx-auto my-4">
					  <div class="card">
					  <img src="./images/9.jpg" class="img-responsive img-thumbnail card-img-top">
						  <div class="card-body  text-center">
							<h5 class="card-title">Nike shoes</h5>
							<p class="card-text">Rs 4000/-</p>
						    <?php if(!isset($_SESSION['email'])){?>
							<a href="login.php" class="btn btn-primary">Buy Now</a>
							<?php }else {
							if(check_if_added_to_cart($num=6)){
							echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
							}else{ ?>
							<a href="cart-add.php?id=6" class="btn btn-primary">Add to cart</a>
							<?php
							}
							}
							?>
						  </div>
					</div>
				</div>
			</div>
			<!-- row 2 ends-->

         <div class="row">
	        <!-- product 7 -->
			<div class="col-9 col-sm-6 col-lg-3 mx-auto my-4">
					<div class="card">
					<img src="./images/10.jpg" class="img-responsive img-thumbnail card-img-top">
						<div class="card-body  text-center">
						  <h5 class="card-title">Jeans</h5>
						  <p class="card-text">Rs 700/-</p>
						  <?php if(!isset($_SESSION['email'])){?>
						  <a href="login.php" class="btn btn-primary">Buy Now</a>
						  <?php }else {
						  if(check_if_added_to_cart($num=7)){
						  echo ' <a href="#" class="btn btn-success" disabled>Added to cart</a>';
						  }else{ ?>
						  <a href="cart-add.php?id=7" class="btn btn-primary">Add to cart</a>
					      <?php
						  }
						  }
	     					?>
						</div>
				  </div>
			  </div>
	        <!-- product 8 -->
			<div class="col-9 col-sm-6 col-lg-3 mx-auto my-4">
				<div class="card">
				<img src="./images/ps4.jpg" class="img-responsive img-thumbnail card-img-top">
					<div class="card-body text-center">
					  <h5 class="card-title">Playstation 4 pro</h5>
					  <p class="card-text">Rs 38,000/-</p>
					  <?php if(!isset($_SESSION['email'])){?>
					  <a href="login.php" class="btn btn-primary">Buy Now</a>
					  <?php }else {
					  if(check_if_added_to_cart($num=8)){
					  echo ' <a href="#" class="btn btn-success" disabled>Added to cart</a>';
					  }else{ ?>
     				  <a href="cart-add.php?id=8" class="btn btn-primary">Add to cart</a>
			     	   <?php
					  }
					  }
       					?>
					</div>
			  </div>
			</div>
	        <!-- product 9 -->
			<div class="col-9 col-sm-6 col-lg-3 mx-auto my-4">
					<div class="card">
					<img src="./images/12.jpg" class="img-responsive img-thumbnail card-img-top">
						<div class="card-body text-center">
						  <h5 class="card-title">Headphones</h5>
						  <p class="card-text">Rs 7000/-</p>
						  <?php if(!isset($_SESSION['email'])){?>
						  <a href="login.php" class="btn btn-primary">Buy Now</a>
						  <?php }else {
						  if(check_if_added_to_cart($num=9)){
						  echo ' <a href="#" class="btn btn-success" disabled >Added to cart</a>';
						  }else{ ?>
     					   <a href="cart-add.php?id=9" class="btn btn-primary">Add to cart</a>
						   <?php
	    					  }
							  }
							?>
						</div>
				  </div>
			</div>
        </div>
		<!-- row 3 ends-->

		<div class="row">
	        <!-- product 10 -->
			<div class="col-9 col-sm-6 col-lg-3 mx-auto my-4">
					<div class="card">
					<img src="./images/21.jpeg" class="img-responsive img-thumbnail card-img-top">
						<div class="card-body  text-center">
						  <h5 class="card-title">Nixon rx-120</h5>
						  <p class="card-text">Rs 1200/-</p>
						  <?php if(!isset($_SESSION['email'])){?>
						  <a href="login.php" class="btn btn-primary">Buy Now</a>
						  <?php }else {
						  if(check_if_added_to_cart($num=10)){
						  echo ' <a href="#" class="btn btn-success" disabled>Added to cart</a>';
						  }else{ ?>
						  <a href="cart-add.php?id=10" class="btn btn-primary">Add to cart</a>
					      <?php
						  }
						  }
	     					?>
						</div>
				  </div>
			  </div>
	        <!-- product 11 -->
			<div class="col-9 col-sm-6 col-lg-3 mx-auto my-4">
				<div class="card">
				<img src="./images/22.jpeg" class="img-responsive img-thumbnail card-img-top">
					<div class="card-body text-center">
					  <h5 class="card-title">DELL XPS 13</h5>
					  <p class="card-text">Rs 95,000/-</p>
					  <?php if(!isset($_SESSION['email'])){?>
					  <a href="login.php" class="btn btn-primary">Buy Now</a>
					  <?php }else {
					  if(check_if_added_to_cart($num=11)){
					  echo ' <a href="#" class="btn btn-success" disabled>Added to cart</a>';
					  }else{ ?>
     				  <a href="cart-add.php?id=11" class="btn btn-primary">Add to cart</a>
			     	   <?php
					  }
					  }
       					?>
					</div>
			  </div>
			</div>
	        <!-- product 12 -->
			<div class="col-9 col-sm-6 col-lg-3 mx-auto my-4">
					<div class="card">
					<img src="./images/23.jpeg" class="img-responsive img-thumbnail card-img-top">
						<div class="card-body text-center">
						  <h5 class="card-title">Xbox One X 1TB</h5>
						  <p class="card-text">Rs 40,000/-</p>
						  <?php if(!isset($_SESSION['email'])){?>
						  <a href="login.php" class="btn btn-primary">Buy Now</a>
						  <?php }else {
						  if(check_if_added_to_cart($num=12)){
						  echo ' <a href="#" class="btn btn-success" disabled >Added to cart</a>';
						  }else{ ?>
     					   <a href="cart-add.php?id=12" class="btn btn-primary">Add to cart</a>
						   <?php
	    					  }
							  }
							?>
						</div>
				  </div>
			</div>
        </div>
		<!-- row 4 ends-->
    </div>
	<!-- end of products-->
</div>

	<!-- footer-->
	  <?php
	  include './include/footer.php';
	  ?>
	<!--end of footer-->

    <!--scripts-->
      <!-- booststrap js-->
      <script src="./js/bootstrap.bundle.min.js"></script>
	  <!-- font awesome file for icons -->
	  <script src="js/all.js"></script>
	<!-- end of scripts-->

  </body>
</html>
