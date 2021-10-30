<?php
header("location:registration.php");
?><html>
<head>
    <title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="adminloginstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
    <body>
	<header>
	    <nav>
		    <div class="home clearfix animated slideInDown">
			<ul class="main-nav animated slideInDown">
			    <li><a href="index.php">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Info</a></li>
			</ul>
		</nav>
	</header>
    <div class="login-box">
	<img src="log-in.jpg" class="log-in">
	<h1>Login Here</h1>
	<form action = "" method = "post">
                  <p>Email Id</p>
				  <input type = "text" name = "email" placeholder="Enter your Email Id">
                  <p>Password</p>
				  <input type = "password" name = "password" placeholder="Enter Password">
                  <input type = "submit" value = "Sign in">
				  </form>  
    </div>	
	</body>
</html>