<html>
<head>    <title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
</head>

<?php

if(isset($_POST['a1'])) {

$apiKey="rzp_test_RcyLa8NtWpiAmz";
  $conn = new mysqli('localhost','root','','wordpress');
       $results = mysqli_query($conn,"SELECT sum(total) FROM cart");
  $rowz =  mysqli_fetch_array($results); 
         $result = mysqli_query($conn,"SELECT * FROM customer");
    $row =  mysqli_fetch_array($result); 
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.js"></script>
<form action="deleteproduct2.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
data-key="<?php echo $apiKey;?>"
    data-amount="<?php echo $rowz['sum(total)']*100;?>" 
    data-currency="INR"
    data-buttontext="Pay with Razorpay"
    data-name="Product Validar"
   data-image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_5ol6DNQiI1Mrby-B7SyRW5xndFVNmd1lyHr6hRGFD9xwV1QUWSIqNAOG01Q-WnvhMg&usqp=CAU"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

<style type="text/css">
    .razorpay-payment-button
    {
        display: none;
    }

</style>

<script type="text/javascript">
  
    $(document).ready(function()
    {
        $('.razorpay-payment-button').click();
    });
    
    
   
</script>
<?php
}

?>


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

                    <ul class="header-links pull-right">
                        <li><a href="order.php" name="a1"><i class="fa fa-user-o"></i>Orders</a></li>
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

$stmt2 =("select * from address where email='$email1'");
        $result=mysqli_query($conn,$stmt2);
     
   
    while($row = mysqli_fetch_array($result))
    {
        echo "<div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width:30%;height:230px;margin-right: auto;margin-top: 10px;margin-left: 70px;'>
<h1 style='margin-left:15%;'>Deliver Address</h1>";
    echo "<b style='font-size:25px;'><input type='radio' style='width:20px;height:20px;' checked='true' id='home' name='home' required>".$row['home']."</b><br><br>";
    echo "<b style='font-size:20px;'>".$row['hno'].",".$row['landmark'].",".$row['area'].",".$row['city']."-".$row['state']."-".$row['pincode']."</b><br><br>";
     echo "<b style='font-size:15px;'><a style='color:red;margin-left:25%;text-decoration:none;' href='AddressUpdate.php?home={$row['home']}'>Edit</a>";
    echo "<a style='color:red;text-decoration:none;margin-left:20%;' href='AddressDelete.php?home={$row['home']}'>Remove</a></b></div>";    
    
    }

?>
<form method='post' action='AddressShowing.php'>
<?php


         
            echo "<div style='margin-left:55%;margin-top:-16%;'class='column'><table style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width:80%;height:30%;'>";
        
    echo "<tr>";
    echo "<th colspan=3><h1 style='margin-left:200px; margin-top:10px;'>Price Details</h1></th>";
    echo "</tr>";

    echo "<tr>";
    echo "<th colspan=3><hr style='height: 1px; color: grey; background-color: grey;'></th>";
    echo "</tr>";

    echo "<tr>";
    echo "<th><h4><b style='margin-left:2%;'>Product</b></h4></th>";
    echo "<th></th>";
    echo "<th><h4 margin-left:-20px;>Price</h4></th>";
    echo "</tr>";

    echo "<tr>";
    $s2="select * from cart";
    $result3 = mysqli_query($conn,$s2);
    
    
    while($row2 = mysqli_fetch_array($result3))
    {
    echo "<td>"?><img src="<?php echo $row2['img'];?>" width="100px" height="100px"><?php "</td>";
        echo "<td></td>";  
    echo "<td><h4>"."₹".$row2['total']."</h4></td>";
    echo "</tr>";
    }

    echo "<tr>";
    echo "<td colspan=3><hr style='border-top:2px dotted grey; color: grey;'></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><h2>Total Amount</h2></td>";
    echo "<td><h2></h2></td>";

    $results = mysqli_query($conn,"SELECT sum(total) FROM cart");

    for($i=0; $rowz =  mysqli_fetch_array($results); $i++)
    {
    
    echo "<td><h4>"."₹".$rowz['sum(total)']."</h4></td>";
    echo "</tr>";
    
    }
    

    echo "<tr>
    <td></td>
    <td><h4><button name='a1' onclick='location.href='AddressShowing.php'' style='color: #fff;margin-left:-40%;border-radius:10px;cursor: pointer;font-size: 25px;background: #3498DB;' value='Pay'>Continue</button></h4></td></tr>";
    
 
    
    echo"</table></div></div>";

?>
</form>
</body></html>
