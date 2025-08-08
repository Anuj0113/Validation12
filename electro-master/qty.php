<?php
				session_start();
					
	$conn = new mysqli('localhost','root','','wordpress');
	 $id = $_REQUEST['id'];
	 if($_REQUEST['id'] != NULL)
 {
	$s3="select * from cart WHERE id LIKE '%$id%'";
	$result4 = mysqli_query($conn,$s3);

	

	while($row3 = mysqli_fetch_array($result4))
	{ $i=$row3['quantity'];}
	
	switch ($i) {
		case 1:
			$i=2;
			$c="UPDATE cart SET quantity='$i' WHERE id LIKE '%$id%'";
			$result=mysqli_query($conn, $c);
			$c="UPDATE cart SET total=price*quantity where id LIKE '%$id%'";
	$result5 = mysqli_query($conn,$c);
	?>
	<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
    </head>
    <body>
        <div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>1 Item Is Added In Cart</h1>"; ?>
            <a href="cart.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
</html>
<?php
			break;

			case 2:
			$i=3;
			$c="UPDATE cart SET quantity='$i' WHERE id LIKE '%$id%'";
			$result=mysqli_query($conn, $c);
			$c="UPDATE cart SET total=price*quantity where id LIKE '%$id%'";
	$result5 = mysqli_query($conn,$c);
?>
	<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
    </head>
    <body>
        <div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>1 Item Is Added In Cart</h1>"; ?>
            <a href="cart.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
</html>
<?php
			break;
		
			case 3:
			$i=4;
			$c="UPDATE cart SET quantity='$i' WHERE id LIKE '%$id%'";
			$result=mysqli_query($conn, $c);
			$c="UPDATE cart SET total=price*quantity where id LIKE '%$id%'";
	$result5 = mysqli_query($conn,$c);
	?>
	<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
    </head>
    <body>
        <div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>1 Item Is Added In Cart</h1>"; ?>
            <a href="cart.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
</html>
<?php
			break;

			case 4:
			$i=5;
			$c="UPDATE cart SET quantity='$i' WHERE id LIKE '%$id%'";
			$result=mysqli_query($conn, $c);
			$c="UPDATE cart SET total=price*quantity where id LIKE '%$id%'";
	$result5 = mysqli_query($conn,$c);
	?>
	<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
    </head>
    <body>
        <div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>1 Item Is Added In Cart</h1>"; ?>
            <a href="cart.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
</html>
			<?php
			break;

			case 5:
			$i=6;
			$c="UPDATE cart SET quantity='$i' WHERE id LIKE '%$id%'";
			$result=mysqli_query($conn, $c);
			$c="UPDATE cart SET total=price*quantity where id LIKE '%$id%'";
	$result5 = mysqli_query($conn,$c);
	?>
	<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
    </head>
    <body>
        <div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>1 Item Is Added In Cart</h1>"; ?>
            <a href="cart.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
</html>
<?php
			break;

			case 6:
			?>
			<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
    </head>
    <body>
        <div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Do Enter Above 6 Quantity</h1>"; ?>
            <a href="cart.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
</html>
<?php
			break;

		default:
			$i=1;
			$c="UPDATE cart SET quantity='$i' WHERE id LIKE '%$id%'";
			$result=mysqli_query($conn, $c);
			$c="UPDATE cart SET total=price*quantity where id LIKE '%$id%'";
	$result5 = mysqli_query($conn,$c);
			break;
	}
	}
		else{echo "No Remove";}
	
	
	

 ?>
