<?php
	session_start();
	$conn = new mysqli('localhost','root','','wordpress');

	 $name = $_REQUEST['name'];
 if($_REQUEST['name'] != NULL)
 {
        $image ="products/".$_POST['image'];
$stmt=("UPDATE product SET cname='$_POST[cname]', category = '$_POST[category]', id='$_POST[id]', price = '$_POST[price]', image = '$image', description = '$_POST[description]' WHERE  name LIKE '%$name%'");
                mysqli_query($conn,$stmt);
                 $image1 ="products/".$_POST['image'];
$stmt=("UPDATE product1 SET cname='$_POST[cname]', category = '$_POST[category]', id='$_POST[id]', price = '$_POST[price]', image = '$image1', description = '$_POST[description]' WHERE  name LIKE '%$name%'");
                mysqli_query($conn,$stmt);
                 $image2 ="products/".$_POST['image'];
$stmt=("UPDATE product3 SET cname='$_POST[cname]', category = '$_POST[category]', id='$_POST[id]', price = '$_POST[price]', image = '$image2', description = '$_POST[description]' WHERE  name LIKE '%$name%'");
                mysqli_query($conn,$stmt);
                 $image3 ="products/".$_POST['image'];
$stmt=("UPDATE product4 SET cname='$_POST[cname]', category = '$_POST[category]', id='$_POST[id]', price = '$_POST[price]', image = '$image3', description = '$_POST[description]' WHERE  name LIKE '%$name%'");
                mysqli_query($conn,$stmt);
                 $image4 ="products/".$_POST['image'];
$stmt=("UPDATE product5 SET cname='$_POST[cname]', category = '$_POST[category]', id='$_POST[id]', price = '$_POST[price]', image = '$image4', description = '$_POST[description]' WHERE  name LIKE '%$name%'");
                mysqli_query($conn,$stmt);
?>
		<html>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
        <body>
                <div class="sign-up-form">
                        <img src="image/right1.jpg" class="righticon">
                        <?php echo"<h1>Product Updated Successfully...</h1>"; ?>
                        <a href="AddProductForm.php">
                        <button class="signup-btn" type="submit" value="Ok">Ok</button>
                        </a>
                </div>
        </body>
</html>
<?php
	}

?>