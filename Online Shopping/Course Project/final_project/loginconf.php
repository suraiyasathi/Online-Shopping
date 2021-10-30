<?php
session_start();
     include 'db_connect.php';
     $conn=OpenCon();
     $mail=$_POST['email'];
	 $pass=$_POST['password'];
	 $_SESSION['email']=$mail;
	 $email=$_SESSION['email'];
	 $sql="select * from buyer_inf where email='$mail' and password='$pass'";
	 //$sql="select * from buyer_inf";
	 $result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0){
     while ($row = mysqli_fetch_assoc($result)) {
		 if($_SESSION['flag']==5)
			header('location:side.php'); 
		else
		 header('location:profile.php');
	 }
	 }
	 else
		 header('location:login.php');
?>