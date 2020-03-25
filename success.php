<?php
include './include/common.php';
if(!isset($_SESSION['email'])){
	header('location:./login.php');
}
/* code to set status equals to confirmed and update timestamp in users_item file for items in the cart*/
   $table=$_GET['id2'];
     $user_id=$_SESSION['user_id'];
	while($table)
	{
	$query="update users_item set status='confirmed',time=CURRENT_TIMESTAMP() where user_id='$user_id' && status='Added to cart'";
	mysqli_query($con,$query);
	$table=$table-1;
	}
?>
<!DOCTYPE html>
<html>
  <head>
  <title>Success</title>
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
   <div class="container">
     <div class="row">
	   <div class="col-xs-12 mx-auto my-4">
	   <h3 class="my-5">Order Placed Successfully!!</h3>
	   <p >Your order is confirmed. Thank you for shopping with us.<br>
	   <a href="./products.php">Click here</a> to purchase any other item.</p>
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
