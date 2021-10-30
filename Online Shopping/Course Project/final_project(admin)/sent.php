<?php
session_start();
    $date=$_SESSION['date'];
    include 'db_connect.php';
$conn=OpenCon();
$mail=$_SESSION['email'];
$date=$_SESSION['date'];
$sql="update shipment
       set status='Complete'
       where dead_line='$date'";
	   if($conn->query($sql)===true)
	   {
		   $sql1="update acc_order
       set status='Complete'
       where dead_line='$date'";
	   if($conn->query($sql1)===true)
	   {
		   header('location:workinghistory.php');
	 }
	 }
	 else
		 header('location:shipment.php');
?>