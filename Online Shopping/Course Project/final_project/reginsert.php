<?php
session_start();
include 'db_connect.php';
$conn=OpenCon();
$company=$_POST['comp'];
$name=$_POST['name'];
$designation=$_POST['desig'];
$password=$_POST['pass'];
$confirpass=$_POST['confpass'];
$email=$_POST['email'];
$code=$_POST['code'];
$number=$_POST['number'];
$country=$_POST['country'];
$_SESSION['email']=$email;
if($password==$confirpass && $password!=null && $company!=null && $email!=null)
{
$sql1="insert into buyer_inf(name,designation,password,email,company,p_code,phone,country) 
       values('$name','$designation','$confirpass','$email','$company','$code','$number','$country')";
	   if($conn->query($sql1)===true)
	   {
		   if($_SESSION['flag']==5)
			header('location:side.php'); 
		else
		   header("location:profile.php");
	   }
   else
   {
	   header("location:registration.php");
   }
}
else
	header("location:registration.php");
?>