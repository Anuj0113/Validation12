<html>
<head><link rel="stylesheet" type="text/css" href="css/style4.css"></head>
	<body>
		<div class="header">
    	<b>
    	<a href="#default" class="logo"><img src="image/logo.png"></a>
        		<div class="menu1">
            		<a href="interface.html">Home</a>
            		<a href="about us.html">About Us</a>
            		<a href="#contact">FAQ</a>
        		</div>
    	</b>
		</div>


		<div class="sign-up-form">

			<img src="image/icon.png.png" class="usericon">
			<h1>Sign Up</h1>

			<FORM action="Msignupconnect.php" method="post">

				<b>Mobile:</b>
				<input class="input-box" type="number" name="number" placeholder="Enter Mobile No." required><br><br>

				<b>Password:</b>
				<input class="input-box" type="password" name="password" placeholder="Enter Password" required><br><br>

				<b>Confirm Password:</b>
				<input class="input-box" type="password" name="Confirm_password" placeholder="Enter Confirm Password" required><br><br>

				<b><span><input class="checkbox" type="checkbox" required></span>I agree to the terms of services</b>

				<button type="submit" class="signup-btn" value="Submit">Submit</button><br><br>
				
				<hr>
				<b><p class="or">OR</p></b>

				<b>Already Have Account?</b><a href="Mlogin.php"><h1>Login</h1></a>
				<a href="interface.html"><h1>Home</h1></a>

			</FORM>
		</div>
		<img src="image/Msignup.jpg" class="login2">

	</body>
</html>