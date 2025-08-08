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
session_start();
    $conn = new mysqli('localhost','root','','wordpress');
    $email = $_SESSION['email'];
       $stmt1 =("select * from customer where email LIKE '%$email%'");
        $result=mysqli_query($conn,$stmt1);
        

    


         while($row = mysqli_fetch_array($result))
{
       
       
        ?>   

              <div class="sign-up-form">
                    
                     <h1>Your Account</h1>

                    
                     <form action="AccountUpdate.php" method="post">
                            <b>Email:</b>
                            <input class="input-box" type="email" name="email" placeholder="Enter Email Id" value="<?php echo $row['email']; ?>" readonly><br><br>

                            <b>Name:</b>
                            <input class="input-box" type="text" name="name" placeholder="Enter Your Name:" value="<?php echo $row['name']; ?>" required><br><br>

                            <b>Password:</b>
                            <input class="input-box" type="password" name="password" placeholder="Enter Password" value="<?php echo $row['password']; ?>" required><br><br>             
                         
                    <button type="submit" class="signup-btn">Edit Profile</button>
                    </form>
                     <?php echo "<a href='Logoutsuccess.php?email={$row['email']}'><button type='submit' class='signup-btn'>logout</button><br><br></a>";?>
              </div>
              <img src="image/login1.png" class="login">

<?php }?>

       </body>
</html>
