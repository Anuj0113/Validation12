<?php
	session_start();
	$conn = new mysqli('localhost','root','','wordpress');

	$email = $_POST['email'];
	$password = $_POST['password'];
	$Confirm_password = $_POST['Confirm_password'];
	$name = $_POST['name'];

	$s="select * from customer where email='$email'";
	$result = mysqli_query($conn,$s);
	$num = mysqli_num_rows($result);

	if($num == 1)
	{
?>
		<html>
<link rel="stylesheet" type="text/css" href="css/style1.css">
 <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="html/image/logo125.png"><body>
		<div class="sign-up-form">
			<img src="image/wrong.jpg" class="wrongicon">
			<?php echo"<h1>User Already Taken</h1>"; ?>
			<a href="Csignup.php">
			<button class="signup-btn" type="submit" value="Ok">Ok</button>
			</a>
		</div>
	</body>
</html>
<?php
	}
	else if($password != $Confirm_password)
	{?>
		<html>
<link rel="stylesheet" type="text/css" href="css/style1.css">
 <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="html/image/logo125.png"><body>
		<div class="sign-up-form">
			<img src="image/wrong.jpg" class="wrongicon">
			<?php echo"<h1>Password Do Not Match</h1>"; ?>
			<a href="Csignup.php">
			<button class="signup-btn" type="submit" value="Ok">Ok</button>
			</a>
		</div>
	</body>
</html>
<?php
	}
	else
	{
		$stmt =("insert into customer(email,password,name)
		values('$email','$password','$name')");
		mysqli_query($conn,$stmt);
		
?>
		<html>
<link rel="stylesheet" type="text/css" href="css/style1.css">
 <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="html/image/logo125.png"><body>
		<div class="sign-up-form">
			<img src="image/right1.jpg" class="righticon">
			<?php echo"<h1>Registration Successfully...</h1>"; ?>
			<a href="Clogin.php">
			<button class="signup-btn" type="submit" value="Ok">Ok</button>
			</a>
		</div>
	</body>
</html>
<?php
	}
?>
