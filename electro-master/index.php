
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
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i>9662428169</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i>gohelgohel86@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Ahmedabad - Gujarat</a></li>
					</ul>
						<ul class='header-links pull-right'>
						<li><a href='Account.php'><i class="fa fa-user-o" style='margin-left:10px;'></i>My Account</a></li>
					</ul>
			<ul class='header-links pull-right' style='margin-left: 10px;'><li><a href='AddressShowing1.php'><i class='fa fa-map-marker'></i>Manage Address</a></li>
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
								<a href="#" class="logo">
									<img src="image/logo.png" alt="">
								</a>
							</div>
						</div>

					<div class='col-md-6'>
		   
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
											<a href="cart.php" style='font-size: 16.5px;height:50px;'>View Cart</a>
											<?php 
											
 $stmt1 =("select * from caccount");
        $resu=mysqli_query($conn,$stmt1);
       $ro = mysqli_fetch_array($resu);

        $email1=$ro['email'];

$stmt2 =("select * from address where email='$email1'");
        $result=mysqli_query($conn,$stmt2);
      $num = mysqli_num_rows($result);
    if($num == 1)
    {?>
   
											<a href="AddressShowing.php" ><form method='post' action='AddressShowing.php'>
<button name='a1' onclick="location.href='AddressShowing.php'" style='font-size: 15.1px;height:25px;background: #c50000;border: none;
outline: none;
background: none;'>Checkout  <i class="fa fa-arrow-circle-right"></i></button></form></a>
<?php }else{?>		<a href="AddressNew.php" ><form method='post' action='AddressNew.php'>
<button name='a1' onclick="location.href='AddressNew.php'" style='font-size: 15.1px;height:25px;background: #c50000;border: none;
outline: none;
background: none;'>Checkout  <i class="fa fa-arrow-circle-right"></i></button></form></a><?php }?>
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
			<div class="container"class>
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="Atta,Rice&Dals/attaricedals123.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Atta,Rice&Dals</h3>
								<a href="Atta,Rice&Dals.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="Dry Fruits & Nuts/images123.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Dry Fruits & Nuts</h3>
								<a href="Dry Fruits & Nuts.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="Dairy&bread/download11.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Dairy & Breads</h3>
								<a href="Dairy & Breads.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									
						
						<li><a href="Atta,Rice&Dals.php">Atta,Rice & Dals</a></li>
						<li><a href="Dry Fruits & Nuts.php">Dry Fruits & Nuts</a></li>
						<li><a href="Dairy & Breads.php">Dairy & Breads</a></li>
						<li><a href="Tea & Coffee.php">Tea & Coffee</a></li>
						<li class="active"><a href="Biscuits.php">Biscuits</a></li>
					
								</ul>
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
			
					<div class='col-md-12'>

						<div class='row'>
							<div class='products-tabs'>
								<!-- tab -->
								<div id='tab1' class='tab-pane active'>
									<div class='products-slick' data-nav='#slick-nav-1'>
									<?php 
					
	$conn = new mysqli('localhost','root','','wordpress');
	

$stmt =("select * from product");
$re= mysqli_query($conn,$stmt);
   
 while($row3 = mysqli_fetch_array($re))
    {
		if(!$row3)
		{}elseif($re){ echo "<div class='product'>";
	if($row3['id']==1)
	{
		echo "<a href='product5.php?a1=5.1' class='product-img'>";
	}
	elseif($row3['id']==2)
	{
		echo "<a href='product2.php?a1=2.1' class='product-img'>";
	}
	elseif($row3['id']==3)
	{
		echo "<a href='product3.php?a1=3.1' class='product-img'>";
	}
	elseif($row3['id']==4)
	{
		echo "<a href='product1.php?a1=1.1' class='product-img'>";
	}
	elseif($row3['id']==5)
	{
		echo "<a href='product4.php?a1=4.1' class='product-img'>";
	}
	elseif($row3['id']==6)
	{
		echo "<a href='index.php' class='product-img'>";
	}
	
		echo "<img src='".$row3['image']."' alt=''>
			
			<div class='product-body'>
			<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹100</del></h4>
			<div class='product-rating'>
				<i class='fa fa-star'></i>
				<i class='fa fa-star'></i>
				<i class='fa fa-star'></i>
				<i class='fa fa-star'></i>
				<i class='fa fa-star'></i>
			</div>
		</a>";										
		
			
		if($row3['id']==1)
	{
		echo "<form action='wishlist.php' method='post'>
			<div class='product-btns'>
				<button class='add-to-wishlist' name='a1'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
			</div>
		</form></div>
		<form action='cart.php' method='post'>
			<div class='add-to-cart'>
				<button class='add-to-cart-btn' name='b1'><i class='fa fa-shopping-cart'></i> add to cart</button>
			</div>
		</form>";
	}
	elseif($row3['id']==2)
	{
		echo "<form action='wishlist.php' method='post'>
			<div class='product-btns'>
				<button class='add-to-wishlist' name='a2'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
			</div>
		</form></div>
		<form action='cart.php' method='post'>
			<div class='add-to-cart'>
				<button class='add-to-cart-btn' name='b2'><i class='fa fa-shopping-cart'></i> add to cart</button>
			</div>
		</form>";
	}
	elseif($row3['id']==3)
	{
		echo "<form action='wishlist.php' method='post'>
			<div class='product-btns'>
				<button class='add-to-wishlist' name='a3'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
			</div>
		</form></div>
		<form action='cart.php' method='post'>
			<div class='add-to-cart'>
				<button class='add-to-cart-btn' name='b3'><i class='fa fa-shopping-cart'></i> add to cart</button>
			</div>
		</form>";
	}
	elseif($row3['id']==4)
	{
		echo"<form action='wishlist.php' method='post'>
			<div class='product-btns'>
				<button class='add-to-wishlist' name='a4'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
			</div>
		</form></div>
		<form action='cart.php' method='post'>
			<div class='add-to-cart'>
				<button class='add-to-cart-btn' name='b4'><i class='fa fa-shopping-cart'></i> add to cart</button>
			</div>
		</form>";
	}
	elseif($row3['id']==5)
	{
		echo"<form action='wishlist.php' method='post'>
			<div class='product-btns'>
				<button class='add-to-wishlist' name='a5'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
			</div>
		</form></div>
		<form action='cart.php' method='post'>
			<div class='add-to-cart'>
				<button class='add-to-cart-btn' name='b5'><i class='fa fa-shopping-cart'></i> add to cart</button>
			</div>
		</form>";
	}
	elseif($row3['id']==6)
	{
		echo"<form action='wishlist.php' method='post'>
			<div class='product-btns'>
				<button class='add-to-wishlist' name='a6'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
			</div>
		</form></div>
		<form action='index.php' method='post'>
			<div class='add-to-cart'>
				<button class='add-to-cart-btn' name='b6'><i class='fa fa-shopping-cart'></i> add to cart</button>
			</div>
		</form>";
	}
		
	echo"</div>";									
	}
} ?>
	
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class='section'>
			<!-- container -->
			<div class='container'>
				<!-- row -->
				<div class='row'>

					<!-- section title -->
					<div class='col-md-12'>
						<div class='section-title'>
							<h3 class='title'>Top selling</h3>
							<div class='section-nav'>
								<ul class='section-tab-nav tab-nav'>
								
						<li><a href="Atta,Rice&Dals.php">Atta,Rice & Dals</a></li>
						<li><a href="Dry Fruits & Nuts.php">Dry Fruits & Nuts</a></li>
						<li><a href="Dairy & Breads.php">Dairy & Breads</a></li>
						<li class="active"><a href="Tea & Coffee.php">Tea & Coffee</a></li>
						<li><a href="Biscuits.php">Biscuits</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class='col-md-12'>
						<div class='row'>
							<div class='products-tabs'>
								<!-- tab -->
								<div id='tab2' class='tab-pane fade in active'>
									<div class='products-slick' data-nav='#slick-nav-2'>
		<?php 
					
	$conn = new mysqli('localhost','root','','wordpress');
	

$stmt =("select * from product1");
$re= mysqli_query($conn,$stmt);
   
 while($row3 = mysqli_fetch_array($re))
    {
		if(!$row3)
		{}elseif($re){ echo "<div class='product'>";
	if($row3['id']==6)
	{
		echo "<a href='product6.php?a1=6.1' class='product-img'>";
	}
	elseif($row3['id']==7)
	{
		echo "<a href='product7.php?a1=7.1' class='product-img'>";
	}
	elseif($row3['id']==8)
	{
		echo "<a href='product8.php?a1=8.1' class='product-img'>";
	}
	elseif($row3['id']==9)
	{
		echo "<a href='product9.php?a1=9.1' class='product-img'>";
	}
	elseif($row3['id']==10)
	{
		echo "<a href='product10.php?a1=10.1' class='product-img'>";
	}
					echo"<img src='".$row3['image']."' alt=''>
					<div class='product-label'>
					<span class='sale'>-30%</span>
					<span class='new'>NEW</span>
					</div>
					<div class='product-body'>
					<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹20</del></h4>
					<div class='product-rating'>
					<i class='fa fa-star'></i>
					<i class='fa fa-star'></i>
					<i class='fa fa-star'></i>
					<i class='fa fa-star'></i>
					<i class='fa fa-star'></i>
					</div>
					</a>";
					if($row3['id']==6)
	{
		echo "<form action='wishlist.php' method='post'>
			<div class='product-btns'>
				<button class='add-to-wishlist' name='a6'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
			</div>
		</form></div>
		<form action='cart.php' method='post'>
			<div class='add-to-cart'>
				<button class='add-to-cart-btn' name='b6'><i class='fa fa-shopping-cart'></i> add to cart</button>
			</div>
		</form>";
	}
	elseif($row3['id']==7)
	{
		echo "<form action='wishlist.php' method='post'>
			<div class='product-btns'>
				<button class='add-to-wishlist' name='a7'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
			</div>
		</form></div>
		<form action='cart.php' method='post'>
			<div class='add-to-cart'>
				<button class='add-to-cart-btn' name='b7'><i class='fa fa-shopping-cart'></i> add to cart</button>
			</div>
		</form>";
	}
	elseif($row3['id']==8)
	{
		echo "<form action='wishlist.php' method='post'>
			<div class='product-btns'>
				<button class='add-to-wishlist' name='a8'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
			</div>
		</form></div>
		<form action='cart.php' method='post'>
			<div class='add-to-cart'>
				<button class='add-to-cart-btn' name='b8'><i class='fa fa-shopping-cart'></i> add to cart</button>
			</div>
		</form>";
	}
	elseif($row3['id']==9)
	{
		echo"<form action='wishlist.php' method='post'>
			<div class='product-btns'>
				<button class='add-to-wishlist' name='a9'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
			</div>
		</form></div>
		<form action='cart.php' method='post'>
			<div class='add-to-cart'>
				<button class='add-to-cart-btn' name='b9'><i class='fa fa-shopping-cart'></i> add to cart</button>
			</div>
		</form>";
	}
	elseif($row3['id']==10)
	{
		echo"<form action='wishlist.php' method='post'>
			<div class='product-btns'>
				<button class='add-to-wishlist' name='a10'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
			</div>
		</form></div>
		<form action='cart.php' method='post'>
			<div class='add-to-cart'>
				<button class='add-to-cart-btn' name='b10'><i class='fa fa-shopping-cart'></i> add to cart</button>
			</div>
		</form>";
	}
	
		
	echo"</div>";									
	}
} ?>
		
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
							
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		<div class='section'>
			<!-- container -->
			<div class='container'>
				<!-- row -->
				<div class='row'>
					<div class='col-md-4 col-xs-6'>
						<div class='section-title'>
							<h4 class='title'>Top selling</h4>
							<div class='section-nav'>
								<div id='slick-nav-3' class='products-slick-nav'></div>
							</div>
						</div>

                        <div class='products-widget-slick' data-nav='#slick-nav-3'>
							<div>
								 <?php
                                        $stmt =("select * from product3 where id=11");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
								<div class='product-widget'>
								<a href='product14.php?a1=14.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹130</del></h4>
									</div>
									</a>
								</div>
							";}; ?>
				 <?php
                                        $stmt =("select * from product3 where id=12");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
							
								<div class='product-widget'>
								<a href='product13.php?a1=13.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹30</del></h4>
									</div>
								</a>
								</div>
								";}; ?>
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
                                        $stmt =("select * from product3 where id=14");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
							
								<div class='product-widget'>
								<a href='product21.php?a1=21.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹100</del></h4>
									</div>
								</a>
								</div>
		";}; ?>
 <?php
                                        $stmt =("select * from product3 where id=15");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
								<div class='product-widget'>
								<a href='product22.php?a1=22.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹150</del></h4>
									</div>
								</a>
								</div>
				";}; ?>
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
							<h4 class='title'>Top selling</h4>
							<div class='section-nav'>
								<div id='slick-nav-4' class='products-slick-nav'></div>
							</div>
						</div>

						<div class='products-widget-slick' data-nav='#slick-nav-4'>
							<div>
						<?php
                                        $stmt =("select * from product4 where id=17");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
								<div class='product-widget'>
								<a href='product16.php?a1=16.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹130</del></h4>
									</div>
								</a>	
								</div>
								";}; ?>
								<?php
                                        $stmt =("select * from product4 where id=18");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
								<div class='product-widget'>
								<a href='product17.php?a1=17.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹35 </del></h4>
									</div>
								</a>
								</div>
								";}; ?>
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
                                        $stmt =("select * from product4 where id=20");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
								<div class='product-widget'>
								<a href='product23.php?a1=23.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹50</del></h4>
									</div>
								</a>
								</div>
								";}; ?>
								<?php
                                        $stmt =("select * from product4 where id=21");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
								<div class='product-widget'>
								<a href='product24.php?a1=24.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹50</del></h4>
									</div>
								</a>
								</div>
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
							<h4 class='title'>Top selling</h4>
							<div class='section-nav'>
								<div id='slick-nav-5' class='products-slick-nav'></div>
							</div>
						</div>

						<div class='products-widget-slick' data-nav='#slick-nav-5'>
							<div>
											<?php
                                        $stmt =("select * from product5 where id=23");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
								<div class='product-widget'>
								<a href='product19.php?a1=19.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹340</del></h4>
									</div>
								</a>
								</div>
								";}; ?>
											<?php
                                        $stmt =("select * from product5 where id=24");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
								<div class='product-widget'>
								<a href='product20.php?a1=20.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹70 </del></h4>
									</div>
								</a>
								</div>
									";}; ?>		<?php
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
									";}; ?>	<?php
                                        $stmt =("select * from product5 where id=27");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
								<div class='product-widget'>
								<a href='product27.php?a1=27.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹360</del></h4>
									</div>
								</a>
								</div>
									";}; ?>		<?php
                                        $stmt =("select * from product5 where id=28");
        $re= mysqli_query($conn,$stmt);
        $row3 = mysqli_fetch_array($re);
                if(!$row3)
                {}elseif($re){ echo "
								<div class='product-widget'>
								<a href='product28.php?a1=28.1'>
									<div class='product-img'>
										<img src='".$row3['image']."' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>".$row3['category']."</p>		
			<h3 class='product-name'>".$row3['name']."</h3>
			<h4 class='product-price'>₹".$row3['price']."<del class='product-old-price'>₹90</del></h4>
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
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>