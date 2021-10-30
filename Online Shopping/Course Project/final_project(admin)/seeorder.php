<html>
<head>
    <title>Order</title>
	<link rel="stylesheet" type="text/css" href="seeorderstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<style type="text/css">
	table{
	border-collapse:collapse;
	width:50%;
	color:black;
	font-family:monospace;
	font-size:14px;
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
</style>
</head>
<body>
<header>
	    <nav>
		    <div class="home clearfix animated slideInDown">
			<ul class="main-nav animated slideInDown">
			    <li><a href="adminprofile.php">Profile</a></li>
				<li><a href="shipment.php">Shipment</a></li>
				<li><a href="workinghistory.php">Working History</a></li>
				<li><a href="#">Comments</a></li>
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
session_start();
include 'db_connect.php';
$conn=OpenCon();
$mail=$_SESSION['email'];
$sql="select * from acc_order";
$t=0;	   
$result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0){
     while ($row= mysqli_fetch_assoc($result)) {
		 $status=$row['status'];
		 echo "hello";
		 if($status!='Accepted' && $status!='Complete' && $status!='Rejected'){
		 $date[$t]=$row['dead_line'];
	 echo "<tr><td>".$row['company']."</td><td>".$row['country']."</td><td>".$row['name']."</td><td>";
	 echo $row['designation']."</td><td>".$row['p_code']."</td><td>".$row['phone']."</td><td>";
	 echo $row['email']."</td><td>".$row['product_id']."</td><td>".$row['Order_amount']."</td><td>";
	 echo $row['description']."</td><td>".$row['dead_line']."</td><td>";
?><br>
<form action="accept.php" name="a" method="post">
<input type="submit" value="Accept">
</form>
<form action="reject.php" method="post">
<input type="submit" value="Reject">
</form>
<?php echo "</td></tr>";$n=$t++;
		 }
	}}?>
<?php
for($t=0; $t<=$n; $t++){
	$_SESSION['date']=$date[0];	
}
?>
</table>
</div>
</form>
</body>
</html>