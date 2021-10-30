<html>
<head>
    <title>Orders</title>
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
$sql="select * from factory";
$t=0;	   
$result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0){
     while ($row= mysqli_fetch_assoc($result)) {
		 $status=$row['status'];
		 if($status!='Complete'){
		 $date[$t]=$row['dead_line'];
	 echo "<tr><td>".$row['product_id']."</td><td>".$row['Order_amount']."</td><td>";
	 echo $row['description']."</td><td>".$row['dead_line']."</td><td>";
?><br>
<form action="complete.php" method="post">
<input type="submit" value="Complete">
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