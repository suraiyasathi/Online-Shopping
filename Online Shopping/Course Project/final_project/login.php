<html>
<head>
    <title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
    <body>
	<header>
	    <nav>
		    <div class="home clearfix animated slideInDown">
			<ul class="main-nav animated slideInDown">
			    <li><a href="index.php">Home</a></li>
				<li><a href="#">Contact Info</a></li>
			</ul>
		</nav>
	</header>
    <div class="login-box">
	
	<h1>Login Here</h1>
	<form action = "loginconf.php" method = "post">
                  <p>Email ID</p>
				  <input type = "email" name = "email" placeholder="Enter your email id">
                  <p>Password</p>
				  <input type = "password" name = "password" placeholder="Enter Password">
                  <input type = "submit" value = "Sign in">
				  </form>
				  <form action="registration.php" method="post">
				  <h5>or,<br>Create An Account</h5>
				  <input type="submit" name="reg" value="Sign Up">
               </form>   
    </div>	
</body>
</html>

