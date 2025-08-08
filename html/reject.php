   <?php
    $conn = new mysqli('localhost','root','','wordpress');
 $name=$_REQUEST['name'];
  $s="(select * from `order` where name LIKE '%$name%')";
    $result = mysqli_query($conn,$s);
   $row = mysqli_fetch_array($result); 



   ?> 



     <html>
<link rel="stylesheet" type="text/css" href="css/style3.css">

<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
    <body>
        <div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Confirm Reject Order.?</h1>";
            echo "<a href='reject1.php?name={$row['name']}'><button class='signup-btn' type='submit' value='Yes'>Yes</button></a>
            <a href='DeliverConnect.php'><button class='signup-btn' type='submit' value='No'>No</button></a>";?>

        </div>
    </body>
</html>

			