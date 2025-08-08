<?php
	session_start();
	$conn = new mysqli('localhost','root','','wordpress');

	 $name = $_REQUEST['name'];
 if($_REQUEST['name'] != NULL)
 {
	if ($name == "All") 
	{

		$stmt =("DELETE FROM product");
      mysqli_query($conn,$stmt);
      $stmt =("DELETE FROM product1");
      mysqli_query($conn,$stmt);
       $stmt =("DELETE FROM product3");
      mysqli_query($conn,$stmt);
       $stmt =("DELETE FROM product4");
      mysqli_query($conn,$stmt);
       $stmt =("DELETE FROM product5");
      mysqli_query($conn,$stmt);
?>
		<html>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
        <body>
                <div class="sign-up-form">
                        <img src="image/right1.jpg" class="righticon">
                        <?php echo"<h1>Product All Deleted Successfully...</h1>"; ?>
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
	$stmt =("DELETE FROM product WHERE name LIKE '%$name%'");
      mysqli_query($conn,$stmt);
      $stmt=("DELETE FROM product1 WHERE name LIKE '%$name%'");
      mysqli_query($conn,$stmt);
      $stmt =("DELETE FROM product3 WHERE name LIKE '%$name%'");
      mysqli_query($conn,$stmt);
      $stmt =("DELETE FROM product4 WHERE name LIKE '%$name%'");
      mysqli_query($conn,$stmt);
      $stmt =("DELETE FROM product5 WHERE name LIKE '%$name%'");
      mysqli_query($conn,$stmt);
?>
		<html>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
        <body>
                <div class="sign-up-form">
                        <img src="image/right1.jpg" class="righticon">
                        <?php echo"<h1>Product Deleted Successfully...</h1>"; ?>
                        <a href="AddProductForm.php">
                        <button class="signup-btn" type="submit" value="Ok">Ok</button>
                        </a>
                </div>
        </body>
</html>
<?php
	} }else{echo "No Remove";}

?>