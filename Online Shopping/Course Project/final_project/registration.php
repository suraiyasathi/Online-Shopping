<html>
<head>
    <title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="registrationstyle.css">
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
    <div class="register-box">
	
	<h1>Register Here</h1>
	<form action = "reginsert.php" method = "post">
	       <input type="text" Name="comp"  placeholder="Enter Your Company Name"><br>
           <input type="text" Name="name"  placeholder="Enter Your Name"><br>
           <input type="text" Name="desig"  placeholder="Enter Designation"><br>
		   <input type="password" Name="pass"  placeholder="Enter a Password"><br>
		   <input type="password" Name="confpass"  placeholder="Confirmation Password"><br>
           <input type="text" Name="email"  placeholder="Enter Your Email"><br>
           <select name="code" >  <option>+88</option> <option>+61</option><option>+1</option>
		   <option>+33</option><option>+1</option></select>
           <input type="number" Name="number"  placeholder="Enter  Your Phone Number"><br>

           <select name="country" >  <option>Bangladesh</option> <option>Australia</option>
		   <option>Canada</option><option>U.K</option><option>U.S.A</option></select><br>
           <br>
           <input type="Submit" value="Register">
           
       </form>
    </div>
</body>
</html>
