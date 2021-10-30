<?php
session_start();
    $date=$_SESSION['date'];
    include 'db_connect.php';
$conn=OpenCon();
$mail=$_SESSION['email'];
$date=$_SESSION['date'];
$sql="update acc_order
       set status='Accepted'
       where dead_line='$date'";
	   if($conn->query($sql)===true)
	   {
	   $sql1="select * from acc_order where dead_line='$date'";
	   $result = mysqli_query($conn,$sql1);
     if(mysqli_num_rows($result)>0){
     while ($row= mysqli_fetch_assoc($result)) {
		 $id=$row['product_id'];
		 $amount=$row['Order_amount'];
		 $description=$row['description'];
		 $dead=$row['dead_line'];
		 $status=$row['status'];
		 if($status=='Accepted'){
		 $sql2="insert into factory(product_id,Order_amount,description,dead_line,status)
		 values('$id','$amount','$description','$dead','')";
		 if($conn->query($sql2)===true)
	   {
		   header('location:acceptedorder.php');
	   }
   else
   {
	   header('location:seeorder.php');
   }
		 }
	 }
	 }
	   }
?>