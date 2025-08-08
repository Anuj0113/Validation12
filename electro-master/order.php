
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style1.css" />
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
    <br><br>
    
   

		<?php
					
						
	$conn = new mysqli('localhost','root','','wordpress');

	$stmt1 =("select * from caccount");
        $resu=mysqli_query($conn,$stmt1);
       $ro = mysqli_fetch_array($resu);
        $email1=$ro['email'];

	
	$s="(select * from `order` where email='$email1')";
	$result = mysqli_query($conn,$s);
	$rowcount = mysqli_num_rows($result);
    
	if($rowcount != 0)
    {

	echo "<div class='row'><div class='column'><table style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width:188%; height:30%;'>
	<tr>
	<th><h3><b style='margin-left:2%;'>Product</b></h3></th>
	<th><h3><b style='margin-left:-5%;'>Name</b></h3></th>
    <th><h3><b style='margin-left:-5%;'>Price</b></h3></th>
    <th><h3><b style='margin-left:-5%;'>Quantity</b></h3></th>
    <th><h3><b style='margin-left:-5%;'>Total</b></h3></th>
    <th><h3><b style='margin-left:-5%;'>Order Date</b></h3></th>
     <th><h3><b style='margin-left:-5%;'>Delivery Date</b></h3></th>
    <th><h3><b style='margin-left:-5%;'>Cancel Order</b></h3></th>
	</tr>";
	
	while($row = mysqli_fetch_array($result))
	{
	echo "<tr>";
	echo "<td>"?><img src="<?php echo $row['img'];?>" width="100px" height="100px"><?php "</td>";
	echo "<td><b>".$row['name']."</b></td>";
	echo "<td><b>"."₹".$row['price']."</b></td>";
    echo "<td><b>".$row['quantity']."</b></td>";
    echo "<td><b>"."₹".$row['total']."</b></td>";
    echo "<td><b>".$row['odate']."</b></td>";
    echo "<td><b>".$row['ddate']."</b></td>";
    if($row['cancel']=='Order Cancelled.')  
        {
    echo "<td><b style='color:red;'>Order Cancelled.</b></td>";
        }
         elseif($row['cancel']=='Cancel')  
         {
    echo "<td><a href='ordercancel.php?name={$row['name']}'><b style='color:red;'>Cancel</b></td>";
          }
          elseif($row['cancel']=='Order Rejected.')  
        {
    echo "<td><b style='color:red;'>Order Rejected From Admin.</b></td>";
        }
	echo "</tr>";
	}

							

echo "</table></div>";
}
else
{
	?>
  
     <html>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
    <body>
        <div class="sign-up-form">
            <img src="image/wrong.jpg" class="righticon">
            <?php echo"<h1>You have not purchased any products</h1>"; ?>
            <a href="index.php"><button class="signup-btn" type="submit" value="Ok">Ok</button></a>
        </div>
    </body>
</html>

			
	
<?php
}
?>

</body>
</html>