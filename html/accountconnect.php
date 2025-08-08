<?php 
$conn = new mysqli('localhost','root','','wordpress');


	$cname = $_POST['cname'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$country = $_POST['country'];
	$language = $_POST['language'];
	$currency = $_POST['currency'];
	$city = $_POST['city'];

$stmt = "insert into maccount values('$cname','$email','$number','$address','$state','$zip','$country','$language','$currency','$city')";
$result = mysqli_query($conn,$stmt);
?>
		<html>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
	<body>
		<div class="sign-up-form">
			<img src="image/right1.jpg" class="righticon">
			<?php echo"<h1>Profile Edited Successfully...</h1>"; ?>
			<a href="account.php">
			<button class="signup-btn" type="submit" value="Ok">Ok</button>
			</a>
		</div>
	</body>
</html>
