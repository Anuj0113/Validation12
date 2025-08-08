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
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		 <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/regular.min.css" integrity="sha512-WidMaWaNmZqjk3gDE6KBFCoDpBz9stTsTZZTeocfq/eDNkLfpakEd7qR0bPejvy/x0iT0dvzIq4IirnBtVer5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css" integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
					<?php
			 if($_GET['a1'] == 5)
        {
    echo "<ul class='header-links pull-left' style='margin-left: 10px;'><li><a href='cart.php' style='color:white; margin-left: -150px;''>&larr;Back</a></li>";
    }
    
    elseif($_GET['a1'] == 5.1)
    {
    echo "<ul class='header-links pull-left' style='margin-left: 10px;'><li><a href='index.php' style='color:white; margin-left: -150px;'>&larr;Back</a></li>";
    }else if($_GET['a1'] == 5.2)
	{
echo "<ul class='header-links pull-left' style='margin-left: 10px;'><li><a href='wishlist.php' style='color:white; margin-left: -150px;''>&larr;Back</a></li>";
}?>
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

	$s="select * from wishlist";
	$result = mysqli_query($conn,$s);
	$rowcount = mysqli_num_rows( $result );
											?>
								<div>
									<a href="wishlist.php">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty"><?php printf("%d\n", $rowcount);?></div>
									</a>
								</div>
								<!-- /Wishlist -->
		<?php	
												
						
	$conn = new mysqli('localhost','root','','wordpress');

	$s="select * from cart";
	$result = mysqli_query($conn,$s);
	$rowcount = mysqli_num_rows( $result );?>

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
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
													<img src="<?php echo $row['img'];?>" width="100px" height="100px">
												</div><br>
												<div class="product-body">
													<h3 class="product-name"><a href="#"><?php echo $row['name'];?></a></h3>
													<h4 class="product-price">Quantity:<?php echo $row['quantity'];?>x</h4>
													<h4 class="product-price">Price: ₹<?php echo $row['price'];?></h4>
												</div>
											
												<?php echo "<a href='deleteproduct.php?id={$row['id']}';>" ?><button class="delete"><i class="fa fa-close"></i><?php "</a>"; ?></button>
<?php } ?>

											</div>

										</div>

										<div class="cart-summary">
											
											<h5><a href="#"><?php
											$results = mysqli_query($conn,"SELECT sum(total) FROM cart");

											for($i=0; $rowz =  mysqli_fetch_array($results); $i++)
											{
												echo "<h4>"."SUBTOTAL: ₹".$rowz['sum(total)']."</h4>";
																					}
											?>
											</a></h5>
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
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="Atta,Rice&Dals.php">Atta,Rice & Dals</a></li>
						<li><a href="Dry Fruits & Nuts.php">Dry Fruits & Nuts</a></li>
						<li><a href="Dairy & Breads.php">Dairy & Breads</a></li>
						<li><a href="Tea & Coffee.php">Tea & Coffee</a></li>
						<li><a href="Biscuits.php">Biscuits</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
				

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
							<?php 
					
	$conn = new mysqli('localhost','root','','wordpress');
	

$stmt =("select * from product where id=1");
$re= mysqli_query($conn,$stmt);
   
 while($row3 = mysqli_fetch_array($re))
    {
		if(!$row3)
		{}elseif($re){echo"
						<div id='product-main-img'>
							<div class='product-preview'>
								<img src='".$row3['image']."' alt=''>
							</div>

							
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class='col-md-2  col-md-pull-5'>
						<div id='product-imgs'>
						

							<div class='product-preview'>
								<img src='".$row3['image']."' alt=''>
							</div>

						
						</div>
					</div>
				

					<!-- Product details -->
					<div class='col-md-5'>
						<div class='product-details'>
							<h2 class='product-name'>".$row3['name']."</h2>
							<div>
								<div class='product-rating'>
									<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>
									<i class='fa fa-star-o'></i>
								</div>
								<a class='review-link' href='#'>10 Review(s) | Add your review</a>
							</div>
							<div>
								<h3 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹100.00</del></h3>
								<span class='product-available'>In Stock</span>
							</div>
							<p>".$row3['description']."</p>

							<div class='product-options'>
								<!-- <label>
									Size
									<select class='input-select'>
										<option value='0'>X</option>
									</select>
								</label> -->
								<!-- <label>
									Color
									<select class='input-select'>
										<option value='0'>Red</option>
									</select>
								</label> -->
							</div>

							<div class='add-to-cart'>
								
								<br><br>
									<form action='cart.php' method='post'>
								<button class='add-to-cart-btn' name='b1'><i class='fa fa-shopping-cart'></i>add to cart</button>
							</form><br>
										<form action='wishlist.php' method='post'>
								<button class='add-to-cart-btn' name='a1'><i class='fa fa-shopping-cart'></i>Add to wishlist</button>
							</form>
							</div>

						

						</div>
					</div>
					<!-- /Product details -->

							
					
				";
							}}?>
								

									
									</div>
								</div>
								<!-- /tab3  -->
							
						</div>
					</div>
					<!-- /product tab -->
				

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>VALIDAR assist you in analysing and validating your product before to purchase to ensure that it is not tampered with and that everything is order.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-phone"></i>9662428169</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>gohelgohel86@email.com</a></li>
									<li><a href="#"><i class="fa fa-map-marker"></i>Ahmedabad - Gujarat</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="Atta,Rice&Dals.php">Atta,Rice & Dals</a></li>
						<li><a href="Dry Fruits & Nuts.php">Dry Fruits & Nuts</a></li>
						<li><a href="Dairy & Breads.php">Dairy & Breads</a></li>
						<li><a href="Tea & Coffee.php">Tea & Coffee</a></li>
						<li ><a href="Biscuits.php">Biscuits</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="About-Us1.html">About Us</a></li>
									<li><a href="contact-us.html">Contact Us</a></li>
									<li><a href="privacy policy.html">Privacy Policy</a></li>
									<li><a href="tearm & condition.html">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="account.php">My Account</a></li>
									<li><a href="cart.php">View Cart</a></li>
									<li><a href="wishlist.php">Wishlist</a></li>
									<li><a href="order.php">Track My Order</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			
		</footer>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
