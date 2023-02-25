<html>
<head><link rel="stylesheet" type="text/css" href="CSS FILE/style4.css"></head>
<body>

<div class="sign-up-form">
<img src="image/icon.png.png" class="usericon">
<h1>Sign Up</h1>

<FORM action="signupconnect.php" method="post">

<b>Mobile:</b>
<input class="input-box" type="number" name="number" placeholder="Enter Mobile No." required><br><br>

<b>Password:</b>
<input class="input-box" type="password" name="password" placeholder="Enter Password" required><br><br>

<b>Confirm Password:</b>
<input class="input-box" type="password" name="Confirm_password" placeholder="Enter Confirm Password" required><br><br>

<b><span><input class="checkbox" type="checkbox" required></span>I agree to the terms of services</b>

<button type="submit" class="signup-btn" value="Submit">Submit</button><br><br>

<button type="reset" class="signup-btn" name="reset" value="Reset">Reset</button><br><br>

<hr>
<b><p class="or">OR</p></b>

<b>Already Have Account?</b><a href="Mlogin.php"><h3>Login</h3></a>
<a href="Manufacture.php"><h3>Home</h3></a>

</FORM>
</div>
</body>
</html>