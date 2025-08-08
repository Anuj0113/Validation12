<?php
    $conn = new mysqli('localhost','root','','wordpress');
 $name=$_REQUEST['name'];

$r="update `order` set cancel='Order Cancelled.' where name='$name'";
$t=mysqli_query($conn,$r);

?>


     <html>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
    <body>
        <div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Order Cancelled Successfully.</h1>"; ?>
            <a href="order.php"><button class="signup-btn" type="submit" value="Ok">Ok</button></a>

        </div>
    </body>
</html>

			