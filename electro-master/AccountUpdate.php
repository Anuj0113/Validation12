<html>
<head><link rel="stylesheet" type="text/css" href="css/style4.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
        <style>.sign-up-form
{
       width: 450px;
       height: 600px;
       box-shadow: 0 0 100px 0 rgba(0,0,0,0.3);
       background-color: white;
       margin-top: 45px;
       margin-left: 100px;
       padding: 20px;
       text-align: center;      
}
.login
{
       width: 50%;
       height: 110%;
       margin-left: 700px;
       margin-top: -750px;
}
</style> </head>
       <body>
              <div class="header">
              <a href="index.php">&larr; Back</a>
              </div>
<?php
    $conn = new mysqli('localhost','root','','wordpress');


     $stmt=("UPDATE customer SET email = '$_POST[email]',password = '$_POST[password]',name = '$_POST[name]' where email='$_POST[email]'");
    mysqli_query($conn,$stmt);
   
?>
        

<html>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<title>Product Validation</title>
        <link rel="icon" type="image/x-icon" href="image/logo125.png">
    <body>
        <div class="sign-up-form">
            <img src="image/right1.jpg" class="righticon">
            <?php echo"<h1>Account Updated Successfully</h1>"; ?>
            <a href="Account.php"><button class="signup-btn" type="submit" value="Ok">Ok</button></a>
        </div>
    </body>
</html>
