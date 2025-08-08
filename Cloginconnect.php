<?php
	session_start();
	$conn = new mysqli('localhost','root','','wordpress');

	$email = $_POST['email'];
	$password = $_POST['password'];

	$s="select * from customer where email='$email' && password='$password'";
	$result = mysqli_query($conn,$s);
	$num = mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
	if($num == 1)
	{	
		$_SESSION['email']=$email;
		$g = "select * from caccount where email='$email'";
       	$y = mysqli_query($conn,$g);
       	$t = mysqli_num_rows($y);
       	$name=$row['name'];
       	
       	if($t == 0)
       	{
       		$s = "insert into caccount values('$email','$name','$password')";
       		mysqli_query($conn,$s);
 			header('location:electro-master/index.php');
 		}
 		else
 		{ 	header('location:electro-master/index.php');}
 	}
	else
	{
		?>
<html>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
 	<title>Product Validation</title>
       <link rel="icon" type="image/x-icon" href="html/image/logo125.png">
       <body>
		<div class="sign-up-form">
			<img src="image/wrong.jpg" class="wrongicon">
			<?php echo"<h1>Invalid Email Id<br>OR<br>Invalid Password</h1>"; ?>
			<a href="Clogin.php">
			<button class="signup-btn" type="submit" value="Ok">Ok</button>
			</a>
		</div>
	</body>
</html>
<?php
	}
?>
