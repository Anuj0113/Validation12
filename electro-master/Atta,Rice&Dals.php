<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
		 <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/regular.min.css" integrity="sha512-WidMaWaNmZqjk3gDE6KBFCoDpBz9stTsTZZTeocfq/eDNkLfpakEd7qR0bPejvy/x0iT0dvzIq4IirnBtVer5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css" integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
		<!-- Google font -->
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
					              <ul class='header-links pull-left' style='margin-left: 10px;'><li><a href='index.php' style='color:white; margin-left: -150px;'>&larr;Back</a></li>

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
												<img src="<?php echo $row['img'];?>" width="100px" height="100px">
												</div><br>
												<div class="product-body">
													<h3 class="product-name"><?php echo $row['name'];?></h3>
													<h4 class="product-price">Quantity:<?php echo $row['quantity'];?>x</h4>
													<h4 class="product-price">Price: ₹<?php echo $row['price'];?></h4>
												</div>
											<br>
												
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
										<div class="cart-btns" style="width: 350px;margin-top: auto;">
											<a href="cart.php">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>

									</div>

								</div>
								<?php }else{echo "Your Cart Is Empty...";} ?>
								
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
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="Atta,Rice&Dals.php">Atta,Rice & Dals</a></li>
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
				<div class='section'>
			<!-- container -->
			<div class='container'>
				<!-- row -->
				<div class='row'>
					<div class='col-md-4 col-xs-6'>
						<div class='section-title'>
							<h4 class='title'>Atta,Rice&Dals</h4>
							<div class='section-nav'>
								<div id='slick-nav-3' class='products-slick-nav'></div>
							</div>
						</div>

                        <div class='products-widget-slick' data-nav='#slick-nav-3'>
							<div>
								
				
 <?php
                                        $stmt =("select * from product3 where id=13");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
								
								<div class='product-widget'>
								<a href='product12.php?a1=12.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>400</del></h4>
									</div>
								</a>
								</div>
		";}; ?>

							</div>
				
							<div>
					

 <?php
                                        $stmt =("select * from product3 where id=16");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
								<div class='product-widget'>
								<a href='product15.php?a1=15.1'>
									<div class='product-img'>
										<img src='Atta,Rice&Dals/5kg Atta.jpg' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹200</del></h4>
									</div>
								</a>
								</div>
			";}; ?>
							</div>
						</div>
					</div>

					<div class='col-md-4 col-xs-6'>
						<div class='section-title'>
							<h4 class='title'>Atta,Rice&Dals</h4>
							<div class='section-nav'>
								<div id='slick-nav-4' class='products-slick-nav'></div>
							</div>
						</div>

						<div class='products-widget-slick' data-nav='#slick-nav-4'>
							<div>
					
								<?php
                                        $stmt =("select * from product4 where id=19");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
								<div class='product-widget'>
								<a href='product18.php?a1=18.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹240</del></h4>
									</div>
								</a>
								</div>
								
							</div>

							<div>
							";}; ?>
			
								<?php
                                        $stmt =("select * from product4 where id=22");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
								<div class='product-widget'>
								<a href='product25.php?a1=25.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹120</del></h4>
									</div>
								</a>
								</div>
								";}; ?>
							</div>
						</div>
					</div>

					<div class='clearfix visible-sm visible-xs'></div>

					<div class='col-md-4 col-xs-6'>
						<div class='section-title'>
							<h4 class='title'>Atta,Rice&Dals</h4>
							<div class='section-nav'>
								<div id='slick-nav-5' class='products-slick-nav'></div>
							</div>
						</div>

						<div class='products-widget-slick' data-nav='#slick-nav-5'>
							<div>
									<?php
                                        $stmt =("select * from product5 where id=25");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
								<div class='product-widget'>
								<a href='product11.php?a1=11.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹240</del></h4>
									</div>
								</a>
								</div>
							";}; ?>
							</div>

							<div>
											<?php
                                        $stmt =("select * from product5 where id=26");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
								<div class='product-widget'>
								<a href='product26.php?a1=26.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹120 </del></h4>
									</div>
								</a>
								</div>
									";}; ?>
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

