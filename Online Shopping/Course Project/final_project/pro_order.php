<?php
session_start();
include 'db_connect.php';
$conn=OpenCon();
$mail=$_SESSION['email'];
$sql="select company,country from buyer_inf where email='$mail'";
$result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0){
     while ($row = mysqli_fetch_assoc($result)) {
		$company=$row['company'];
		$country=$row['country'];
	 }
	 }
	 else
		 echo "sorry";
	 $_SESSION['company']=$company;
	 $_SESSION['country']=$country;
	 $id=$_SESSION['id'];
?>
<html>
<head>
     <title>product</title>
	 <link rel="stylesheet" type="text/css" href="productorderstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>	
<header>
	    <nav>
		    <div class="home clearfix animated slideInDown">
			<ul class="main-nav animated slideInDown">
			    <li><a href="index.php">Home</a></li>
				<li><a href="productchoice.php">Products</a></li>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="orderhistory.php">Order History</a></li>
				<li><a href="#">Comment</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Info</a></li>
			</ul>
		</nav>
	</header>
<div class="order-box">
<h1>Order Here</h1>	
<form action="order.php" method="post">
  Company:&nbsp; <input type="text" Name="company" value=<?php echo "$company"; ?>><br><br>
  Country: &nbsp;&nbsp;&nbsp;<input type="text" Name="country" value=<?php echo "$country"; ?>><br><br>
  Product Id: <input type="text" Name="p_id" value=<?php echo $id; ?>><br><br>
  Order:&nbsp;&nbsp;&nbsp;<input type="number" Name="amount" placeholder="Enter number of Order"><br><br>
  Dead-line:<input type="date" Name="dead" placeholder="Enter a Dead-line"><br><br>
  <textarea name="message" rows="5" cols="28">Order Description</textarea><br><br>
  <input type="submit" value="Order Here">
</form>
</div>
</body>
</html>	