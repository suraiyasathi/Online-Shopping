<?php
session_start();
    $date=$_SESSION['date'];
    include 'db_connect.php';
$conn=OpenCon();
$mail=$_SESSION['email'];
$date=$_SESSION['date'];
$sql="update acc_order
       set status='Rejected'
       where dead_line='$date'";
	   if($conn->query($sql)===true)
		   header('location:acceptedorder.php');
	 else
	   header('location:seeorder.php');
?>