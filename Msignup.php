<html>
<head><link rel="stylesheet" type="text/css" href="css/style4.css">
 <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="html/image/logo125.png">
	<body>
		<div class="header">
    		<a href="Mlogin.php">&larr; Back</a>
  		</div>


		<div class="sign-up-form">

			<img src="image/icon.png.png" class="usericon">
			<h1>Sign Up</h1>

			<FORM action="Msignupconnect.php" method="post">


				<b>Company Name:</b>
				<input class="input-box" name="cname" id="alphabets" placeholder="Enter Your Organization Name"  type="text" required>
				
				<b>Mobile:</b>
				<input class="input-box" type="number" name="number" placeholder="Enter Mobile No." required><br><br>


				<label for="pwd"><b>Password</b></label>
  				<input class="input-box" type="password" id="pwd" name="password" placeholder="Enter Password" required>
  				
				  <label for="pwd"><b>Confirm Password</b></label>
  				<input class="input-box" type="password" id="pwd" name="Confirm_password" placeholder="Enter Confirm Password" required>

				

				<b><span><input class="checkbox" type="checkbox" required></span>I agree to the terms of services</b>

				<button type="submit" class="signup-btn" value="Submit">Submit</button><br><br>
				
				<hr>
				<b><p class="or">OR</p></b>

				<b>Already Have Account?</b><a href="Mlogin.php"><h1>Login</h1></a>
				<a href="interface.html"><h2>Home</h2></a>

			</FORM>
		</div>
		<img src="image/Msignup.jpg" class="login2">

	</body>
</html>