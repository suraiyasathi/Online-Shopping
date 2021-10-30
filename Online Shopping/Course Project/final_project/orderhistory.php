<?php
session_start();
include 'db_connect.php';
$conn=OpenCon();
$mail=$_SESSION['email'];
$sql="select name,company from buyer_inf where email='$mail'";
$result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0){
     while ($row = mysqli_fetch_assoc($result)) {
		 $name=$row['name'];
		 $company=$row['company'];
	 }
	 }
?>
<html>
<head>
    <title>Order History</title>
	<link rel="stylesheet" type="text/css" href="seeorderstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<style type="text/css">
	table{
	border-collapse:collapse;
	width:50%;
	color:black;
	font-family:monospace;
	font-size:14.5px;
	text-align:center;
	position:absolute;
	top:200px;
	left:calc(6% - 50px);
}
th{
	background-color:black;
	color:white;
	opacity:0.8;
}
h1{
	margin:5px;
	padding:0 0 10px;
	text-align:right;
	font-size:16px;
	margin-top:40px;
	list-style:none;
}
</style>
</head>
<body>
<header>
	    <nav>
		    <div class="home clearfix animated slideInDown">
			<ul class="main-nav animated slideInDown">
			    <li><a href="index.php">Home</a></li>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="productchoice.php">Products</a></li>
				<li><a href="#">Comment</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Info</a></li>
			</ul>
		</nav>
	</header>
	</div>
	
	<div class="tablestyle">
	
    <table border=2 align="corner" style="text-align: center">
	<tr>
	    <th>Company</th>
		<th>Country</th>
		<th>Name</th>
		<th>Designation</th>
		<th>P_code</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Product_ID</th>
		<th>Order_Amount</th>
		<th>Description</th>
		<th>Dead-line</th>
		<th>Status</th>
	</tr>
<?php
$sql1="select * from acc_order where email='$mail'";   
$result = mysqli_query($conn,$sql1);
     if(mysqli_num_rows($result)>0){
     while ($row= mysqli_fetch_assoc($result)) {
		 $status=$row['status'];
	 echo "<tr><td>".$row['company']."</td><td>".$row['country']."</td><td>".$row['name']."</td><td>";
	 echo $row['designation']."</td><td>".$row['p_code']."</td><td>".$row['phone']."</td><td>";
	 echo $row['email']."</td><td>".$row['product_id']."</td><td>".$row['Order_amount']."</td><td>";
	 echo $row['description']."</td><td>".$row['dead_line']."</td><td>".$status."</td></tr>";
	 }
	 }
?>
</table>
</div>
<h1>
	<?php echo "$name"."/"; ?>
	<li><a href="logout.php">Logout</a></li>
	</h1>
</body>
</html>
