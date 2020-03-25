<?php
  /*function to check if item is added to cart or not */
  function check_if_added_to_cart($num)
	{
    	$con=mysqli_connect("localhost","root","","store");
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
