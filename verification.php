<?php 
 include './include/common.php';
 $email=mysqli_real_escape_string($con,$_POST['email']);
 $password=mysqli_real_escape_string($con,$_POST['password']);
  $password=md5($password);
  $query="select * from users where email='$email' && password='$password'";
  $result=mysqli_query($con,$query);
  $row=mysqli_num_rows($result);
  /*if no users is found with given id and password jump to login page and display an error */
  if($row==0){
	header('location:login.php?rp=1');
	die();
  }
  else
  {
	  $user=mysqli_fetch_array($result);
	  $_SESSION['email']=$email;
	  $_SESSION['user_id']=$user[0];
	  header('location:products.php');
  }
?>