<?php
session_start();
include 'db_connect.php';
$conn=OpenCon();
$mail=$_SESSION['email'];
$date=$_SESSION['date'];
$sql="select * from pro_order as p,buyer_inf as b
       where p.company=b.company and p.dead_line='$date'";
	   $result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0){
     while ($row= mysqli_fetch_assoc($result)) {
		 $company=$row['company'];
		 $country=$row['country'];
		 $name=$row['name'];
		 $designation=$row['designation'];
		 $code=$row['p_code'];
		 $phone=$row['phone'];
		 $email=$row['email'];
		 $id=$row['product_id'];
		 $amount=$row['Order_amount'];
		 $description=$row['description'];
		 $dead=$row['dead_line'];
		 $sql1="insert into acc_order(company,country,name,designation,email,p_code,phone,product_id,Order_amount,description,dead_line,status)
		 values('$company','$country','$name','$designation','$email','$code','$phone','$id','$amount','$description','$dead','')";
		 if($conn->query($sql1)===true)
	   {
		   header('location:orderhistory.php');
	   }
   else
   {
	   header('location:pro_order.php');
   }
	 }
	 }
?>