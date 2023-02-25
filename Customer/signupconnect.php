<html>
<head><link rel="stylesheet" type="text/css" href="CSS FILE/style4.css"></head>
<boby>
<div class="sign-up-form">
<?php
	session_start();

$conn = new mysqli('localhost','root','','wordpress');

$email = $_POST['email'];
$password = $_POST['password'];
$Confirm_password = $_POST['Confirm_password'];

$s="select * from user where email='$email'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);

if($num == 1)
{
	header('location:signuperror.php');
}
else
{
$stmt =("insert into user(email,password,Confirm_password)
values('$email','$password','$Confirm_password')");
mysqli_query($conn,$stmt);
	header('location:signupsuccessfully.php');

}
?>
</div>
</body>
</html>