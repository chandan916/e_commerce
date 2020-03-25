<?php
  include './include/common.php';
  $id=$_GET['id'];
   $user_id=$_SESSION['user_id'];
   $query="delete from users_item where user_id='$user_id' && id='$id' ";
   mysqli_query($con,$query);
   header('location:./cart.php');
?>