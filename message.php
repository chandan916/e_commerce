<?php
     include './include/common.php';
	 $name=mysqli_real_escape_string($con,$_POST['name']);
	 $email=mysqli_real_escape_string($con,$_POST['email']);
	 $message=mysqli_real_escape_string($con,$_POST['message']);
	 $query="insert into contact values('$name','$email','$message')";
	 mysqli_query($con,$query);
	 header('location:./contact.php?r=1');
?>

