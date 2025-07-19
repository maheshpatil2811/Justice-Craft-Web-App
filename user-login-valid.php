<?php
	session_start();
	include "db.php";
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	
	$q="select * from user where email='$email' and password='$password'";
	$res=mysqli_query($conn,$q);
	if(mysqli_num_rows($res)>0)
	{	
		$user=mysqli_fetch_array($res);
		
		$_SESSION['user']=$user;
		
		header("location:allgames.php");
	}else{

		echo "<script>alert('Invalid username/password. Please try again');window.history.back();</script>";
		
	}
	
 ?>