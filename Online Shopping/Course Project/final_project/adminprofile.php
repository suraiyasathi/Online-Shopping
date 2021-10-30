<?php
session_start();
include 'db_connect.php';
$conn=OpenCon();
$mail=$_SESSION['email'];
$sql="select name from admin where email='$mail'";
$result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0){
     while ($row = mysqli_fetch_assoc($result)) {
		 $name=$row['name'];
	 }
	 }
?>
<html>
<head>
    <title>Profile</title>
	<link rel="stylesheet" type="text/css" href="adminprofilestyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
	<header>
	    <nav>
		    <div class="home clearfix animated slideInDown">
			<ul class="main-nav animated slideInDown">
			    <li><a href="index.php">Home</a></li>
				<li><a href="seeorder.php">Order</a></li>
				<li><a href="accept.php">Order History</a></li>
				<li><a href="#">Comments</a></li>
			</ul>
		</nav>
	</header>
	<h1>
	<?php echo "$name"."\t"."/"; ?>
	<li><a href="adminlogout.php">Logout</a></li>
	
	</h1>
	</body>
</html>