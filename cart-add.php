<?php
  include './include/common.php';
 $item_id=$_GET['id'];
 if(isset($_SESSION['user_id'])){
 $user_id=$_SESSION['user_id'];
 $query="insert into users_item(id,user_id,item_id,status,time) values(DEFAULT,'$user_id','$item_id','Added to cart',CURRENT_TIMESTAMP())";
 mysqli_query($con,$query);
 header('location:./products.php');
 }
?>