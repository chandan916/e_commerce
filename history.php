<?php 
include './include/common.php';
if(!isset($_SESSION['email'])){
	header('location:./login.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
	  <title>Order History</title>
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
	<!--end of header file-->
	
     <div class="container">
       <div class="row">
         <div class="col-xs-3 mx-auto my-4">
           <h4 class="text-center">Your Order History</h4>
		   <div class="table-responsive history">
           <table class="table table-bordered table-striped">
		   
		   <!-- code to fetch info from database-->
		   <?php 
		   if(isset($_SESSION['user_id']))
		   {   
			   $user_id=$_SESSION['user_id'];
			   $query="select items.name,items.price,users_item.status,users_item.time from users_item inner join items on users_item.item_id=items.id && users_item.user_id='$user_id' order by users_item.time desc";
			   $result=mysqli_query($con,$query);
			   $row=mysqli_num_rows($result);
			   ?>
			   <tbody>
               <tr>
                 <th>S.NO.</th>
                 <th>Item name</th>
                 <th>Price</th>
                 <th>status</th>
				 <th>Order time</th>
                 </tr>
				 
				<!--code to display alert message if cart is empty or idsplay items in cart--> 
			    <?php if($row==0){
				   echo '<caption><div class="alert alert-danger text-center">
                  <strong>You have not purchased anything yet!!</strong></div>
                   </caption>';
			    }
			    else{
				   $c=0;
				   while($table=mysqli_fetch_array($result))
				   { $c= $c+1;
				?>
                     <tr>
                     <td><?php echo $c ;?></td>
                     <td><?php echo $table['0'];?></td>
                     <td><?php echo $table['1'];?></td>
				   
				     <!-- if item is added to the cart and not confirmed click to move to cart page and confirm-->  
                     <td> 
				     <?php if($table['2'] == 'Added to cart'){ echo '<a href="./cart.php">Added to cart</a>';}
				            else{ echo $table['2']; }
					 ?>
					 </td>
					 <td><?php echo $table['3'];?></td>
                     </tr>
				     <?php } ?>
                     <!--end of while loop-->
				  
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
	   
	<!--footer file-->  
	<?php 
    include './include/footer.php';
	?>
	<!--end of footer file-->
	  
    <!--script-->
    <!-- booststrap js-->
    <script src="./js/bootstrap.bundle.min.js"></script>
	<!-- font awesome file for icons -->
	<script src="js/all.js"></script>
	<!--end of script-->
	   
</body>
</html>