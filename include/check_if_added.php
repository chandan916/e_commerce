<?php
  /*function to check if item is added to cart or not */
  function check_if_added_to_cart($num)
	{
    	$con=mysqli_connect("ec2-23-20-129-146.compute-1.amazonaws.com","qmihdzhyolwyau","6e3493f5e5a03cadef0d1b349ea41da70fe359f681353a7c5185b18b6413b2c7
		","store");
	if(isset($_SESSION['user_id']))
	{
	$user_id=$_SESSION['user_id'];
	$item_id=$num;
	$query = "select * from users_item where item_id='$item_id' && user_id='$user_id' && status='Added to cart'" ;
	$result=mysqli_query($con,$query);
	$row=mysqli_num_rows($result);
	if($row>=1)
	{
		return 1;
	}
	else
	{
		return 0;
	}
   }
}

/*function to display user name */
function name(){
$con=mysqli_connect("localhost","root","Zxc123@op","store");
if(isset($_SESSION['user_id']))
{
 $user_id=$_SESSION['user_id'];
 $query2="select name from users where id='$user_id'";
 $result2=mysqli_query($con,$query2);
 $p=mysqli_fetch_array($result2);
 echo "<h3>Hello $p[0]</h3>";
}
}?>
