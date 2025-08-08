<?php
	session_start();
	$conn = new mysqli('localhost','root','','wordpress');

	
	$number = $_POST['number'];
	$password = $_POST['password'];

	$s="select * from manufacture where number='$number' && password='$password'";
	$result = mysqli_query($conn,$s);
	$num = mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
	if($num == 1)
	{	
		
		    $g = "select * from maccount where number='$number'";
       $y = mysqli_query($conn,$g);
       $t = mysqli_num_rows($y);
    
       if($t == 0)
       {
       $s = "insert into maccount values('$cname','','$number','','','123456','','','','')";
       	mysqli_query($conn,$s);
 		header('location:html/index.php');
 	}
 	else
 	{header('location:html/index.php');}
	}
	else
	{?>
		<html>
       <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="html/image/logo125.png">
<link rel="stylesheet" type="text/css" href="css/style1.css">
	<body>
		<div class="sign-up-form">
			<img src="image/wrong.jpg" class="wrongicon">
			<?php echo"<h1>Invalid Mobile Number<br>OR<br>Invalid Password</h1>"; ?>
			<a href="Mlogin.php">
			<button class="signup-btn" type="submit" value="Ok">Ok</button>
			</a>
		</div>
	</body>
</html>
<?php
	}
?>
