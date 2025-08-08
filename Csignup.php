<html>
<head><link rel="stylesheet" type="text/css" href="css/style4.css">
 <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="html/image/logo125.png"><body>
		<div class="header">
    		<a href="Clogin.php">&larr; Back</a>
  		</div>


		<div class="sign-up-form">

			<img src="image/icon.png.png" class="usericon">
			<h1>Sign Up</h1>

			<FORM action="Csignupconnect.php" method="post">

				<b>Name:</b>
                <input class="input-box" id="alphabets" name="name" placeholder="Enter Your Name" type="text" required>

				<b>Email:</b>
                <input class="input-box" type="email" name="email" placeholder="Enter Email Id" required><br><br>

				<b>Password:</b>
				<input class="input-box" type="password" name="password" placeholder="Enter Password" required><br><br>

				<b>Confirm Password:</b>
				<input class="input-box" type="password" name="Confirm_password" placeholder="Enter Confirm Password" required><br><br>

				<b><span><input class="checkbox" type="checkbox" required></span>I agree to the terms of services</b>

				<button type="submit" class="signup-btn" value="Submit">Submit</button><br><br>
				
				<hr>
				<b><p class="or">OR</p></b>

				<b>Already Have Account?</b><a href="Clogin.php"><h1>Login</h1></a>
				<a href="interface.html"><h2>Home</h2></a>

			</FORM>
		</div>
		<img src="image/login1.png" class="login">

	</body>
</html>