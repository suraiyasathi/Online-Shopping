<html>
<head>
    <title>Profile</title>
	<link rel="stylesheet" type="text/css" href="summermalestyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
	<header>
	    <nav>
		    <div class="home clearfix animated slideInDown">
			<ul class="main-nav animated slideInDown">
			    <li><a href="index.php">Home</a></li>
				<li><a href="orderhistory.php">Order History</a></li>
				<li><a href="#">About Us</a></li>
			    <li><a href="#">Contact Info</a></li>
				<li><a href="#">Comment</a></li>
			</ul>
		</nav>
	</header>
	</div>
	<div class="product">
	<ul>
	    <li>Summer
		    <ul>
			    <li><a href="#">Male</a></li>
				<li><a href="#">Female</a></li>
				<li><a href="#">Male(kid)</a></li>
				<li><a href="#">Female(kid)</a></li>
			</ul>
        </li>
		<li>Winter
		    <ul>
			    <li><a href="#">Male</a></li>
				<li><a href="#">Female</a></li>
				<li><a href="#">Male(kid)</a></li>
				<li><a href="#">Female(kid)</a></li>
			</ul>
        </li>
		</div>
		<div class="productpic1">
	<img src="product1.jpeg" class="product1">
	<h4><?php
	session_start();
    include 'db_connect.php';
    $conn=OpenCon();
	$sql1="select * from products where product_id='SM-01'";
    $result = mysqli_query($conn,$sql1);
     if(mysqli_num_rows($result)>0){
     while ($row= mysqli_fetch_assoc($result)) {
		 $id=$row['product_id'];
		 $pro_name=$row['pro_name'];
		 $price=$row['price'];
		 echo $pro_name."<br>"."Product ID:".$id."\t"."Price:".$price;
	?><br>
	<button>
	<a href="product.php?id=SM-01">Order Now</a>
	</button>
	<?php }} ?>
	</h4>
	</div>
	<div class="productpic2">
	<img src="product2.jpg" class="product2">
	<h4><?php
	$sql2="select product_id,pro_name,price from products where product_id='SM-02'";
    $result = mysqli_query($conn,$sql2);
     if(mysqli_num_rows($result)>0){
     while ($row= mysqli_fetch_assoc($result)) {
		 $id=$row['product_id'];
		 $pro_name=$row['pro_name'];
		 $price=$row['price'];
		 echo $pro_name."<br>"."Product ID:".$id."\t"."Price:".$price;
	?><br>
	<button>
	<a href="product.php?id=SM-02">Order Now</a>
	</button>
	<?php }} ?>
	</h4>
	</div>
	<div class="productpic3">
	<img src="product3.jpg" class="product3">
	<h4><?php
	$sql3="select * from products where product_id='SM-03'";
    $result = mysqli_query($conn,$sql3);
     if(mysqli_num_rows($result)>0){
     while ($row= mysqli_fetch_assoc($result)) {
		 $id=$row['product_id'];
		 $pro_name=$row['pro_name'];
		 $price=$row['price'];
		 echo $pro_name."<br>"."Product ID:".$id."\t"."Price:".$price;
	?><br>
	<button>
	<a href="product.php?id=SM-03">Order Now</a>
	</button>
	<?php }} ?>
	</h4>
	</div>
	<div class="productpic4">
	<img src="product4.jpg" class="product4">
	<h4><?php
	$sql4="select * from products where product_id='SM-04'";
    $result = mysqli_query($conn,$sql4);
     if(mysqli_num_rows($result)>0){
     while ($row= mysqli_fetch_assoc($result)) {
		 $id=$row['product_id'];
		 $pro_name=$row['pro_name'];
		 $price=$row['price'];
		 echo $pro_name."<br>"."Product ID:".$id."\t"."Price:".$price;
	?><br><button>
	<a href="product.php?id=SM-04">Order Now</a>
	</button>
	<?php }} ?>
	</h4>
	</div>
	<div class="productpic5">
	<img src="product5.jpg" class="product5">
	<h4><?php
	$sql5="select * from products where product_id='SM-05'";
    $result = mysqli_query($conn,$sql5);
     if(mysqli_num_rows($result)>0){
     while ($row= mysqli_fetch_assoc($result)) {
		 $id=$row['product_id'];
		 $pro_name=$row['pro_name'];
		 $price=$row['price'];
		 echo $pro_name."<br>"."Product ID:".$id."\t"."Price:".$price;
	?><br>
	<button>
	<a href="product.php?id=SM-05">Order Now</a>
	</button>
	<?php }} ?>
	</h4>
	</div>
	</body>
</html>