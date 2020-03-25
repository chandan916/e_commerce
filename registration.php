<?php 
   include './include/common.php';
   
   $name=mysqli_real_escape_string($con,$_POST['name']);

   $email=mysqli_real_escape_string($con,$_POST['email']);
   $query="select * from users where email='$email'";
   $result=mysqli_query($con,$query);
   $row=mysqli_num_rows($result);
   /*jump to signup page and display error message if email id already exist */
   if($row>0){
	  header('location:./signup.php?erp=1');
	  die();
   }
  
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $password=md5($password);
   
    $number=mysqli_real_escape_string($con,$_POST['number']);
   
    $city=mysqli_real_escape_string($con,$_POST['city']);
   
    $address=mysqli_real_escape_string($con,$_POST['address']);
   
	$query2="insert into users values(DEFAULT,'$name','$email','$password','$number','$city','$address')";
	mysqli_query($con,$query2);
	$_SESSION['email']=$email;
	$_SESSION['user_id']=mysqli_insert_id($con);
	header('location:./products.php');
?>




