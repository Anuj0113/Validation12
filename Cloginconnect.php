<?php
	session_start();
	$conn = new mysqli('localhost','root','','wordpress');

	$email = $_POST['email'];
	$password = $_POST['password'];

	$s="select * from customer where email='$email' && password='$password'";
	$result = mysqli_query($conn,$s);
	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		$_SESSION['email']=$email;
 		header('location:Dashboard.php');
	}
	else
	{
		header('location:Cloginerror.php');
	}
?>
