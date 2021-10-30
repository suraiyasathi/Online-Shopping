<?php
session_start();
echo "hello";
     include 'db_connect.php';
     $conn=OpenCon();
     $mail=$_POST['email'];
	 $pass=$_POST['password'];
	 $_SESSION['email']=$mail;
	 $email=$_SESSION['email'];
	 $sql="select * from admin where email='$mail' and password='$pass'";
	 //$sql="select * from buyer_inf";
	 $result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0){
     while ($row = mysqli_fetch_assoc($result)) {
		 $desig=$row['designation'];
		 if($desig!='COO(factory head office)')
		 header('location:adminprofile.php');
	 else 
		 header('location:adminlogin.php');
	 }
	 }
	 else
		 header('location:adminlogin.php');
?>