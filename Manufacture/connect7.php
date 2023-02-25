<html>
<head><link rel="stylesheet" type="text/css" href="style4.css"></head>
<body>

<div class="sign-up-form">
<?php
            session_start();

$conn = new mysqli('localhost','root','','wordpress');

$email = $_POST['email'];

$area = $_POST['area'];


$s="select * from address where email='$email'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);

if($num==1)
{
header('location:connect8.php');
}
else
{
   $stmt = ("insert into address(email,area)
values('$email,$area')");

mysqli_query($conn,$stmt);
header('location:connect9.php');
}
 ?>
  


</div>
</body>
</html>