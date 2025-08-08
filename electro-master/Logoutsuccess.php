
<html>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="sneat-1.0.0/html/image/logo125.png">
    <body>
        <div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Logout Successfully</h1>"; ?>
            <a href="../Clogin.php"><button class="signup-btn" type="submit" value="Ok">Ok</button></a>
        </div>
    </body>
</html>
<?php
    $conn = new mysqli('localhost','root','','wordpress');
    $email=$_REQUEST['email'];
  $w="delete from caccount where email LIKE '%$email%'";
mysqli_query($conn,$w);

?>