<?php
	session_start();
	$conn = new mysqli('localhost','root','','wordpress');

	$cname = $_POST['cname'];
	$category = $_POST['category'];
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$image = "Products/".$_POST['image'];
	$description = $_POST['description'];
	
	$s="select * from product where id='$id'";
	$result = mysqli_query($conn,$s);
	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		
?>
<html>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
	<body>
		<div class="sign-up-form">
			<img src="image/wrong.jpg" class="righticon">
			<?php echo"<h1>Product Already Added...</h1>"; ?>
			<a href="AddProductForm.php">
			<button class="signup-btn" type="submit" value="Ok">Ok</button>
			</a>
		</div>
	</body>
</html>
	
<?php
	}
	else
	{
		$stmt =("insert into product(cname,category,id,name,price,image,description)
		values('$cname','$category','$id','$name','$price','$image','$description')");
		$r=mysqli_query($conn,$stmt);
		
	
?>
<html>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
	<body>
		<div class="sign-up-form">
			<img src="image/right1.jpg" class="righticon">
			<?php echo"<h1>Product Added Successfully...</h1>"; ?>
			<a href="AddProductForm.php">
			<button class="signup-btn" type="submit" value="Ok">Ok</button>
			</a>
		</div>
	</body>
</html>


	
<?php
	}
	?>
	