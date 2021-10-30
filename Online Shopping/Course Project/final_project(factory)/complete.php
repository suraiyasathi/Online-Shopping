<?php
session_start();
    $date=$_SESSION['date'];
    include 'db_connect.php';
$conn=OpenCon();
$mail=$_SESSION['email'];
$date=$_SESSION['date'];
$sql="update factory
       set status='Complete'
       where dead_line='$date'";
	   if($conn->query($sql)===true)
	   {
	   $sql1="select company,country,f.product_id,f.Order_amount,f.description,f.dead_line,f.status from factory as f,acc_order as a
	         where f.dead_line=a.dead_line and f.dead_line='$date'";
	   $result = mysqli_query($conn,$sql1);
     if(mysqli_num_rows($result)>0){
     while ($row= mysqli_fetch_assoc($result)) {
		 $company=$row['company'];
		 $country=$row['country'];
		 $id=$row['product_id'];
		 $amount=$row['Order_amount'];
		 $description=$row['description'];
		 $dead=$row['dead_line'];
		 $status=$row['status'];
		 if($status=='Complete'){
		 $sql2="insert into shipment(company,country,product_id,Order_amount,description,dead_line,status)
		 values('$company','$country','$id','$amount','$description','$dead','')";
		 if($conn->query($sql2)===true)
	   {
		   header('location:factoryhistory.php');
	   }
	   }}}}
   else
   {
	   header('location:factoryseeorder.php');
   }
?>