
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
  <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style4.css" />
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
        $result=mysqli_query($conn,$stmt1);
       $row = mysqli_fetch_array($result);
        $email1=$row['email'];

$stmt1 =("select * from address where home='home' && email='$email1'");
        $result=mysqli_query($conn,$stmt1);
        $rowcount = mysqli_num_rows($result);

 

    

    while($row = mysqli_fetch_array($result))
    {
        echo "<div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width:30%;height:250px;margin-right: auto;margin-top: 10px;margin-left: 60px;'>
<h1 style='margin-left:20%;'>Deliver Address</h1>";
    echo "<b style='font-size:25px;'>".$row['home']."</b><br><br>";
    echo "<b>".$row['hno'].",".$row['landmark'].",".$row['area'].",".$row['city']."-".$row['state']."-".$row['pincode']."</b><br><br>";
        echo "<b><a style='color:red;margin-left:25%;text-decoration:none;' href='AddressUpdate1.php?home={$row['home']}'>Edit</a>";
    echo "<a style='color:red;text-decoration:none;margin-left:20%;' href='AddressDelete1.php?home={$row['home']}'>Remove</a></b></div>";    
    
    }






            if($rowcount != 0)
            {
                echo "<div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width:60%;height:500px;margin-right: auto;margin-top:-250px;margin-left: 550px;'>";
            
                ?>
            
         <header>
<br>
        <h2 style="margin-left: 300px;">Add Address Details</h2>
      </header>
<br>
    <form action="AddressconnectNew1.php" method="post">
<div class="form"><?php   
    $conn = new mysqli('localhost','root','','wordpress');
 
     $stmt1 =("select * from caccount");
        $result=mysqli_query($conn,$stmt1);

        while($row = mysqli_fetch_array($result))
        {

 ?>
                            <b>Email:</b>    
                            <input class="input" style="width: 30%;margin-left:5.7%;" type="email" name="email" placeholder="Enter Email" value="<?php echo $row['email'];}?>" readonly>

                            <b style="margin-left: 5%;" >Phone No:</b>            
                            <input class="input" style="margin-left: 2%;width: 30%;" type="number" name="pnumber" placeholder="Enter Phone No" required><br><br>

                           

                            <b>House No:</b>
                            <input class="input" style="margin-left: 1%;width: 30%;" type="number" name="hno" placeholder="Enter House No" required>

                            <b style="margin-left: 5%;" >Landmark:</b>
                            <input class="input" style="margin-left:1.8%;width: 30%;" type="text" name="landmark" placeholder="Enter Landmark" required><br><br>  

                            <b>Area:</b>
                            <input class="input" style="margin-left: 7%;width: 30%;" type="text" name="area" placeholder="Enter Area" required>                          

                            <b  style="margin-left: 5%;" >City:</b>
                            <input style="width: 30%;margin-left: 9%;" type="text" name="city" class="input" list="citynames" placeholder="Enter City/Town/District" required>
                            <datalist id="citynames">
                            <option value="Ahmedabad">
<option value="Anand">
<option value="Amreli">
<option value="Bhavnagar">
<option value="Bharuch">
<option value="Bhuj">
<option value="Botad">
<option value="Dahod">
<option value="Deesa">
<option value="Ganghinagar">
<option value="Ganghidham">
<option value="Gondal">
<option value="Godhra">
<option value="Junagadh">
<option value="Jamnagar">
<option value="Jetpur">
<option value="Kalol">
<option value="Morbi">
<option value="Mehsana">
<option value="Nadiad">
<option value="Navsari">
<option value="Porbandar">
<option value="Palanpur">
<option value="Patan">
<option value="Surat">
<option value="Surendranagar">
<option value="Vadodara">
<option value="Valsad">
<option value="Vapi">
<option value="Veraval">
                            </datalist><br><br>

                            <b>State:</b>
                            <input type="text" style="margin-left: 6%;width: 30%;" name="state" class="input" list="statenames" placeholder="Enter State" required>
                            <datalist id="statenames">
                            <option value="Andhra Pradesh">
<option value="Arunachal Pradesh">
<option value="Andaman and Nicobar Islands">
<option value="Assam">
<option value="Andhra Pradesh">
<option value="Bihar">
<option value="Chhattisgarh">
<option value="Chandigarh">
<option value="Dadra and Nagar Haveli and Daman and Diu">
<option value="Gujarat">
<option value="Goa">
<option value="Haryana">
<option value="Himachal Pradesh">
<option value="Jharkhand">
<option value="Jammu and Kashmir">
<option value="Karnataka">
<option value="Kerala">
<option value="Ladakh">
<option value="Lakshadweep">
<option value="Maharastra">
<option value="Madhya Pradesh">
<option value="Meghalaya">
<option value="Manipur">
<option value="Mizoram">
<option value="NCT of Delhi">
<option value="Nagaland">
<option value="Odisha">
<option value="Puducherry">
<option value="Punjab">
<option value="Rajasthan">
<option value="Sikkim">
<option value="Telangana">
<option value="Tamil Nadu">
<option value="Uttar Pradesh">
<option value="Uttarakhand">
<option value="West Bengal">
                            </datalist>

                            <b style="margin-left: 5%;" >pincode:</b>
                            <input class="input" style="margin-left:4.5%;width: 30%;" type="number" name="pincode" placeholder="Enter Pincode" required><br><br> 

<div style="margin-left:400px;font-size: 25px;">
<input type="radio" style="width: 15px;
       height: 15px;" id="home" value="home" name="home" required>
<label for="home">Home</label> 

</div>

        <button style="border-radius:10px;color: #fff;cursor: pointer;margin-top: 20px;margin-left:250px;font-size: 17px;background: #3498DB;">Add Address</button>
  
    </div>
</div>  </form>  </header>
   <?php

}
            else
            {
        echo "<div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width:90%;height:500px;margin-right: auto;margin-top: 10px;margin-left: 70px;'>";
            
            ?>   

      <header>
<br>
        <h2 style="margin-left: 500px;">Add Address Details</h2>
      </header>
<br>
    <form action="AddressconnectNew1.php" method="post">
<div class="form">
    <?php   
    $conn = new mysqli('localhost','root','','wordpress');
    
     $stmt1 =("select * from caccount");
        $result=mysqli_query($conn,$stmt1);
        while($row = mysqli_fetch_array($result))
        {
 ?>
                            <b>Email:</b>    
                            <input class="input" style="width: 30%;margin-left:5.7%;" type="email" name="email" placeholder="Enter Email" value="<?php echo $row['email'];}?>" readonly>

                          
                            <b style="margin-left: 15%;" >Phone No:</b>            
                            <input class="input" style="margin-left: 1.5%;width: 30%;" type="number" name="pnumber" placeholder="Enter Phone No" required><br><br>

                           

                            <b>House No:</b>
                            <input class="input" style="margin-left: 2.5%;width: 30%;" type="number" name="hno" placeholder="Enter House No" required>

                            <b style="margin-left: 15%;" >Landmark:</b>
                            <input class="input" style="margin-left:1.2%;width: 30%;" type="text" name="landmark" placeholder="Enter Landmark" required><br><br>  

                            <b>Area:</b>
                            <input class="input" style="margin-left: 6.5%;width: 30%;" type="text" name="area" placeholder="Enter Area" required>                          

                            <b  style="margin-left: 15%;" >City:</b>
                            <input style="width: 30%;margin-left: 6.2%;" type="text" name="city" class="input" list="citynames" placeholder="Enter City/Town/District" required>
                           <datalist id="citynames">
                            <option value="Ahmedabad">
<option value="Anand">
<option value="Amreli">
<option value="Bhavnagar">
<option value="Bharuch">
<option value="Bhuj">
<option value="Botad">
<option value="Dahod">
<option value="Deesa">
<option value="Ganghinagar">
<option value="Ganghidham">
<option value="Gondal">
<option value="Godhra">
<option value="Junagadh">
<option value="Jamnagar">
<option value="Jetpur">
<option value="Kalol">
<option value="Morbi">
<option value="Mehsana">
<option value="Nadiad">
<option value="Navsari">
<option value="Porbandar">
<option value="Palanpur">
<option value="Patan">
<option value="Surat">
<option value="Surendranagar">
<option value="Vadodara">
<option value="Valsad">
<option value="Vapi">
<option value="Veraval">
                            </datalist><br><br>

                            <b>State:</b>
                            <input type="text" style="margin-left: 6%;width: 30%;" name="state" class="input" list="statenames" placeholder="Enter State" required>
                                             <datalist id="statenames">
                            <option value="Andhra Pradesh">
<option value="Arunachal Pradesh">
<option value="Andaman and Nicobar Islands">
<option value="Assam">
<option value="Andhra Pradesh">
<option value="Bihar">
<option value="Chhattisgarh">
<option value="Chandigarh">
<option value="Dadra and Nagar Haveli and Daman and Diu">
<option value="Gujarat">
<option value="Goa">
<option value="Haryana">
<option value="Himachal Pradesh">
<option value="Jharkhand">
<option value="Jammu and Kashmir">
<option value="Karnataka">
<option value="Kerala">
<option value="Ladakh">
<option value="Lakshadweep">
<option value="Maharastra">
<option value="Madhya Pradesh">
<option value="Meghalaya">
<option value="Manipur">
<option value="Mizoram">
<option value="NCT of Delhi">
<option value="Nagaland">
<option value="Odisha">
<option value="Puducherry">
<option value="Punjab">
<option value="Rajasthan">
<option value="Sikkim">
<option value="Telangana">
<option value="Tamil Nadu">
<option value="Uttar Pradesh">
<option value="Uttarakhand">
<option value="West Bengal">
                            </datalist>

                            <b style="margin-left: 15%;" >pincode:</b>
                            <input class="input" style="margin-left:3%;width: 30%;" type="number" name="pincode" placeholder="Enter Pincode" required><br><br>   

<div style="margin-left:570px;font-size: 25px;">
<input type="radio" style="width: 15px;
       height: 15px;" id="home" value="home" name="home" required>
<label for="home">Home</label> 
</div>
        <button style=" color: #fff;cursor: pointer;margin-top: 20px;margin-left:300px;font-size: 17px;background: #3498DB;">Add Address</button>
  
    </div>
</div>  </form>  </header>
   
   
<?php }?>
</body></html>

