<?php
include './include/common.php';
if(!isset($_SESSION['email'])){
	header('location:./login.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
	  <title>Cart</title>
	  <!--jquery file-->
	  <script src="./js/jquery-3.4.1.min.js"></script>
	  <!-- bootstrap css-->
	  <link rel="stylesheet" href="./css/bootstrap.min.css">
	  <!-- custom css-->
	  <link rel="stylesheet" href="./css/common.css">
	</head>
<body>
    <!--header file-->
      <?php
      include './include/header.php';
	  ?>
	  <!--end of header-->

      <div class="container">
       <div class="row">
         <div class="col-xs-4 mx-auto my-4">
         <h4 class="text-center">Your cart</h4>
		 <div class="table-responsive history">
         <table class="table table-bordered table-striped my-4">

		 <!-- code to fetch info from database-->
		 <?php
		   if(isset($_SESSION['user_id']))
		   {
			$user_id=$_SESSION['user_id'];
			$query="select users_item.id,users_item.item_id,items.name,items.price from users_item inner join items on users_item.item_id=items.id && users_item.user_id='$user_id' && status='Added to cart'";
			$result=mysqli_query($con,$query);
			$row=mysqli_num_rows($result);
			$no_of_items=mysqli_num_rows($result);
		 ?>
		 <!-- end of code-->
		    <tbody>
            <tr>
            <th>Item number</th>
            <th>Item name</th>
            <th>Price</th>
            <th></th>
            </tr>
			<!--code to display alert message if cart is empty or display items in cart-->
		  <?php if($row==0){
			  			
			 echo '<caption><div class="alert alert-danger text-center">
			 <p>Add items to the cart first</p></div></caption>';
			   }
			   else{
				   $sum=0;
				   while($row){
					   $s=mysqli_fetch_array($result);
					   $sum=$sum + $s[3];
					   $row=$row - 1;
		  ?>
                 <tr>
                   <td><?php echo $s['1'];?></td>
                   <td><?php echo $s['2'];?></td>
                   <td><?php echo $s['3'];?></td>
                   <td> <?php echo '<a href="cart-remove.php?id=' .$s['0']. '" class="remove_item_link">Remove</a>' ?> </td>
                  </tr>
				   <?php } ?>

                   <tr>
                     <td></td>
                     <td>Total</td>
                     <td><?php echo $sum ?></td>
                     <td> <?php echo '<a href="success.php?id2=' .$no_of_items. '"><button type="button" class="btn btn-primary">Confirm order</button></a>' ?></td>
                     </tr>
               </tbody>
        <?php
			   }
		   }
		   ?>
		    </table>
			 </div>
             </div>
             </div>
       </div>

	  <!-- footer file-->
	   <?php
      include './include/footer.php';
	  ?>
	  <!-- end of footer file-->

      <!--script-->
      <!-- booststrap js-->
      <script src="./js/bootstrap.bundle.min.js"></script>
	  <!-- font awesome file for icons -->
	  <script src="js/all.js"></script>
	  <!--end of script-->

</body>
</html>
