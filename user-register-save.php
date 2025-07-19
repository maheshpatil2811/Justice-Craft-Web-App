<?php
include "db.php";

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
//$mobile=$_REQUEST['mobile'];
$password=$_REQUEST['password'];

$q="insert into user values(NULL,'$name','$email','$password')";
$res=mysqli_query($conn,$q);
if($res){
	echo "<script>alert('Regiser Successfully');</script>";
	echo "<script>window.location='user-login.php';</script>";
}else{
	echo "not inserted";
	//echo mysqli_error($conn);
}
?>