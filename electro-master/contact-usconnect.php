<?php
	session_start();
	$conn = new mysqli('localhost','root','','wordpress');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
		$stmt =("insert into contactus(name,email,message)
		values('$name','$email','$message')");
		mysqli_query($conn,$stmt);
		
	
?>
<html>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
	<body>
		<div class="sign-up-form">
			<img src="image/right1.jpg" class="righticon">
			<?php echo"<h1>Registration Successfully...</h1>"; ?>
			<a href="contact-us.html">
			<button class="signup-btn" type="submit" value="Ok">Ok</button>
			</a>
		</div>
	</body>
</html>
