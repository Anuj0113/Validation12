<html>
<head><link rel="stylesheet" type="text/css" href="CSS FILE/style4.css"></head>
<boby>
<div class="sign-up-form">
<?php
	session_start();
$conn = new mysqli('localhost','root','','wordpress');

$number = $_POST['number'];
$password = $_POST['password'];
$Confirm_password = $_POST['Confirm_password'];

$s="select * from admin where number='$number' && password='$password' && Confirm_password='$Confirm_password'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['number']=$number;
 	header('location:Dashboard.php');
}
else
{
	header('location:loginerror.php');
}
?>
</div>
</body>
</html>