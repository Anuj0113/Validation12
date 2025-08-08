					<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		 <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style1.css"/>
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/regular.min.css" integrity="sha512-WidMaWaNmZqjk3gDE6KBFCoDpBz9stTsTZZTeocfq/eDNkLfpakEd7qR0bPejvy/x0iT0dvzIq4IirnBtVer5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css" integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        

    
<meta charset="utf-8">
											<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="index.php" style="color:white; margin-left: -150px;">&larr;Back</a></li>
						<li><a href="#"><i class="fa fa-phone"></i>9662428169</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i>gohelgohel86@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Ahmedabad - Gujarat</a></li>
					</ul>
						<ul class='header-links pull-right'>
						<li><a href='Account.php'><i class="fa fa-user-o" style='margin-left:10px;'></i>My Account</a></li>
					</ul>
							 <?php
	$conn = new mysqli('localhost','root','','wordpress');	

	

	$stmt1 =("select * from address");
        $result=mysqli_query($conn,$stmt1);
        $rowcount = mysqli_num_rows($result);
    	if($rowcount != 0)
    	{
	echo "<ul class='header-links pull-right' style='margin-left: 10px;'><li><a href='AddressShowing1.php'><i class='fa fa-map-marker'></i>Manage Address</a></li>";
	}
	
	else
	{
	echo "<ul class='header-links pull-right' style='margin-left: 10px;'><li><a href='AddressNew1.php'><i class='fa fa-map-marker'></i>Manage Address</a></li>";
	}?>
					
				
					<ul class="header-links pull-right" style='margin-left: 10px;'>
						<li><a href="order.php" name="a1"><i class='fas fa-shopping-bag'></i>Orders</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="scanner.php" name="a1"><i class="fa-sharp fa-solid fa-print"></i>Scanner</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="image/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->
							<!-- SEARCH BAR -->
						<div class="col-md-6">
							
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
						<?php	
						
	$conn = new mysqli('localhost','root','','wordpress');

	$s="select * from cart";
	$result = mysqli_query($conn,$s);
	$rowcount = mysqli_num_rows( $result );?>

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" href="cart.php" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty"><?php printf("%d\n", $rowcount);?></div>
									</a>
									
									<div class="cart-dropdown" style="height:250px; width: 400px;">
										<div class="cart-list">
										<?php
											if($rowcount != 0)
										  {
										while($row = mysqli_fetch_array($result))
										{ 
											?>
											<div class="product-widget">
											
												<div class="product-img">
													<?php echo "<img src=".$row['img'].' width="100px" height="100px">';?>
												</div><br>
												<div class="product-body">
													<h3 class="product-name"><?php echo $row['name'];?></h3>
													<h4 class="product-price">Quantity:<?php echo $row['quantity'];?>x</h4>
													<h4 class="product-price">Price: ₹<?php echo $row['price'];?></h4>
												</div>
											
												<?php echo "<a href='deleteproduct1.php?id={$row['id']}';>" ?><button class="delete"><i class="fa fa-close"></i><?php "</a>"; ?></button>
<?php } ?>

											</div>

										</div>

										<div class="cart-summary">
											
											<h5><?php
											$results = mysqli_query($conn,"SELECT sum(total) FROM cart");

											for($i=0; $rowz =  mysqli_fetch_array($results); $i++)
											{
												echo "<h4>"."SUBTOTAL: ₹".$rowz['sum(total)']."</h4>";
																					}
											?>
											</h5>
										</div>
										<div class="cart-btns" style="width: 350px;">
											<a href="cart.php">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>

									</div>

								</div>
								<?php }else{echo "Your Cart Is Empty...";} ?>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								
								<!-- /Menu Toogle -->
							</div>
						</div>

					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
		<br><br>

<?php
					if(isset($_POST['a1']))

{
					
					
	$conn = new mysqli('localhost','root','','wordpress');

	$q="select * from product where id=1";
	$result2 = mysqli_query($conn,$q);

	$q1="select * from wishlist where id=1";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	


	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php

}

}


elseif(isset($_POST['a2']))

{
				
	$conn = new mysqli('localhost','root','','wordpress');

	$q="select * from product where id=2";
	$result2 = mysqli_query($conn,$q);
	$q1="select * from wishlist where id=2";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	


	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}


elseif(isset($_POST['a3']))

{
					
					
	$conn = new mysqli('localhost','root','','wordpress');

	$q="select * from product where id=3";
	$result2 = mysqli_query($conn,$q);
	$q1="select * from wishlist where id=3";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	


	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php

	}


}
elseif(isset($_POST['a4']))

{
					
$conn = new mysqli('localhost','root','','wordpress');

	$q="select * from product where id=4";
	$result2 = mysqli_query($conn,$q);
	$q1="select * from wishlist where id=4";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	



	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php

	}

}
elseif(isset($_POST['a5']))

{
					
$conn = new mysqli('localhost','root','','wordpress');

	$q="select * from product where id=5";
	$result2 = mysqli_query($conn,$q);
	$q1="select * from wishlist where id=5";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	



	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php

	}

}
elseif(isset($_POST['a6']))
{
$conn = new mysqli('localhost','root','','wordpress');

	$q="select * from product1 where id=6";
	$result2 = mysqli_query($conn,$q);
	$q1="select * from wishlist where id=6";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{
	$row=mysqli_fetch_array($result2);
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	


	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}

elseif(isset($_POST['a7']))

{
$conn = new mysqli('localhost','root','','wordpress');

	$q="select * from product1 where id=7";
	$result2 = mysqli_query($conn,$q);
	$q1="select * from wishlist where id=7";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	



	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php

	}

}
elseif(isset($_POST['a8']))
{
$conn = new mysqli('localhost','root','','wordpress');

	$q="select * from product1 where id=8";
	$result2 = mysqli_query($conn,$q);
	$q1="select * from wishlist where id=8";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	



	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php

	}
}

elseif(isset($_POST['a9']))
{
$conn = new mysqli('localhost','root','','wordpress');

	$q="select * from product1 where id=9";
	$result2 = mysqli_query($conn,$q);
	$q1="select * from wishlist where id=9";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);

	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{		$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	



	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}

elseif(isset($_POST['a10']))

{
$conn = new mysqli('localhost','root','','wordpress');

	$q="select * from product1 where id=10";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=10";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	



	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}

elseif(isset($_POST['a11']))

{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product3 where id=11";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=11";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	

	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
elseif(isset($_POST['a12']))

{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product3 where id=12";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=12";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	


	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
		

elseif(isset($_POST['a13']))
{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product3 where id=13";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=13";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	


	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}


elseif(isset($_POST['a14']))
					

{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product3 where id=14";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=14";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	



	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
elseif(isset($_POST['a15']))


{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product3 where id=15";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=15";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	


	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
elseif(isset($_POST['a16']))

{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product3 where id=16";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=16";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	

	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	



	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
elseif(isset($_POST['a17']))

{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product4 where id=17";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=17";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	



	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
elseif(isset($_POST['a18']))

{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product4 where id=18";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=18";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	


	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
elseif(isset($_POST['a19']))

{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product4 where id=19";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=19";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	



	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
elseif(isset($_POST['a20']))

{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product4 where id=20";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=20";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	



	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
elseif(isset($_POST['a21']))

{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product4 where id=21";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=21";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	

	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
elseif(isset($_POST['a22']))

{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product4 where id=22";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=22";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	



	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
elseif(isset($_POST['a23']))

{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product4 where id=23";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=23";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	

	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
elseif(isset($_POST['a24']))

{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product5 where id=24";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=24";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	

	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
elseif(isset($_POST['a25']))

{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product5 where id=25";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=25";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	

	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
elseif(isset($_POST['a26']))

{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product5 where id=26";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=26";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	

	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
elseif(isset($_POST['a27']))

{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product5 where id=27";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=27";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	


	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
elseif(isset($_POST['a28']))

{
					
	$conn = new mysqli('localhost','root','','wordpress');
	
	$q="select * from product5 where id=28";
	$result2 = mysqli_query($conn,$q);
		$q1="select * from wishlist where id=28";
	$result3 = mysqli_query($conn,$q1);
	$num = mysqli_num_rows($result3);
	if($num == 1)
	{
		?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Product Already In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}else
{	
	$row=mysqli_fetch_array($result2); 

	$cname = $row['cname'];
	$category = $row['category'];
	$id = $row['id'];
	$name = $row['name'];
	$price = $row['price'];
	$image = $row['image'];
	$quantity = 1;
	$total = $row['price'];

	$c =  "INSERT INTO `wishlist`(`cname`,`category`,`id`,`name`, `price`, `img`,  `quantity`,`total`) VALUES ('$cname','$category','$id','$name','$price','$image','$quantity','$total')";
	$result1=mysqli_query($conn,$c);
	


	
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Product Added In Wishlist</h1>"; ?>
            <a href="wishlist.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php
}
	}
else
{
	$conn = new mysqli('localhost','root','','wordpress');

	$s1="select * from wishlist";
	$result2 = mysqli_query($conn,$s1);
	$rowcount = mysqli_num_rows($result2);
	if($rowcount != 0)
	{
	
	echo "<div class='row'><div class='column'><table style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width:188%; height:30%;'>
	<tr>
	<th><h3><b>Campany Name</b></h3></th>
	<th><h3><b style='margin-left:2%;'>Product</b></h3></th>
	<th><h3><b style='margin-left:-7%;'>Category</b></h3></th>
	<th><h3><b style='margin-left:-7%;'>Name</b></h3></th>
	<th><h3><b style='margin-left:-7%;'>Price</b></h3></th>
	<th><h3><b style='margin-left:-7%;'>Remove</b></h3></th>
	</tr>";
	
	while($row1 = mysqli_fetch_array($result2))
	{
	switch ($row1['id']) {
			case 1:
				echo "<tr>";
					echo "<td><a href='product5.php?a1=5.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product5.php?a1=5.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
		echo "<td><a href='product5.php?a1=5.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product5.php?a1=5.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product5.php?a1=5.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
			break;
			
			case 2:
				echo "<tr>";
					echo "<td><a href='product2.php?a1=2.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product2.php?a1=2.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product2.php?a1=2.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product2.php?a1=2.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product2.php?a1=2.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
				
				case 3:
				echo "<tr>";
					echo "<td><a href='product3.php?a1=3.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product3.php?a1=3.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product3.php?a1=3.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product3.php?a1=3.2'><b>".$row1['name']."</b></td></a>";
		echo "<td><a href='product3.php?a1=3.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
				
				case 4:
				echo "<tr>";
					echo "<td><a href='product1.php?a1=1.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product1.php?a1=1.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product1.php?a1=1.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product1.php?a1=1.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product1.php?a1=1.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
				
				case 5:
				echo "<tr>";
					echo "<td><a href='product4.php?a1=4.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product4.php?a1=4.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product4.php?a1=4.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product4.php?a1=4.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product4.php?a1=4.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
				
				case 6:
				echo "<tr>";
					echo "<td><a href='product6.php?a1=6.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product6.php?a1=6.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product6.php?a1=6.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product6.php?a1=6.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product6.php?a1=6.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
				
				case 7:
				echo "<tr>";
					echo "<td><a href='product7.php?a1=7.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product7.php?a1=7.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product7.php?a1=7.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product7.php?a1=7.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product7.php?a1=7.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
				
				case 8:
				echo "<tr>";
					echo "<td><a href='product8.php?a1=8.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product8.php?a1=8.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product8.php?a1=8.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product8.php?a1=8.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product8.php?a1=8.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
				
				case 9:
				echo "<tr>";
					echo "<td><a href='product9.php?a1=9.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product9.php?a1=9.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
echo "<td><a href='product9.php?a1=9.2'><b>".$row1['category']."</b></td></a>";	
	echo "<td><a href='product9.php?a1=9.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product9.php?a1=9.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
				
				case 10:
				echo "<tr>";
					echo "<td><a href='product10.php?a1=10.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product10.php?a1=10.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product10.php?a1=10.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product10.php?a1=10.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product10.php?a1=10.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
case 11:
				echo "<tr>";
					echo "<td><a href='product14.php?a1=14.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product14.php?a1=14.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product14.php?a1=14.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product14.php?a1=14.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product14.php?a1=14.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
case 12:
				echo "<tr>";
					echo "<td><a href='product13.php?a1=13.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product13.php?a1=12.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product13.php?a1=13.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product13.php?a1=12.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product13.php?a1=12.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
case 13:
				echo "<tr>";
					echo "<td><a href='product12.php?a1=12.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product12.php?a1=12.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product12.php?a1=12.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product12.php?a1=12.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product12.php?a1=12.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
case 14:
				echo "<tr>";
					echo "<td><a href='product21.php?a1=21.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product21.php?a1=21.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product21.php?a1=21.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product21.php?a1=21.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product21.php?a1=21.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
case 15:
				echo "<tr>";
					echo "<td><a href='product22.php?a1=22.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product22.php?a1=22.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product22.php?a1=22.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product22.php?a1=22.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product22.php?a1=22.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
case 16:
				echo "<tr>";
					echo "<td><a href='product15.php?a1=15.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product15.php?a1=15.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product15.php?a1=15.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product15.php?a1=15.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product15.php?a1=15.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
case 17:
				echo "<tr>";
					echo "<td><a href='product16.php?a1=16.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product16.php?a1=16.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product16.php?a1=16.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product16.php?a1=16.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product16.php?a1=16.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
case 18:
				echo "<tr>";
					echo "<td><a href='product17.php?a1=17.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product17.php?a1=17.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product17.php?a1=17.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product17.php?a1=17.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product17.php?a1=17.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
case 19:
				echo "<tr>";
					echo "<td><a href='product18.php?a1=18.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product18.php?a1=18.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product18.php?a1=18.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product18.php?a1=18.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product18.php?a1=18.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
case 20:
				echo "<tr>";
					echo "<td><a href='product23.php?a1=23.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product23.php?a1=23.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product23.php?a1=23.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product23.php?a1=23.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product23.php?a1=23.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
				case 21:
				echo "<tr>";
					echo "<td><a href='product24.php?a1=24.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product24.php?a1=24.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";
	echo "<td><a href='product24.php?a1=24.2'><b>".$row1['category']."</b></td></a>";	
	echo "<td><a href='product24.php?a1=24.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product24.php?a1=24.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
				case 22:
				echo "<tr>";
					echo "<td><a href='product25.php?a1=25.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product25.php?a1=25.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product25.php?a1=25.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product25.php?a1=25.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product25.php?a1=25.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
				case 23:
				echo "<tr>";
					echo "<td><a href='product19.php?a1=19.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product19.php?a1=19.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product19.php?a1=19.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product19.php?a1=9.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product19.php?a1=19.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
				case 24:
				echo "<tr>";
					echo "<td><a href='product20.php?a1=20.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product20.php?a1=20.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product20.php?a1=20.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product20.php?a1=20.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product20.php?a1=20.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
				case 25:
				echo "<tr>";
					echo "<td><a href='product11.php?a1=11.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product11.php?a1=11.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product11.php?a1=11.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product11.php?a1=11.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product11.php?a1=11.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
				case 26:
				echo "<tr>";
					echo "<td><a href='product26.php?a1=26.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product26.php?a1=26.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product26.php?a1=26.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product26.php?a1=26.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product26.php?a1=26.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
				case 27:
				echo "<tr>";
	echo "<td><a href='product27.php?a1=27.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product27.php?a1=27.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product27.php?a1=27.2'><b>".$row1['category']."</b></td></a>";
		echo "<td><a href='product27.php?a1=27.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product27.php?a1=27.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
				case 28:
				echo "<tr>";
					echo "<td><a href='product28.php?a1=28.2'><b>".$row1['cname']."</b></td></a>";
	echo "<td><a href='product28.php?a1=28.2'>"?><img src="<?php echo $row1['img'];?>" width="100px" height="100px"><?php "</td></a>";	
	echo "<td><a href='product28.php?a1=28.2'><b>".$row1['category']."</b></td></a>";
	echo "<td><a href='product28.php?a1=28.2'><b>".$row1['name']."</b></td></a>";
	echo "<td><a href='product28.php?a1=28.2'><b>"."₹".$row1['price']."<b></a></td>";
	echo "<td>"."<a href='deleteproduct1.php?id={$row1['id']}'>Remove</a>"."</td>";
	echo "</tr>";
				break;
			default:
				echo "No";
				break;
	}
	}

	echo "<tr>";
	echo "<td colspan=5>"."<a href='deleteproduct1.php?id=All'>Remove All Product</a>"."</td>";
	echo "</tr></table></div>";	



}
else
{
	?>
	<html>
<head>
     
      <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
        <link type="text/css" rel="stylesheet" href="css/style2.css"/>
</head>
<body>

<div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>Your Wishlist Is Empty</h1>"; ?>
            <a href="index.php">
            <button class="signup-btn" type="submit" value="Ok">Ok</button>
            </a>
        </div>
    </body>
    </html>
    <?php

}

	
}?>
</body>
</html>