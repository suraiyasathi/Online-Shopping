<?php 
session_start();
include 'db_connect.php';
$conn=OpenCon();
$flag=5;
$_SESSION['flag']=$flag;
$_SESSION['id']=$_GET['id'];
if(isset($_SESSION['email']))
	header("location:pro_order.php");
else
	header("location:login.php");
?>
<html>
<head>
     <title>product</title>
</head>
<body>	 
<form action="pro_order.php" method="post">
  <input type="submit" value="submit">
</form>
</body>
</html>	