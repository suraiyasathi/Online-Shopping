<?php
session_start();
include 'db_connect.php';
$conn=OpenCon();
$company=$_SESSION['company'];
$country=$_SESSION['country'];
$product=$_SESSION["id"];
$amount=$_POST['amount'];
$date=$_POST['dead'];
$des=$_POST['message'];
$sql="insert into pro_order(company,country,product_id,Order_amount,description,dead_line)
       values('$company','$country','$product','$amount','$des','$date')";
	   if($conn->query($sql)===true)
	   {
		   $_SESSION['date']=$date;
		   header('location:acc_order.php');
	   }
   else
   {
	   header('location:pro_order.php');
   }
	 ?>