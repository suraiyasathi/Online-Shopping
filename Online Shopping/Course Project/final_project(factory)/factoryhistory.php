
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
body{
	margin:0;
	padding:0;
	background-size:cover;
	background-position:center;
	font-family:sans-serif;
	height:720px;
}
.main-nav{
	float:left;
	margin-top:90px;
}
.main-nav li{
	display:inline-block;
	list-style:none;
	margin-right:23px;
}
.main-nav li a{
	padding:5px 0;
	color:#000;
	text-decoration:none;
	text-transform:uppercase;
	font-size:100%;
	font-weight:100;
	display:block;
}
.main-nav li a:hover{
background-color:#87cefa;	
border-bottom:2px solid #bf55ec;
}
</style>
</head>
<body>
<header>
	    <nav>
		    <div class="home clearfix animated slideInDown">
			<ul class="main-nav animated slideInDown">
			    <li><a href="index.php">Home</a></li>
				<li><a href="factoryprofile.php">Profile</a></li>
			</ul>
		</nav>
	</header>
	</div>
	
	<div class="tablestyle">
	
    <table border=2 align="corner" style="text-align: center">
	<tr>
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
$sql1="select * from factory";   
$result = mysqli_query($conn,$sql1);
     if(mysqli_num_rows($result)>0){
     while ($row= mysqli_fetch_assoc($result)) {
		 $status=$row['status'];
	 echo "<tr><td>".$row['product_id']."</td><td>".$row['Order_amount']."</td><td>";
	 echo $row['description']."</td><td>".$row['dead_line']."</td><td>".$status."</td></tr>";
	 }
	 }
?>
</table>
</div>
</body>
</html>
