<?php

 include './include/common.php';
 $pass=mysqli_real_escape_string($con,$_POST['oldpass']);
 $pass=md5($pass);
 
 $newpass=mysqli_real_escape_string($con,$_POST['newpass']);
 $newpass=md5($newpass);
 
 $repass=mysqli_real_escape_string($con,$_POST['repass']);
 $repass=md5($repass);
 
  if($newpass!=$repass){
	 header('location:./setting.php?st=2');
	 die();	 
 }
 
 $user_id=$_SESSION['user_id'];
 
 $query="select * from users where password='$pass' && id='$user_id'";
 
 $result=mysqli_query($con,$query);
 
 $row=mysqli_num_rows($result);

 
 $table=mysqli_fetch_array($result);
 
 
 if($row==0){
	 header('location:./setting.php?st=1');
	 die();
 }

 $query2="update users set `password` ='$newpass' where `id`='$user_id'";
 
 mysqli_query($con,$query2);
 
 mysqli_error($con);
 
 header('location:./setting.php?st=3');
 

?>