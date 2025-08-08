<?php
    $conn = new mysqli('localhost','root','','wordpress');
 $name=$_REQUEST['name'];

$r="update `order` set cancel='Order Rejected.' where name='$name'";
$t=mysqli_query($conn,$r);

$si=("select * from customer");
 $result1=mysqli_query($conn,$si);
 $ro = mysqli_fetch_array($result1);
?>

     <html>
<link rel="stylesheet" type="text/css" href="css/style3.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
    <body>
        <div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Order Rejected Successfully.</h1>
            <a href='DeliverConnect.php?email={$ro['email']}'><button class='signup-btn' type='submit' value='Ok'>Ok</button></a>";
?>
        </div>
    </body>
</html>

			