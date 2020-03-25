<?php 
include './include/common.php';
	session_unset();
	session_destroy();
	header('location:./home.php');
?>